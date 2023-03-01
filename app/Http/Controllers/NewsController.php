<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news       = News::all();
        return view('news', compact('news'));
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
        $new = new News;

        $validatedData = $request->validate([
            'textPreview' => 'required|string|max:255',
            'title'=> 'required|string|max:255',
            'body'=> 'required|string|max:800',
            'imageUrl'=> 'mimes:jpeg,png,jpg,gif,svg'
        ], [
            'textPreview.required' => 'El titulo inicial es requerido.',
            'title.required' => 'El titulo es requerido.',
            'body.required' => 'El contenido es requerido.',

            'textPreview.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'title.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'body.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
        ]);


        $file = $request->file('imageUrl');
        $extension = $file->extension();
        $fileName = 'news_'.time().'.' .$extension;
        $destinationPath = public_path().'/images/news' ;
        $file->move($destinationPath,$fileName);


        $new->textPreview = $request->textPreview;
        $new->title    = $request->title;
        $new->body     = $request->body;
        $new->imageUrl = '/images/news/'. $fileName;

        try {
            $new->save();
        } catch (\Exception $e) {
            error_log('Some message here.');
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while creating the news. Please try again.']);
        }

        return redirect()->back()->with('success', 'News created successfully.');
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
        $new = News::findOrFail($id);

        $validatedData = $request->validate([
            'textPreview' => 'required|string|max:255',
            'title'=> 'required|string|max:255',
            'body'=> 'required|string|max:800',
            'imageUrl'=> 'required|string|max:255'
        ], [
            'textPreview.required' => 'El titulo inicial es requerido.',
            'title.required' => 'El titulo es requerido.',
            'body.required' => 'El contenido es requerido.',
            'imageUrl.required' => 'La imagen es requerido.',

            'textPreview.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'title.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'body.max' => 'El numero de caracteres no debe ser superior a  :max characters.',
            'imageUrl.max' => 'El numero de caracteres no debe ser superior a  :max characters.'
        ]);

        try {
            $new->update($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while updating the News Section. Please try again.']);
        }

        return redirect()->back()->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $new=News::findorFail($id);

        try {
            $new->delete();
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while deleting the News Section. Please try again.']);
        }

        return redirect()->back()->with('success', 'News deleted successfully.');
    }
}
