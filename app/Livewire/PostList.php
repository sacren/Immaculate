<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('All Posts')]
class PostList extends Component
{
    public $posts = [];

    public function mount()
    {
        $this->posts = [
            [
                'id' => 1,
                'title' => 'Welcome to My First Post',
                'content' => 'This is the first blog post. Hello World!',
                'author' => 'Alice Johnson',
                'created_at' => now()->subDays(5)->format('F j, Y'),
            ],
            [
                'id' => 2,
                'title' => 'Advanced Laravel Tips',
                'content' => 'Here are some pro tips for Laravel developers.',
                'author' => 'Bob Smith',
                'created_at' => now()->subDays(3)->format('F j, Y'),
            ],
            [
                'id' => 3,
                'title' => 'Livewire is Awesome',
                'content' => 'Livewire makes dynamic interfaces so easy.',
                'author' => 'Charlie Lee',
                'created_at' => now()->subDay()->format('F j, Y'),
            ],
        ];
    }

    public function editPost()
    {
    }

    public function deletePost()
    {
    }

    public function render()
    {
        return view('livewire.post-list');
    }
}
