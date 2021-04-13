<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
class PostComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $titulo,$body;
    public $view = 'create';
    public function render()
    {
        return view('livewire.post-component',[
            'posts' => Post::orderBy('id','desc')->paginate(8)
        ]);
    }

    public function destroy($id){
        Post::destroy($id);
    }

    public function store(){
        $this->validate([
            'titulo' => 'required',
            'body' => 'required'
        ]);
        Post::create([
            'titulo' => $this->titulo,
            'body' => $this->body
        ]);
    }
    public function edit($id){
        $post = Post::find($id);
        $this->titulo= $post->titulo;
        $this->body= $post->body;
        $this->view = 'edit';
    }
    public function default(){
        $this->titulo='';
        $this->body='';
        $this->view = 'create';
    }
}
