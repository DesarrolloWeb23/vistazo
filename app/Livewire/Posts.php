<?php

namespace App\Livewire;

use Livewire\Component;

class Posts extends Component
{
    public function mount(){
        $this->posts = Post::all();
    }
    
    public function render()
    {
        return view('livewire.posts');
    }
}
