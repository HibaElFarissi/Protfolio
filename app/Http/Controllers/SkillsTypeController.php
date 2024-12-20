<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Skills;
use App\Models\Skills_type;
use Illuminate\Http\Request;

class SkillsTypeController extends Controller
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
        $Skills_Types=Skills_type::all();
        return view('Skills-Types.index' , compact('Skills_Types','infos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        return view('Skills-Types.index','infos');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);

        Skills_type::create($validatedData);
        return to_route('Skills-Types.index');

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
        $Skills_Type = Skills_type::findOrFail($id);
        return view('Skills-Types.edit', compact('Skills_Type','infos'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'name'=> 'required',
        ]);

        $Skills_type=Skills_type::findOrfail($id);
        $Skills_type->update($validatedData);

        return to_route('Skills-Types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Skills_type::findOrFail($id)->delete();
        return to_route('Skills-Types.index');
    }
}
