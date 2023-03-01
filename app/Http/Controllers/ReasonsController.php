<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reasons;

class ReasonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reason = reasons::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description'=> 'required|string|max:1000',
            'reason1'=> 'required|string|max:200',
            'reason2'=> 'required|string|max:200',
            'reason3'=> 'required|string|max:200',
            'reason4'=> 'required|string|max:200',
            'reason5'=> 'required|string|max:200',
            'reason6'=> 'required|string|max:200',
            'reason7'=> 'required|string|max:200',
            'reason8'=> 'required|string|max:200',
        ], [
            'title.required' => 'El titulo es requerido.',
            'description.required' => 'La descripcion es requerido.',
            'reason1.required' => 'La razon es requerida.',
            'reason2.required' => 'La razon es requerida.',
            'reason3.required' => 'La razon es requerida.',
            'reason4.required' => 'La razon es requerida.',
            'reason5.required' => 'La razon es requerida.',
            'reason6.required' => 'La razon es requerida.',
            'reason7.required' => 'La razon es requerida.',
            'reason8.required' => 'La razon es requerida.',

            'title.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'description.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'reason1.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'reason2.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'reason3.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'reason4.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'reason5.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'reason6.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'reason7.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'reason8.max' => 'El numero de caracteres no debe ser superior  :max characters.'
        ]);

        try {
            $reason->update($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while updating the reasons Section. Please try again.']);
        }

        return redirect()->back()->with('success', 'Reason updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
