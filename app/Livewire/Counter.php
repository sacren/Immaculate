<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $step = 2;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function incrementBy()
    {
        $this->count += $this->step;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
