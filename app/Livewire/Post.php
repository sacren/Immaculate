<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Blog Post')]
class Post extends Component
{
    public $title = 'Welcome to My First Post';
    public $content = 'This is the content of the blog post. Hello World!';
    public $author = 'Some User';

    public function addContent()
    {
    }

    public function render()
    {
        return view('livewire.post');
    }
}
