<?php

namespace App\Livewire\Author;

use Livewire\Component;

class CardHorizontal extends Component
{
    public $href;
    public $image;
    public $title;
    public $content;
    public $class;
    public $timestamp;

    public function mount($href, $image, $title, $content, $class = null, $timestamp = null) {
        $this->href = $href;
        $this->image = $image;
        $this->title = $title;
        $this->content = $content;
        $this->class = $class;
        $this->timestamp = $timestamp;
    }
    
    public function render()
    {
        return view('livewire.author.card-horizontal');
    }
}
