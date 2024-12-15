<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Design;
use Illuminate\Http\Request;
use App\Models\DesignCategory;

class DesignsController extends Controller
{


    public function __construct()
    {

        $this->middleware(['auth','role:admin'])->except('Affichage','filter');

    }

    public function Affichage(){
        $infos = info::all();
        $banners = Banner::get();
        $Designs=Design::latest()->paginate(15);
        $Categories=DesignCategory::all();
        $logo = Logo::all();
        return view('pages.Designs',compact('logo','Designs','Categories','banners','infos'));
    }

    public function filter(Request $request , string $id)
    {
        $infos = info::all();
        $logo = Logo::all();
        $category = DesignCategory::findOrfail($id);
        $Designs =  $category->Design()->latest()->paginate(15);
        $Categories=DesignCategory::all();

       return view('pages.filterDesign', compact('category', 'Categories','Designs','logo','infos'));
    }

    public function index()
    {
        // $Designs_Types=Design::all();
        $infos = info::all();
        $Designs=Design::all();
        return view('Designs.index' , compact('Designs','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $infos = info::all();
        $Design =  new Design();
        $isUpdate = false;
        $Categorie_Designs=DesignCategory::all();
        return view('Designs.form',compact('Categorie_Designs','isUpdate','Design','infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable',
            'Client'=> 'nullable',
            'categorie__design_id'=>'required',

        ]);



        // Store the main photo associated with the Design

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Designs','public');
            $validatedData['photo'] = $photoPath;
        }


        $Design = Design::create($validatedData);




        return redirect()->route('Designs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $Designs_Types=Design::all();
        $infos = info::all();
        $Design = Design::findOrFail($id);
        $isUpdate = true;
        $Categorie_Designs=DesignCategory::all();
        return view('Designs.form', compact('Design','Categorie_Designs','isUpdate','infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable',
            'Client'=> 'nullable',
            'categorie__design_id'=>'required',

        ]);



        // Store the main photo associated with the Design

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Designs','public');
            $validatedData['photo'] = $photoPath;
        }



        $Design=Design::findOrFail($id);
        $Design->update($validatedData);



        return to_route('Designs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Design::findOrFail($id)->delete();
        return to_route('Designs.index');
    }
}
