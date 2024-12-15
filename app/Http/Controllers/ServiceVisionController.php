<?php

namespace App\Http\Controllers;


use App\Models\info;
use Illuminate\Http\Request;
use App\Models\Service_vision;

class ServiceVisionController extends Controller
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
        $Service_visions=Service_vision::all();
        return view('Service-vision.index' , compact('Service_visions','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        return view('Service-vision.index',compact('infos'));
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
        $infos = info::all();
        $Service_vision = Service_vision::findOrFail($id);
        return view('Service-vision.edit', compact('Service_vision','infos'));

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
