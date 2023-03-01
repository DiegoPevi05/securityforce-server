<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faqs;

class FaqsController extends Controller
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
        $faqs_local = new faqs;

        $validatedData = $request->validate([
            'question' => 'required|string|max:255',
            'answer'=> 'required|string|max:800',
        ], [
            'question.required' => 'El titulo es requerido.',
            'answer.required' => 'El sub-titulo es requerido.',
            'question.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'answer.max' => 'El numero de caracteres no debe ser superior a  :max characters.'
        ]);


        $faqs_local->question = $request->question;
        $faqs_local->answer   = $request->answer;

        try {
            $faqs_local->save();
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while creating the faq question. Please try again.']);
        }

        return redirect()->back()->with('success', 'Faq created successfully.');



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
        $faq = faqs::findOrFail($id);

        $validatedData = $request->validate([
            'question' => 'required|string|max:255',
            'answer'=> 'required|string|max:800',
        ], [
            'question.required' => 'El titulo es requerido.',
            'answer.required' => 'El sub-titulo es requerido.',
            'question.max' => 'El numero de caracteres no debe ser superior  :max characters.',
            'answer.max' => 'El numero de caracteres no debe ser superior a  :max characters.'
        ]);

        try {
            $faq->update($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while updating the faq Section. Please try again.']);
        }

        return redirect()->back()->with('success', 'Faq updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq=faqs::findorFail($id);

        try {
            $faq->delete();
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while deleting the faq Section. Please try again.']);
        }

        return redirect()->back()->with('success', 'Faq deleted successfully.');
    }
}
