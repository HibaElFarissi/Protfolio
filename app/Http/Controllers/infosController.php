<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class infosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $infos = info::all();
        // $info = info::paginate(4);
        return  view('infos.index', compact('infos'));
        Alert::success('succes', 'The Information has been Added successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $info = new info();
        $isUpdate = false;
        return view('infos.form', compact('info', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // before u send that request make sure and verfy all these values below
        $validatedData = $request->validate([
            'name' => 'required',
            'job' => 'required',
            'description' => 'required',
            'image1' => 'image|nullable',
            'image2' => 'image|nullable',
            'facebook' => 'required',
            'github' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'yearsExp' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
        ]);

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1')->store('storage', 'public');
            $validatedData['image1'] = $image1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2')->store('storage', 'public');
            $validatedData['image2'] = $image2;
        }


        // Insert into
        info::create($validatedData);
        Alert::success('succes', 'Information has been added successfully');
        return to_route('infos.index');
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
        // rj3 données 9dim & afficher fwahed page
        $info = info::findOrFail($id);
        $isUpdate = true;
        return view('infos.form', compact('isUpdate','info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, info $info)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'job' => 'required',
            'description' => 'required',
            'image1' => 'image|nullable',
            'image2' => 'image|nullable',
            'facebook' => 'required',
            'github' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'yearsExp' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
        ]);

          // Method 2:
          if ($request->hasFile('image1')) {
            $image1 = $request->file('image1')->store('storage', 'public');
            $validatedData['image1'] = $image1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2')->store('storage', 'public');
            $validatedData['image2'] = $image2;
        }

        $info->update($validatedData);


        Alert::success('succes', 'The informaion has been updated successfully');
        return to_route('infos.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $infos=info::findOrFail($id);
        $infos->delete();
        Alert::success('succes', 'The information has been Deleted successfully');
        return to_route('infos.index', compact('infos'));

    }
}
