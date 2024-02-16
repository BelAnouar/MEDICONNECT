<?php

namespace App\Livewire;

use App\Models\Doctor;
use App\Models\User;
use Livewire\WithFileUploads;
use Livewire\Component;

class Registerl extends Component
{
    use WithFileUploads;
    public $totalSteps = 3;
    public $currentStep = 1;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $avatar;
    public $role;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed file types and size
        'role' => 'required|in:doctor,patient',
    ];


    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.registerl');
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


    public function register()
    {


        // Handle image upload
        if ($this->avatar) {
            // $imagePath =  $this->avatar->store('photos');
            $imagePath =  $this->avatar->store('profile_images', 'public');
        }

        // Save user data
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role' => $this->role,
            'avatar' => $imagePath ?? null,
        ]);


        if ($user->role == "doctor") {
            Doctor::create([
                'user_id' => $user->id,
                'specialitie_id' => 1
            ]);
        }


        $this->reset();
        $this->currentStep = 1;


        return redirect()->route('login');
    }
}
