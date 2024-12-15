<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;

class DashAdmin_navController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }
    
    public function index(){
        $infos = info::all();
        return view('layouts.DashAdmin_nav',compact('infos'));
    }
}
