<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;


class ContactController extends Controller
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
        $contact = contact::findOrFail($id);

        $validatedData = $request->validate([
            'contact_subtitle' => 'required|string|max:255',
            'presencia'=> 'required|string|max:100',
            'phone1'=> 'required|string|max:255',
            'address'=> 'required|string|max:255',
            'mobile1'=> 'required|string|max:255',
            'mobile2'=> 'required|string|max:255',
            'website'=> 'required|string|max:255',
            'facebook'=> 'required|string|max:255',
            'email'=> 'required|string|max:255',
            'instagram'=> 'required|string|max:255',
            'tiktok'=> 'required|string|max:255',
        ], [
            'contact_subtitle.required' => 'El titulo es requerido.',
            'presencia.required' => 'El contenido es requerido.',
            'address'=> 'La imagen es requerida.',
            'phone1.required' => 'La imagen es requerida.',
            'mobile1.required' => 'La imagen es requerida.',
            'mobile2.required' => 'La imagen es requerida.',
            'website.required' => 'La imagen es requerida.',
            'facebook.required' => 'La imagen es requerida.',
            'email.required' => 'La imagen es requerida.',
            'instagram.required' => 'La imagen es requerida.',
            'tiktok.required' => 'La imagen es requerida.',

            'contact_subtitle.required' => 'El numero de caracteres no debe ser superior  :max characters.',
            'presencia.required' => 'El numero de caracteres no debe ser superior  :max characters.',
            'phone1.required' =>  'El numero de caracteres no debe ser superior  :max characters.',
            'mobile1.required' => 'El numero de caracteres no debe ser superior  :max characters.',
            'mobile2.required' => 'El numero de caracteres no debe ser superior  :max characters.',
            'website.required' => 'El numero de caracteres no debe ser superior  :max characters.',
            'facebook.required' => 'El numero de caracteres no debe ser superior  :max characters.',
            'email.required' => 'El numero de caracteres no debe ser superior  :max characters.',
            'instagram.required' => 'El numero de caracteres no debe ser superior  :max characters.',
            'tiktok.required' => 'El numero de caracteres no debe ser superior  :max characters.'
        ]);

        try {
            $contact->update($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while updating the contact Section. Please try again.']);
        }

        return redirect()->back()->with('success', 'Contact Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
