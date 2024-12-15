<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Banner;
use App\Models\info;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

        $this->middleware(['auth','role:admin'])->except('affichage');

    }
    public function affichage()
    {
        $infos = info::all();
        $Service_details=ServiceDetail::all();
        $logo = Logo::all();
        $feedbacks = info::all();
        $banners = Banner::get();
        return view('pages.Services',compact('banners','logo','feedbacks','Service_details','infos'));
    }

    public function index(){
        $infos = info::all();
        return view('Service.index',compact('infos'));
    } 

    public function create(){
        $infos = info::all();
        return view('Service.form',compact('infos'));
    }


}
