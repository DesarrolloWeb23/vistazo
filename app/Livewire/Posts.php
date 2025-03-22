<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;

class Posts extends Component
{
    public $description;
    public $user_id;
    public $countPosts;
    public $profile_views;
    public $posts;

    public function mount(){
        //$this->posts = Post::all();
        //obtener el id del usuario autenticado
        $this->user_id = auth()->user()->id;
        $this->updatePosts();
    }

    //funcion para guardar un post
    public function savePost(){
        //validar los campos
        $this->validate([
            'description' => 'required'
        ]);

        //guardar el post
        Post::create([
            'description' => $this->description,
            'user_id' => $this->user_id,
            'created_at' => now()
        ]);

        $this->reset(['description']);
        $this->updatePosts();
    }

    public function updatePosts(){
        $this->countPosts = Post::where('user_id', $this->user_id)->count();
        $this->profile_views = User::find($this->user_id)->profile_views;
        $this->posts = Post::where('user_id', $this->user_id)->orderBy('created_at', 'desc')->get();
    }

    public function deletePost($id){
        Post::destroy($id);
        $this->updatePosts();
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
