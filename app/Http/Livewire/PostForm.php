<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class PostForm extends Component
{

    use WithPagination,Actions;
    

    public $title;
    public $description;
    public $post_id;

    protected $rules = [
        'title' =>'required|unique:posts|max:255|min:10',
        'description' => 'required|max:255|min:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

   

    public function storePost()
    {

        $this->validate();

        $post = new Post();

        $post->title = $this->title;

        $post->description = $this->description;

        $post->save();

        $this->notification()->success(
            $title = 'Post saved',
            $description = 'Your profile was successfull saved'
        );
        $this->reset();
        
    }
  
   
   


    public function render()
    {
        return view('livewire.post-form', ['posts' => Post::latest()->paginate(10)]);
    }
}
