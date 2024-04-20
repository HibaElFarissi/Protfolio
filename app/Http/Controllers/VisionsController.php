<?php

namespace App\Http\Controllers;

use App\Models\Visions;
use Illuminate\Http\Request;

class VisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Service_visions=Visions::all();
        return view('visions.index' , compact('Service_visions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('visions.index');
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

        Visions::create($validatedData);
        return to_route('visions.index');
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
        $Service_vision = Visions::findOrFail($id);
        return view('visions.form', compact('Service_vision'));
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

        $Service_vision=Visions::findOrFail($id);
        $Service_vision->update($validatedData);
        return to_route('visions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Visions::findOrFail($id)->delete();
        return to_route('visions.index');
    }
}
