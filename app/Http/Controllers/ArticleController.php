<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Articles=Article::all();
        return view('Articles.index' , compact('Articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Categories=Categorie::all();
        $Tags=Tag::all();
        return view('Articles.create',compact('Categories','Tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'Title_Global'=> 'required',
            'slug'=> 'required',
            'text1'=> 'required',
            'text2'=> 'required',
            'quote' => 'nullable|min:50',
            'text3'=> 'required',
            'image1'=> 'nullable|image|mimes:png,jpg|max:2048',
            'image2'=> 'nullable|image|mimes:png,jpg|max:2048',
            'image3'=> 'nullable|image|mimes:png,jpg|max:2048',
            'Categorie_id'=>'required',
        ]);

        $validatedData['user_id'] = Auth::id();

        // images  upload
       if ($request->hasFile('image1')) {
           $photoPath1 = $request->file('image1')->store('Articles', 'public');
           $validatedData['image1'] = $photoPath1;
       }

       if ($request->hasFile('image2')) {
           $photoPath2 = $request->file('image2')->store('Articles', 'public');
           $validatedData['image2'] = $photoPath2;
       }

       if ($request->hasFile('image3')) {
           $photoPath3 = $request->file('image3')->store('Articles', 'public');
           $validatedData['image3'] = $photoPath3;
       }

       Article::create($validatedData);
       return to_route('Articles.index');
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
        $Article = Article::findOrFail($id);
        $Categories = Categorie::all();
        $Tags = Tag::all();
        return view('Articles.edit', compact('Article','Categories','Tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'Title_Global'=> 'required',
            'slug'=> 'required',
            'text1'=> 'required',
            'text2'=> 'required',
            'quote' => 'nullable|min:50',
            'text3'=> 'required',
            'image1'=> 'nullable|image|mimes:png,jpg|max:2048',
            'image2'=> 'nullable|image|mimes:png,jpg|max:2048',
            'image3'=> 'nullable|image|mimes:png,jpg|max:2048',
            'Categorie_id'=>'required',
        ]);

        $validatedData['user_id'] = Auth::id();

        // Handle photo1 upload
       if ($request->hasFile('image1')) {
           $photoPath1 = $request->file('image1')->store('Articles', 'public');
           $validatedData['image1'] = $photoPath1;
       }
       if ($request->hasFile('image2')) {
           $photoPath2 = $request->file('image2')->store('Articles', 'public');
           $validatedData['image2'] = $photoPath2;
       }
       if ($request->hasFile('image3')) {
           $photoPath3 = $request->file('image3')->store('Articles', 'public');
           $validatedData['image3'] = $photoPath3;
       }

       $Article=Article::findOrFail($id);
       $Article->update($validatedData);
       return to_route('Articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Article::findOrFail($id)->delete();
        return to_route('Articles.index');

    }
}
