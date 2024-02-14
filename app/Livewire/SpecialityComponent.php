<?php

namespace App\Livewire;

use App\Models\Specialitie;
use Livewire\Component;

class SpecialityComponent extends Component
{
    public $specialityToEdit;
    public function render()
    {
        $specialities = Specialitie::all();
        return view('livewire.speciality-component', ['specialities' => $specialities]);
    }

    public function openEditModal($medicineId)
    {
        $this->specialityToEdit = Specialitie::find($medicineId);
        $this->dispatch('openEditModal');
    }
}
