<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Project;
use App\Models\Categorie;
use App\Models\Protfolio;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        //
        $infos = info::all();
        $banners = Banner::get();
        $logo = Logo::all();
        $projects = Protfolio::all();
        $Categories = Categorie::all();

        return view('pages.Projects',compact('Categories','projects','logo','banners','infos'));
    }

    public function filter(Request $request , string $id)
    {
        $infos = info::all();
        $category = Categorie::findOrfail($id);
        $Categories = Categorie::all();
        $projects =  $category->Protfolio()->get();
        $logo = Logo::all();

       return view('pages.filter', compact('category', 'Categories','projects','logo','infos'));
    }
}
