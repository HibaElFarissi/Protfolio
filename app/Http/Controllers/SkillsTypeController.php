<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use App\Models\Skills_type;
use Illuminate\Http\Request;

class SkillsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Skills_Types=Skills_type::all();
        return view('Skills-Types.index' , compact('Skills_Types'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Skills-Types.index');

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
        $Skills_Type = Skills_type::findOrFail($id);
        return view('Skills-Types.edit', compact('Skills_Type'));

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
