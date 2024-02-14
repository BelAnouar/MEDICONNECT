<?php

namespace App\Http\Controllers;

use App\Models\Specialitie;
use Illuminate\Http\Request;

class SpeciatieController extends Controller
{
    public function create()
    {
        $specialities = Specialitie::all();

        return view('specialite.index', ["specialities" => $specialities]);
    }
    public function store(Request $request)
    {

        Specialitie::create(['name' => $request->name]);
        return redirect()->back();
    }
    public function update(Request $request, Specialitie $specialitie)
    {

        $specialitie->update(['name' => $request->name]);

        return redirect()->back();
    }
    public function destroy(Specialitie $specialitie)
    {
        $specialitie->delete();
        return redirect()->back();
    }
}
