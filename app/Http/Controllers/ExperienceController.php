<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Experiences=Experience::all();
        return view('Experiences.index' , compact('Experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Experiences.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([

            'name_company'=> 'required',
            'Start_Date'=> 'required',
            'End_Date'=> 'required',
            'subject'=> 'required',
            'description'=> 'min:50|nullable',
        ]);

        Experience::create($validatedData);
        return redirect()->route('Experiences.index');
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
        $Experience = Experience::findOrFail($id);
        return view('Experiences.edit', compact('Experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $validatedData = $request->validate([

            'name_company'=> 'required',
            'Start_Date'=> 'required',
            'End_Date'=> 'required',
            'subject'=> 'required',
            'description'=> 'min:50|nullable',
        ]);

        $Experience=Experience::findOrFail($id);
        $Experience->update($validatedData);
        return redirect()->route('Experiences.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Experience::findOrfail($id)->delete();
        return to_route('Educations.index');
    }
}
