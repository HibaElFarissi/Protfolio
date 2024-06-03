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
        $Experiences=Experience::paginate(3);
        return view('Experiences.index' , compact('Experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Experiences = new Experience();
        $isUpdate = false;
        return view('Experiences.form', compact('Experiences', 'isUpdate'));
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
            'description'=> 'nullable',
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
        $Experience=Experience::findOrFail($id);
        $isUpdate = true;
        return view('Experiences.form', compact('Experience', 'isUpdate'));
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
            'description'=> 'nullable',
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
