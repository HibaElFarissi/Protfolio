<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Logo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LogoController extends Controller
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
        $infos = info::all();
        $logos = Logo::all();
        return view('logo.index', compact('logos','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $logo = new Logo();
        $isUpdate = false;
        return view('logo.form', compact('logo', 'isUpdate','infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $fromFields = $request->validate(
            ['image' => 'nullable'],
        );
        if ($request->hasFile('image')) {
        $fromFields['image'] = $request->file('image')->store('product' , 'public');
        $fromFields['image']=$this->uploadImage($request);
    }
    //
    // $request->validate([
    //     'name' => 'required|max:255',
    //   ]);

      Logo::create($fromFields);
      Alert::success('succes', 'Logo has been added successfully');
      return to_route('logo.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $infos = info::all();
        $logo = Logo::findOrFail($id);
        $isUpdate = true;
        return view('logo.form', compact('logo', 'isUpdate','infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        //

        $logo->fill($request->validate(
            ['image' => 'nullable'],
        ));
        $fromFields['image']=$this->uploadImage($request);
        $logo->fill($fromFields)->save();

        Alert::success('succes', "The Logo has been updated successfully");
        return to_route('logo.index', compact('logo'));
    }


    private function uploadImage(Request $request){
        if($request->hasFile('image')){
           return $request->file('image')->store('logo' , 'public');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        //
        $logo->delete();
        Alert::success('Successfully Deleted!', "The Logo  has been Deleted");
        return to_route('logo.index');
    }
}
