<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;
use App\Models\DesignCategory;

class DesignCategoryController extends Controller
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
        $designCategory = DesignCategory::all();
        return view('DesignCategory.index',compact('designCategory','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $designCategory = new DesignCategory();
        return view('DesignCategory.form', compact('designCategory','infos'));
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

        DesignCategory::create($validatedData);
        return to_route('DesignCategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DesignCategory $designCategory)
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
        $designCategory = DesignCategory::findOrFail($id);
        return view('DesignCategory.form', compact('designCategory','infos'));

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

        $designCategory=DesignCategory::findOrFail($id);
        $designCategory->update($validatedData);
        return to_route('DesignCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DesignCategory::findOrFail($id)->delete();
        return to_route('DesignCategory.index');
    }
}
