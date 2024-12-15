<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Logo;
use App\Models\Video;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\VideoCategory;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

        $this->middleware(['auth','role:admin'])->except('Affichage','filter');

    }

    public function Affichage()
    {
        //
        $infos = info::all();
        $banners = Banner::get();
        $logo = Logo::all();
        $Videos=Video::latest()->paginate(15);
        $Categories=VideoCategory::all();
        return view('pages.Videos', compact('logo','Categories','Videos','banners','infos'));
    }

    public function filter(Request $request , string $id)
    {
        $infos = info::all();
        $logo = Logo::all();
        $category = VideoCategory::findOrfail($id);
        $Videos =  $category->Video()->latest()->paginate(15);
        $Categories=VideoCategory::all();

       return view('pages.filterVideo', compact('category','Videos', 'Categories','logo','infos'));
    }


    public function index()
    {
        $infos = info::all();
        $Videos=Video::all();
        return view('Videos.index' , compact('Videos','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $infos = info::all();
        $isUpdate = false;
        $Video = new Video();
        $Categorie_Videos=VideoCategory::all();
        return view('Videos.form',compact('Categorie_Videos','isUpdate','Video','infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'nullable',
            'url_video'=> 'nullable',
            'Client'=> 'nullable',
            'code_video'=> 'nullable',
            'categorie__video_id'=>'nullable',

        ]);


        // Store the main photo associated with the Video
        $Video = Video::create($validatedData);
        return redirect()->route('Videos.index');
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
        $infos = info::all();
        // $Videos_Types=Video::all();
        $Video = Video::findOrFail($id);
        $isUpdate = true;
        $Categorie_Videos=VideoCategory::all();
        return view('Videos.form', compact('Video','Categorie_Videos','isUpdate','infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name'=> 'nullable',
            'url_video'=> 'nullable',
            'Client'=> 'nullable',
            'code_video'=> 'nullable',
            'categorie__video_id'=>'nullable',

        ]);

        $Video=Video::findOrFail($id);
        $Video->update($validatedData);



        return to_route('Videos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Video::findOrFail($id)->delete();
        return to_route('Videos.index');
    }
}
