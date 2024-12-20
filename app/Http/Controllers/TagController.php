<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\info;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
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
        $Tags=Tag::all();
        return view('Tags.index' , compact('Tags','infos'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        return view('Tags.index','infos');

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

        Tag::create($validatedData);
        Alert::success('succes', 'The Tag has been Added successfully');
        return to_route('Tags.index');

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
        $Tag = Tag::findOrFail($id);
        return view('Tags.form', compact('Tag','infos'));
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

        $Tag=Tag::findOrFail($id);
        $Tag->update($validatedData);

        Alert::success('succes', 'The Tag has been Updated successfully');
        return to_route('Tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Tag::findOrFail($id)->delete();
        return to_route('Tags.index');
        // Alert::error('error', 'The Tag has been Deleted successfully');
    }
}
