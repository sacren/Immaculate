<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $step = 2;
    public $errorMessage = '';

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function incrementBy($number)
    {
        $number = filter_var($number, FILTER_VALIDATE_INT);
        $this->errorMessage = '';

        if ($number === false) {
            $this->errorMessage = 'Invalid number';
            return;
        }

        $this->count += $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
