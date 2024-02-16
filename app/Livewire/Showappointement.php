<?php

namespace App\Livewire;

use App\Models\appointment;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Showappointement extends Component
{
    public $appointementId;
    public $commantID;

    public $commant;
    public $starCount;
    public $doctorId;
    public $idDoct;

    public function mount($doctorId)
    {
        $this->doctorId = $doctorId;
        $this->idDoct = $doctorId;
    }
    public function render()
    {
        $appointements = appointment::where('doctor_id', $this->doctorId)->get();
        $commants = comment::with('doctor', 'patient')->where('DoctorID', $this->doctorId)->get();
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

        if ($this->starCount !== null) {

            Log::info('Sending comment...');
            comment::create([
                'PatientID' => Auth::user()->id,
                'DoctorID' => $this->idDoct,
                'Rating' => $this->starCount,
                'Comment' => $this->commant
            ]);
    
            Log::info('Comment sent.');
            $this->reset(['commant', 'starCount']);
        } 
       
        
        
        

    }
}
