<?php

namespace App\Http\Controllers;

use App\Models\Service_vision;
use Illuminate\Http\Request;

class ServiceVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Service_visions=Service_vision::all();
        return view('Service-vision.index' , compact('Service_visions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Service-vision.index');
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


        Service_vision::create($validatedData);
        return redirect()->route('Service-vision.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service_vision $service_vision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $Service_vision = Service_vision::findOrFail($id);
        return view('Service-vision.edit', compact('Service_vision'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $validatedData=$request->validate([
            'name'=> 'required',
        ]);

        $Service_vision=Service_vision::findOrFail($id);
        $Service_vision->update($validatedData);

        return to_route('Service-vision.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Service_vision::findOrFail($id)->delete();
        return to_route('Service-vision.index');
    }
}
