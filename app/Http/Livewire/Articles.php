<?php
namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Articles extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';

    protected $listeners = ['renderArticle' => 'render'];
    // variable que almacena los eventos
    // evento => metodo a ejecutar
    // Si el evento y el metodo comparten el mismo, vasta con ['render']

    public function render()
    {
        $posts = Post::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('content', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->get();
        return view('livewire.articles', compact('posts'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
        $this->sort = $sort;
    }
}