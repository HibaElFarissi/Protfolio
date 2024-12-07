<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignsController extends Controller
{
    //
    public function index(){
        return view('pages.Designs');
    }
}
