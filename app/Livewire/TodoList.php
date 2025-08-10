<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    protected $rules = [
        'newTodo' => [
            'required',
            'min:3',
            'max:255',
        ],
    ];

    public $newTodo = '';
    public $todos = [];

    public function mount()
    {
        $this->todos = [
            'Buy milk',
            'Buy bread',
            'Buy eggs',
        ];
    }

    public function add()
    {
        $this->validate();
        $this->todos[] = trim($this->newTodo);
        $this->reset('newTodo');
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
