<?php

namespace App\Livewire;

use App\Models\Medicine;
use App\Models\Specialitie;
use Livewire\Component;

class MedicineComponent extends Component
{


    public $medicineToEdit;
    public function render()
    {
        $specialities = Specialitie::all();
        $medicines = Medicine::all();
        return view('livewire.medicine-component', ['medicines' => $medicines, 'specialities' => $specialities]);
    }
    public function openEditModal($medicineId)
    {
        $this->medicineToEdit = Medicine::find($medicineId);
        $this->dispatch('openEditModal');
    }
}
