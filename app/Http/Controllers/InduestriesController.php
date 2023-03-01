<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\industries;

class InduestriesController extends Controller
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
            'subtitle'=> 'required|string|max:400',
            'content'=> 'required|string|max:1500',
            'pretitle'=> 'required|string|max:255',
            'subpretitle'=> 'required|string|max:255'
        ], [
            'title.required' => 'El titulo es requerido.',
            'subtitle.required' => 'El sub-titulo es requerido.',
            'content.required' => 'El contenido es requerido.',
            'pretitle.required' => 'El pre-titulo es requerido.',
            'subpretitle.required' => 'El sub-pre-titulo es requerido.',

            'title.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'subtitle.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'content.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'pretitle.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'subpretitle.max' => 'El numero de caracteres no debe ser superior a  :max characters.'
        ]);

        $industry = industries::find($id);
        $industry ->title = $validatedData['title'];
        $industry ->subtitle = $validatedData['subtitle'];
        $industry ->content = $validatedData['content'];
        $industry ->pretitle = $validatedData['pretitle'];
        $industry ->subpretitle = $validatedData['subpretitle'];

        if($request->hasFile('imageUrl')){
            $file = $request->file('imageUrl');
            $extension = $file->extension();
            $fileName = 'industries_'.time().'.' .$extension;
            $destinationPath = public_path().'/images/industries' ;
            $file->move($destinationPath,$fileName);
            $industry->imageUrl = '/images/industries/'. $fileName;
        }


        try {
            $industry->save();
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
