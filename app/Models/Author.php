<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

/**
 *
 * @property string $name
 * @property ?string $email
 * @property ?string $photo
 * @property ?string $bio
 * @property ?string $github_handle
 * @property ?string $twitter_handle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Author extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'authors';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'photo',
        'bio',
    ];

    /**
     * @var array<string>
     */
    protected $appends = [
        'photo_url',
    ];

    public function photoUrl(): Attribute
    {
        return Attribute::get(fn () => $this->photo ? asset(Storage::url($this->photo)) : '');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'author_id');
    }
}
