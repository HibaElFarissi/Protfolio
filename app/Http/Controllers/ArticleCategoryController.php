<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Logo;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

        $this->middleware(['auth','role:admin'])->except('show');

    }

    public function index()
    {
        //
        $infos = info::all();
        $articleCategory = ArticleCategory::all();
        return view('ArticleCategory.index' ,compact('articleCategory','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $articleCategory = new ArticleCategory();
        return view('ArticleCategory.form', compact('articleCategory','infos'));
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

        ArticleCategory::create($validatedData);
        return to_route('ArticleCategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $infos = info::all();
        $logo = Logo::all();
        $banners = Banner::all();
        $category = ArticleCategory::find($id);
        $Articles =  $category->Article()->get();
        return view('ArticleCategory.show', compact('category', 'infos','Articles','banners','logo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $infos = info::all();
        $articleCategory = ArticleCategory::findOrFail($id);
        return view('ArticleCategory.form', compact('articleCategory','infos'));
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

        $articleCategory=ArticleCategory::findOrFail($id);
        $articleCategory->update($validatedData);
        return to_route('ArticleCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        ArticleCategory::findOrFail($id)->delete();
        return to_route('ArticleCategory.index');
    }
}
