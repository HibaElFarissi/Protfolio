<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Logo;
use App\Models\Article;
use App\Models\Feedback;
use App\Models\Education;
use App\Models\Protfolio;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use App\Models\Skills;

class HomeController extends Controller
{
    //
    public function index(){

        $logo = Logo::all();
        $Articles = Article::latest()->paginate(2);
        $feedbacks = Feedback::get();
        $service_details=ServiceDetail::latest()->paginate(6);
        $infos=info::all();
        $Educations=Education::all();
        $Experiences=Experience::all();
        $totalProject= Protfolio::count();
        $Projects=Protfolio::latest()->paginate(6);

        // Skills :
        $SkillsTypeId = 1;
        $Skills = Skills::where('skillsType_id', $SkillsTypeId)->get();
        $Skills_Type = Skills::where('skillsType_id', $SkillsTypeId)->limit(1)->get();

        $SkillsTypeId2 = 2;
        $SkillsF = Skills::where('skillsType_id', $SkillsTypeId2)->get();
        $Skills_TypeF = Skills::where('skillsType_id', $SkillsTypeId2)->limit(1)->get();

        $SkillsTypeId3 = 3;
        $SkillsO = Skills::where('skillsType_id', $SkillsTypeId3)->get();
        $Skills_TypeO = Skills::where('skillsType_id', $SkillsTypeId3)->limit(1)->get();

        return view('layouts.Home', compact('logo','infos','Educations','Experiences','totalProject','Projects','Articles','service_details',
        'feedbacks','SkillsTypeId','Skills','Skills_Type','SkillsTypeId2','SkillsF','Skills_TypeF','SkillsTypeId3',
        'SkillsO','Skills_TypeO'));
    }
}
