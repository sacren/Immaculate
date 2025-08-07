<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todos = [
        'Buy milk',
        'Buy bread',
        'Buy eggs',
    ];

    public function render()
    {
        return view('livewire.todo-list');
    }
}
