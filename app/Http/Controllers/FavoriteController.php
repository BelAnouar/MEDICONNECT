<?php

namespace App\Http\Controllers;

use App\Models\favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::with('doctor', 'doctor.user', 'doctor.specialitie')
            ->where("user_id", Auth::user()->id)
            ->get();


        return view('favorite.index', ["favorites" => $favorites]);
    }

    public function store(Request $request)
    {
        favorite::create([
            'user_id' => Auth::user()->id,
            'doctor_id' => $request->docter_id
        ]);

        return redirect()->back();
    }
}
