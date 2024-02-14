<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class appointmentController extends Controller
{
    public function index()
    {
        return view('rende');
    }
    public function store(Request $request)
    {
        appointment::create([
            'user_id' => Auth::user()->id,
            'doctor_id' => $request->docter_id
        ]);
    }
}
