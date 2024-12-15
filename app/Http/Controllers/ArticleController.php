<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Article;
// use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use App\Models\info;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
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
        $Articles=Article::all();
        return view('Articles.index' , compact('Articles','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $Article = new Article();
        $Categories=ArticleCategory::all();
        // $Tags=Tag::all();
        $isUpdate = false;
        return view('Articles.form',compact('Categories','isUpdate','Article','infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'Title_Global'=> 'nullable',
            'text1'=> 'nullable',
            'text2'=> 'nullable',
            'image1'=> 'nullable',
            'image2'=> 'nullable',
            'image3'=> 'nullable',
            'ArticleCategorie_id'=>'nullable',
            'user_id' => 'nullable',
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
        $infos = info::all();
        $article = Article::find($id);
        $logo = Logo::all();
        $Categories = ArticleCategory::all();
        // $Post = Article::latest()->where('id','!=', Article::latest()->first()->id) ->paginate(4);
        $Post = Article::where('id', '!=', $id)->latest()->paginate(4);
        $articles = Article:: where('id', '!=', $id)->latest()->paginate(2);
        $Categories = ArticleCategory::withCount('article')->get();
        return view('Articles.show', compact('article','Categories','articles','Post','logo','infos'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $infos = info::all();
        $Article = Article::findOrFail($id);
        $Categories = ArticleCategory::all();
        $isUpdate = true;
        // $Tags = Tag::all();
        return view('Articles.form', compact('Article','Categories','isUpdate','infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'Title_Global'=> 'nullable',
            'text1'=> 'nullable',
            'text2'=> 'nullable',
            'image1'=> 'nullable',
            'image2'=> 'nullable',
            'image3'=> 'nullable',
            'ArticleCategorie_id'=>'nullable',
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
