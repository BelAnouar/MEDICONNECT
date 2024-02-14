<?php

namespace App\Livewire;

use Livewire\Component;

class MutiForm extends Component
{
    public $totalSteps = 4;
    public $currentStep = 1;




    public function mount()
    {
        $this->currentStep = 1;
    }
    public function render()
    {
        return view('livewire.muti-form');
    }


    public function increaseStep()
    {

        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {

        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }
}
