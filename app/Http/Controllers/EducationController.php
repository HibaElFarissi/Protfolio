<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Educations=Education::all();
        return view('Educations.index' , compact('Educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Educations.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name_school'=> 'required',
            'specialty'=> 'required',
            'Start_Date'=> 'required',
            'End_Date'=> 'required',
            'description'=> 'min:25|nullable',
        ]);

        Education::create($validatedData);
        return redirect()->route('Educations.index');

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
        $Education = Education::findOrFail($id);
        return view('Educations.edit', compact('Education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData=$request->validate([
            'name_school'=> 'required',
            'specialty'=> 'required',
            'Start_Date'=> 'required',
            'End_Date'=> 'required',
            'description'=> 'min:25|nullable',

        ]);

        $Education=Education::findOrFail($id);
        $Education->update($validatedData);

        return to_route('Educations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::findOrFail($id)->delete();
        return to_route('Educations.index');
    }
}
