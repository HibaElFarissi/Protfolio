<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashAdmin_navController extends Controller
{
    //
    public function index(){
        return view('layouts.DashAdmin_nav');
    }
}
