<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Author as Authors;

class Author extends Component
{
    public $author;
    public $posts;
    public $author_row;

    public function mount($slug)
    {
        $this->author = $slug;

        $this->author_row = Authors::where('slug', $slug)->first();
        $this->posts = Post::where('author_id', '=', $this->author_row->id)->get();
    }

    public function render()
    {
        return view('livewire.author')
            ->layout('layouts.app')
            ->title('Bài viết của ' . $this->author);
    }
}