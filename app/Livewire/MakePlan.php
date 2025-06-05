<?php

namespace App\Livewire;

use Livewire\Component;

class MakePlan extends Component
{
    public $name = "We're making a plan.";
    public $shout = false;
    public $greetings = ['Hello!'];

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->name = 'Mounting the plan.';
    }

    public function resetName($name = 'The plan is ready.'): void
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.make-plan');
    }
}
