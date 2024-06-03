<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function affichage()
    {
        // $Service_details=ServiceDetail::all();
        $Banners = Banner::paginate(1);
        return view('pages.Services',compact('Banners'));
    }

    public function index(){
        return view('Service.index');
    }
    

}
