<?php
namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Articles extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.articles', compact('posts'));
    }
}