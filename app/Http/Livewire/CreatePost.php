<?php
namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = true;
    public $title;
    public $content;

    public function render()
    {
        return view('livewire.create-post');
    }

    /** Save new post
     * @return [type]
     */
    public function save()
    {
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        // emit es un metodo para crear eventos (Listeners)
        // este evento se usa para actualizar la lista de articulos cuando se crea uno nuevo
        // $this->emit('renderArticle'); // Esto será escuchado por todo los componentes
        $this->emitTo('articles', 'renderArticle'); // Esto solo será escuchado por el componente 'articles'

        $this->emit('alert');

        // Resetea los valores
        $this->reset(['title', 'content']);
    }
}