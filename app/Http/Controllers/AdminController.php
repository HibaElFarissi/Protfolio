<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;

class AdminController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }

    public function AdminDashboard(){
        $visits = Visit::latest()->paginate(5);
        $totalVisits = Visit::count();
        // $totalProject= project::count();
        // $totalArticle= Article::count();
        return view('admin.admin_dashboard',compact('visits','totalVisits'));
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
