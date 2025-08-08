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
        $trimmed = trim($this->newTodo);

        if ($trimmed === '') {
            return;
        }

        $this->todos[] = $trimmed;
        $this->reset('newTodo');
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
