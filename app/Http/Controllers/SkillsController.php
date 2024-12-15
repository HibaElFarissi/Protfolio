<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Skills;
use App\Models\Skills_type;
use Illuminate\Http\Request;

class SkillsController extends Controller
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
        $Skills=Skills::all();
        return view('Skills.index' , compact('Skills','Skills_Types','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $Skills_Types=Skills_type::all();
        return view('Skills.index',compact('Skills_Types','infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name'=> 'required',
            'image'=> 'nullable|image|mimes:png,jpg,svg,jpeg',
            'skillsType_id'=> 'required',
        ]);

        if($request->hasFile('image')){
            $photoPath = $request->file('image')->store('Skills','public');
            $validatedData['image']=$photoPath;
        }

        Skills::create($validatedData);
        return redirect()->route('Skills.index');
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
        $Skills_Types=Skills_type::all();
        $Skill = Skills::findOrFail($id);
        return view('Skills.edit', compact('Skill','Skills_Types','infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skills $Skill)
    {
        //
        $validatedData = $request->validate([
            'name'=> 'required',
            'image'=> 'nullable|image|mimes:png,jpg,svg,jpeg',
            'skillsType_id'=> 'required',
        ]);

        if($request->hasFile('image')){
            $photoPath = $request->file('image')->store('Skills','public');
            $validatedData['image']=$photoPath;
        }

        $Skill->update($validatedData);
        return to_route('Skills.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Skills::findOrFail($id)->delete();
        return to_route('Skills.index');
    }
}
