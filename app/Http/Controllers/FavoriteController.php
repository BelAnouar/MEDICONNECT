<?php

namespace App\Http\Controllers;

use App\Models\favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{

    public function store(Request $request)
    {
        favorite::create([
            'user_id' => Auth::user()->id,
            'doctor_id' => $request->docter_id
        ]);
    }
}
