<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hero;
use App\Models\us;
use App\Models\industries;
use App\Models\faqs;
use App\Models\reasons;
use App\Models\contact;
use App\Models\News;

class WebContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero       = hero::firstOrCreate([]);
        $us         = us::firstOrCreate([]);
        $industries = industries::all();
        $faqs       = faqs::all();
        $reasons    = reasons::firstOrCreate([]);
        $contact    = contact::firstOrCreate([]);
        return view('webcontent', compact('hero','us','industries','faqs','reasons','contact'));
    }

    public function getAllData()
    {
        $hero       = hero::firstOrCreate([]);
        $us         = us::firstOrCreate([]);
        $industries = industries::all();
        $faqs       = faqs::all();
        $reasons    = reasons::firstOrCreate([]);
        $contact    = contact::firstOrCreate([]);
        $news       = News::all();

        return response()->json([
            'hero' => $hero,
            'us' => $us,
            'industries' => $industries,
            'faqs' => $faqs,
            'reasons' => $reasons,
            'contact' => $contact,
            'news' => $news
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
