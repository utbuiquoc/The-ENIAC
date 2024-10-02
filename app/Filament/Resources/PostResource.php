<?php

namespace App\Filament\Resources;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Traits\HasContentEditor;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;
use App\Models\Author;


use function now;

class PostResource extends Resource
{
    use HasContentEditor;

    protected static ?string $model = Post::class;

    protected static ?string $slug = 'posts';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Article';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->label(__('filament-blog.title'))
                        ->required()
                        ->live(debounce: 500)
                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                            if (($get('slug') ?? '') !== Str::slug($old)) {
                                return;
                            }

                            $set('slug', Str::slug($state));
                        }),

                    Forms\Components\TextInput::make('slug')
                        ->label(__('filament-blog.slug'))
                        ->required()
                        ->unique(Post::class, 'slug', fn ($record) => $record),

                    Forms\Components\Textarea::make('excerpt')
                        ->label(__('filament-blog.excerpt'))
                        ->rows(2)
                        ->minLength(50)
                        ->maxLength(1000)
                        ->columnSpan([
                            'sm' => 2,
                        ]),

                    Forms\Components\FileUpload::make('banner')
                        ->label(__('filament-blog.banner'))
                        ->image()
                        ->maxSize(config('filament-blog.banner.maxSize', 5120))
                        ->imageCropAspectRatio(config('filament-blog.banner.cropAspectRatio', '16:9'))
                        ->disk(config('filament-blog.banner.disk', 'public'))
                        ->directory(config('filament-blog.banner.directory', 'blog'))
                        ->columnSpan([
                            'sm' => 2,
                        ]),

                    self::getContentEditor('content'),

                    Forms\Components\Select::make('author_id')
                        ->label(__('filament-blog.author'))
                        ->relationship(
                            name: 'author', 
                            titleAttribute: 'name',
                            modifyQueryUsing: fn (Builder $query) => $query->where('user_id', '=', Auth::user()->id)
                        )
                        ->preload()
                        ->required(),

                    Forms\Components\Select::make('category_id')
                        ->label(__('filament-blog.category'))
                        ->relationship(name: 'category', titleAttribute: 'name')
                        ->required(),

                    Forms\Components\DatePicker::make('published_at')
                        ->label(__('filament-blog.published_date')),
                    SpatieTagsInput::make('tags')
                        ->label(__('filament-blog.tags')),
                ])
                ->columns([
                    'sm' => 2,
                ])
                ->columnSpan(2),
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\Placeholder::make('created_at')
                        ->label(__('filament-blog.created_at'))
                        ->content(fn (
                            ?Post $record
                        ): string => $record ? $record->created_at->diffForHumans() : '-'),
                    Forms\Components\Placeholder::make('updated_at')
                        ->label(__('filament-blog.last_modified_at'))
                        ->content(fn (
                            ?Post $record
                        ): string => $record ? $record->updated_at->diffForHumans() : '-'),
                ])
                ->columnSpan(1),
        ])
        ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('banner')
                    ->label(__('filament-blog.banner'))
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('filament-blog.title'))
                    ->searchable()
                    ->wrap()
                    ->sortable(),
                Tables\Columns\TextColumn::make('author.name')
                    ->label(__('filament-blog.author_name'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('filament-blog.category_name'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label(__('filament-blog.published_at'))
                    ->date()
                    ->sortable(),
            ])->defaultSort(config('filament-blog.sort.column', 'published_at'), config('filament-blog.sort.direction', 'asc'))
            ->filters([
                Tables\Filters\Filter::make('published_at')
                    ->form([
                        Forms\Components\DatePicker::make('published_from')
                            ->placeholder(fn ($state): string => 'Dec 18, ' . now()->subYear()->format('Y')),
                        Forms\Components\DatePicker::make('published_until')
                            ->placeholder(fn ($state): string => now()->format('M d, Y')),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['published_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('published_at', '>=', $date),
                            )
                            ->when(
                                $data['published_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('published_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->with(['author', 'category']);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'slug', 'author.name', 'category.name'];
    }

    public static function getGlobalSearchResultDetails($record): array
    {
        /** @var Post $record */
        $details = [];

        if ($record->author) {
            $details['Author'] = $record->author->name;
        }

        if ($record->category) {
            $details['Category'] = $record->category->name;
        }

        return $details;
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-blog.posts');
    }

    public static function getModelLabel(): string
    {
        return __('filament-blog.post');
    }
}
