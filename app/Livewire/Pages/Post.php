<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Post as Posts;

class Post extends Component
{
    public $article;

    public function mount($slug) {
        $this->article = Posts::where('slug', $slug)->first();
    }
    
    public function render()
    {
        return view('livewire.pages.post')
            ->layout('layouts.app')
            ->title($this->article->title);
    }
}
