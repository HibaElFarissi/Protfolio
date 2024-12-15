<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\info;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Member;
use App\Models\Categorie;
use App\Models\Protfolio;
use Illuminate\Http\Request;

class ProtfolioController extends Controller
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
        $banners = Banner::get();
        $Protfolio=Protfolio::all();
        return view('Protfolios.index', compact('Protfolio','banners','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $Protfolios = new Protfolio();
        $isUpdate = false;
        $Categories= Categorie::all();
        $tags= Tag::all();
        $Members= Member::all();
        return view('Protfolios.form', compact('tags','Categories','Members','Protfolios','isUpdate','infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'required',
            'description'=> 'required',
            'End_Date'=> 'required',
            'Start_Date'=> 'required',
            'Link_website'=> 'required',
            'Client'=> 'required',
            'images.*' => 'required',
            'tags.*' => 'required|string|max:255',
            'Categorie_id'=>'required',
            'members.*' => 'required|string|max:255',
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
        $infos = info::all();
        $projects=Protfolio::paginate(3);
        $logo = Logo::all();
        $banners = Banner::get();
        $project = Protfolio::findOrFail($id);
        $project->load('members');
        $project->load('tags');
        return view('Protfolios.show', compact('project','projects','logo','banners','infos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $infos = info::all();
        $isUpdate = true;
        $Protfolios = Protfolio::findOrFail($id);
        $tags = Tag::all();
        $Categories = Categorie::all();
        $Members = Member::all();
        return view ('Protfolios.form', compact('Protfolios','tags','Categories','Members','isUpdate','infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'required',
            'description'=> 'required',
            'End_Date'=> 'required',
            'Start_Date'=> 'required',
            'Link_website'=> 'required',
            'Client'=> 'required',
            'images.*' => 'required',
            'tags.*' => 'required|string|max:255',
            'Categorie_id'=>'required',
            'members.*' => 'required|string|max:255',
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
        return to_route('Protfolios.index');
    }
}
