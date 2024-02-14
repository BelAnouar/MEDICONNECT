<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Specialitie;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialities = Specialitie::all();

        return view("medicine.index", ['specialities' => $specialities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'medicine_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'medicine_name' => 'required|string',
            'medicine_description' => 'required|string',
            'medicine_price' => 'required|numeric',
            'illness_id' => 'required',
        ]);


        $imagePath = $request->file('medicine_img')->store('medicine_images', 'public');


        Medicine::create([
            'image' => $imagePath,
            'name' => $request->input('medicine_name'),
            'desc' => $request->input('medicine_description'),
            'price' => $request->input('medicine_price'),
            'specialite_id' => $request->input('illness_id'),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([

            'edit_medicine_name' => 'required|string',
            'edit_medicine_description' => 'required|string',
            'edit_medicine_price' => 'required|numeric',
            'edit_illness_id' => 'required',
        ]);





        $medicine->update([

            'name' => $request->input('edit_medicine_name'),
            'desc' => $request->input('edit_medicine_description'),
            'price' => $request->input('edit_medicine_price'),
            'specialite_id' => $request->input('edit_illness_id'),
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();


        return redirect()->back();
    }
}
