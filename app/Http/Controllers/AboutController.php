<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use App\Models\Service_vision;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::get();
        $service_details = ServiceDetail::latest()->paginate(3);
        $feedbacks = Feedback::get();
        $Service_visions = Service_vision::all();
        $infos = info::all();
        $logo = Logo::all();
        return view('pages.About',compact('logo','infos','Service_visions','service_details','feedbacks','banners'));
    }

}
