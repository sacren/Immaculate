<?php

namespace App\Livewire;

use Livewire\Component;

class MakePlan extends Component
{
    public function render()
    {
        $name = "We're making a plan.";

        return view('livewire.make-plan', compact('name'));
    }
}
