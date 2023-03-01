<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\us;

class UsController extends Controller
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


        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content'=> 'nullable|string|max:1500',
        ], [
            'title.required' => 'El titulo es requerido.',
            'content.required' => 'El contenido es requerido.',
            'title.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'content.max' => 'El numero de caracteres no debe ser superior a  :max characters.'
        ]);

        $us = us::find($id);
        $us->title    = $validatedData['title'];
        $us->content  = $validatedData['content'];

        if($request->hasFile('imageUrl')){
            $file = $request->file('imageUrl');
            $extension = $file->extension();
            $fileName = 'us_'.time().'.' .$extension;
            $destinationPath = public_path().'/images/us';
            $file->move($destinationPath,$fileName);
            $us->imageUrl = '/images/us/'. $fileName;
            error_log('this is executed');
        }

        try {
            $us->save();
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while updating the Us Section. Please try again.']);
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
