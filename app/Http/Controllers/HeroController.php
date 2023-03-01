<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hero;

class HeroController extends Controller
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
        $heroContent = hero::findOrFail($id);

        $validatedData = $request->validate([
            'writeword' => 'required|string|max:255',
            'header'=> 'required|string|max:255',
            'title'=> 'required|string|max:255',
            'subtitle'=> 'required|string|max:255',
            'brochureUrl' => 'nullable|string|max:1000'
        ], [
            'writeword.required' => 'El encabezado auto-escrito es requerido.',
            'header.required' => 'El encabezado es requerido.',
            'title.required' => 'El titulo es importante.',
            'subtitle.required' => 'El subtitulo es imporante.',

            'writeword.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'header.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'title.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'subtitle.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'brochureUrl.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
        ]);

        try {
            $heroContent->update($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while updating the Hero Section. Please try again.']);
        }

        return redirect()->back()->with('success', 'Hero Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
