<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Categorie;
use App\Models\Feedback;
use App\Models\info;
use App\Models\ServiceDetail;
use App\Models\Tag;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Service_details=ServiceDetail::all();
        return view('service-details.index' , compact('Service_details'));
        // return view('pages.Services-details');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('service-details.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title_Global'=> 'required',
            'title'=> 'required',
            'icon'=> 'required',
            'description'=> 'required',
            'slug'=> 'required',
            'image'=> 'nullable|image|mimes:png,jpg|max:2048',
            'longText'=> 'required',

        ]);

        // image upload
       if ($request->hasFile('image')) {
           $photoPath = $request->file('image')->store('service-details', 'public');
           $validatedData['image'] = $photoPath;
       }

       ServiceDetail::create($validatedData);
       return to_route('service-details.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $infos=info::all();
        $feedbacks=Feedback::all();
        $Service_detail = ServiceDetail::findOrFail($id);
        $Service_details=ServiceDetail::get();
        $Banners = Banner::get()->paginate(1);
        $tags=Tag::all();
        $Categories=Categorie::all();
        return view('service-details.show', compact('Service_detail','Service_details','feedbacks','Banners',"tags",'Categories','infos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $Service_details= ServiceDetail::findOrFail($id);
        return view('service-details.form', compact('Service_details'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'title_Global'=> 'required',
            'title'=> 'required',
            'icon'=> 'required',
            'description'=> 'required',
            'slug'=> 'required',
            'image'=> 'nullable|image|mimes:png,jpg|max:2048',
            'longText'=> 'required',

        ]);

        // image upload
       if ($request->hasFile('image')) {
           $photoPath = $request->file('image')->store('service-details', 'public');
           $validatedData['image'] = $photoPath;
       }

       $ServiceDetail=ServiceDetail::findOrFail($id);
       $ServiceDetail->update($validatedData);
       return to_route('service-details.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        ServiceDetail::findOrFail($id)->delete();
        return to_route('service-details.index');
    }
}
