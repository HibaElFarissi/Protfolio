<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }
    
    public function index()
    {
        //
        $infos = info::all();
        $Educations=Education::paginate(3);
        return view('Educations.index' , compact('Educations','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $Education = new Education();
        $isUpdate = false;
        return view('Educations.form', compact('Education' , 'isUpdate','infos'));
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
            'description'=> 'nullable',
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
        $infos = info::all();
        $Education = Education::findOrFail($id);
        $isUpdate = true;
        return view('Educations.form', compact('isUpdate','Education','infos'));
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
            'description'=> 'nullable',

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
