<?php

namespace App\Livewire;

use Livewire\Component;

class MakePlan extends Component
{
    public $name = null;
    public $shout = false;
    public $greetings = null;

    /**
     * Mount the component.
     *
     * @return void
     */
    public function mount(array $name): void
    {
        $this->name = $name['title'];
        $this->greetings = $name['greetings'];
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
