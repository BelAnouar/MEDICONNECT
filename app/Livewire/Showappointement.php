<?php

namespace App\Livewire;

use App\Models\appointment;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Showappointement extends Component
{
    public $appointementId;
    public $commantID;

    public $commant;
    public $starCount;
    public $doctorId;

    public function mount($doctorId)
    {
        $this->doctorId = $doctorId;
    }
    public function render()
    {
        $appointements = appointment::where('doctor_id', $this->doctorId)->get();
        $commants = comment::with('doctor', 'patient')->where('doctor_id', $this->commantID->doctor_id)->get();
        return view('livewire.showappointement', ["appointements" => $appointements, "commants" => $commants]);
    }

    public function handleStarClick($count)
    {
        $this->starCount = $count;
    }

    public function openEditModal($medicineId)
    {
        $this->appointementId = appointment::find($medicineId);
        $this->dispatch('openEditModal');
    }
    public function openCommantModal($medicineId)
    {
        $this->commantID = appointment::find($medicineId);
        $this->dispatch('openCommantModal');
    }

    public function reserve($appointmentId)
    {

        $appointment = appointment::find($appointmentId);


        $appointment->update(['user_id' => Auth::user()->id, 'status' => 'taken']);
    }


    public function sendCommant()
    {
        comment::create([
            'PatientID' => Auth::user()->id,
            'DoctorID' => $this->commantID->doctor_id,
            'Rating' => $this->starCount,
            'Comment' => $this->commant
        ]);
    }
}
