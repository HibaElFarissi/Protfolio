<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Member;
use App\Models\Protfolio;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Protfolio=Protfolio::all();
        return view('Protfolios.index', compact('Protfolio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Categories= Categorie::all();
        $tags= Tag::all();
        $Members= Member::all();
        return view('Protfolios.form', compact('tags','Categories','Members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
            'description'=> 'required',
            'End_Date'=> 'required',
            'Start_Date'=> 'required',
            'Link_website'=> 'required',
            'Client'=> 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'tags.*' => 'nullable|string|max:255',
            'Categorie_id'=>'required',
            'members.*' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $imagePaths[] = $imageName;
            }

            // Add the image paths to the validated data

            $validatedData['images'] = json_encode($imagePaths);
        }

         // Store the main photo associated with the project

         if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('projects','public');
            $validatedData['photo'] = $photoPath;
        }

        $Protfolio = Protfolio::create($validatedData);

        if ($request->filled('tags')) {
            $tags = $request->input('tags');
            $Protfolio->tags()->attach($tags);
        }
        if ($request->filled('members')) {
            $members = $request->input('members');
            $Protfolio->members()->attach($members);
        }


        return redirect()->route('Protfolios.index');

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
        $Protfolio = Protfolio::findOrFail($id);
        $tags = Tag::all();
        $Categories = Categorie::all();
        $Members = Member::all();
        return view ('protfolios.form', compact('Protfolio','tags','Categories','Members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
            'description'=> 'required',
            'End_Date'=> 'required',
            'Start_Date'=> 'required',
            'Link_website'=> 'required',
            'Client'=> 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'tags.*' => 'nullable|string|max:255',
            'Categorie_id'=>'required',
            'members.*' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $imagePaths[] = $imageName;
            }

            // Add the image paths to the validated data

            $validatedData['images'] = json_encode($imagePaths);
        }

        // Store the main photo associated with the project

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('projects','public');
            $validatedData['photo'] = $photoPath;
        }

        $Protfolio=Protfolio::findOrFail($id);
        $Protfolio->update($validatedData);

        if ($request->filled('tags')) {
            $tags = $request->input('tags');
            $Protfolio->tags()->attach($tags);
        }
        if ($request->filled('members')) {
            $members = $request->input('members');
            $Protfolio->members()->attach($members);
        }


        return redirect()->route('Protfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Protfolio::findOrFail($id)->delete();
        return to_route('protfolios.index');
    }
}
