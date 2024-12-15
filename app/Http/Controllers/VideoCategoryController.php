<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;
use App\Models\VideoCategory;

class VideoCategoryController extends Controller
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
        $videoCategory = VideoCategory::all();
        return view('VideoCategory.index',compact('videoCategory','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $videoCategory = new VideoCategory();
        return view('VideoCategory.form', compact('videoCategory','infos'));
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

        VideoCategory::create($validatedData);
        return to_route('VideoCategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(VideoCategory $videoCategory)
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
        $videoCategory = VideoCategory::findOrFail($id);
        return view('VideoCategory.form', compact('videoCategory','infos'));
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

        $videoCategory=VideoCategory::findOrFail($id);
        $videoCategory->update($validatedData);
        return to_route('VideoCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        VideoCategory::findOrFail($id)->delete();
        return to_route('VideoCategory.index');
    }
}
