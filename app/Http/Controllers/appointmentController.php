<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class appointmentController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('specialitie')->get();
        return view('rende', ['doctors' => $doctors]);
    }
    public function store(Request $request)
    {
        appointment::create([
            'user_id' => Auth::user()->id,
            'doctor_id' => $request->docter_id
        ]);
    }
}
