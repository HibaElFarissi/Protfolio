<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Video;
use App\Models\Visit;
use App\Models\Design;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Protfolio;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }

    public function AdminDashboard(){
        $infos = info::all();
        $visits = Visit::latest()->paginate(15);
        $totalVisits = Visit::count();
        $totalProject= Protfolio::count();
        $totalArticle= Article::count();
        $totalDesigns =Design::count();
        $totalVideos =Video::count();
        $totalEmails = Contact::count();
        return view('admin.admin_dashboard',compact('visits','totalVisits','totalProject','totalArticle','totalDesigns','totalVideos','totalEmails','infos'));
    }

    public function getVisitChartData()
    {
        $visits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                        ->groupBy('date')
                        ->orderBy('date')
                        ->get();

        $chartData = [];
        foreach ($visits as $visit) {
            $chartData[$visit->date] = $visit->count;
        }
        return response()->json($chartData);
    }
}
