<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $newTodo = '';

    public $todos = [
        'Buy milk',
        'Buy bread',
        'Buy eggs',
    ];

    public function add()
    {
        $this->todos[] = $this->newTodo;
        $this->newTodo = '';
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
