<?php
namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = true;
    public $title;
    public $content;

    protected $rules = [
        'title' => 'required | min:5 | max:100',
        'content' => 'required | min:10',
    ];

    public function render()
    {
        return view('livewire.create-post');
    }

    /** Save new post
     * @return [type]
     */
    public function save()
    {
        $this->validate();

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

    // Este metodo se ejecuta cuando una propiedad cambia su valor
    // Esto validaría los datos en tiempo real, para que esto funcione se debe eliminar la palabra .defer de la propiedad en el campo que se desee validar
    // wire:model.defer="title" -> wire:model="title"
    // Tener en cuenta que esto implica una conexión por cada caracter escrito o borrado
    public function updated($property)
    {
        $this->validateOnly($property);
    }
}