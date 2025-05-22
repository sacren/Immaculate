<?php

namespace App\Livewire;

use Livewire\Component;

class MakePlan extends Component
{
    public $name = "We're making a plan.";

    public $shout = false;

    public $greeting = 'Hello!';

    public function render()
    {
        return view('livewire.make-plan');
    }
}
