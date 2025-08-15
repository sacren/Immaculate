<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Counter')]
class Counter extends Component
{
    public $count = 0;
    public $step;
    private int $increment = 2;

    public function mount()
    {
        $this->step = $this->increment;
    }

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
        $this->count += $this->increment;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
