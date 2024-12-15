<?php

namespace App\Http\Controllers;


use App\Models\info;
use App\Models\Categorie;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriesController extends Controller
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
        $Categories=Categorie::all();
        return view('Categories.index',compact('Categories','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        return view('Categories.index',compact('infos'));
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

        Categorie::create($validatedData);
        Alert::success('succes', 'The Categorie has been Added successfully');
        return to_route('Categories.index');
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
        $Categorie = Categorie::findOrFail($id);
        return view('Categories.form', compact('Categorie','infos'));
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

        $Categorie=Categorie::findOrFail($id);
        $Categorie->update($validatedData);
        Alert::success('succes', 'The Categorie has been Updated successfully');
        return to_route('Categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Categorie::findOrFail($id)->delete();
        return to_route('Categories.index');
    }
}
