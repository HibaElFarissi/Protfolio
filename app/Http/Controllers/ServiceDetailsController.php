<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\info;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Feedback;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use Illuminate\Support\Facades\Auth;

class ServiceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

        $this->middleware(['auth','role:admin'])->except('show');

    }
    public function index()
    {
        //
        $infos = info::all();
        $Service_details=ServiceDetail::all();
        return view('Service-details.index' , compact('Service_details','infos'));
        // return view('pages.Services-details');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $Service_details = new ServiceDetail();
        $isUpdate = false;
        return view('Service-details.form', compact('isUpdate', 'Service_details','infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title_Global'=> 'required',
            'title'=> 'required',
            'icon'=> 'required',
            'description'=> 'required',
            'slug'=> 'required',
            'image'=> 'nullable',
            'longText'=> 'required',

        ]);
        $validatedData['user_id'] = Auth::id();

        // image upload
       if ($request->hasFile('image')) {
           $photoPath = $request->file('image')->store('service-details', 'public');
           $validatedData['image'] = $photoPath;
       }

       ServiceDetail::create($validatedData);
       return to_route('Service-details.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $infos=info::all();
        $logo = Logo::all();
        $feedbacks=Feedback::all();
        $service_detail = ServiceDetail::findOrFail($id);
        $Service_details = ServiceDetail::where('id', '!=', $id)->latest()->paginate(4);
        $Banners = Banner::get();
        $tags=Tag::all();
        $Categories=Categorie::all();
        return view('Service-details.show', compact('service_detail','Service_details','feedbacks','Banners',"tags",'Categories','infos','logo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $infos = info::all();
        $Service_details= ServiceDetail::findOrFail($id);
        $isUpdate = true;
        return view('Service-details.form', compact('Service_details', 'isUpdate','infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'title_Global'=> 'required',
            'title'=> 'required',
            'icon'=> 'required',
            'description'=> 'required',
            'slug'=> 'required',
            'image'=> 'nullable',
            'longText'=> 'required',

        ]);

        // image upload
       if ($request->hasFile('image')) {
           $photoPath = $request->file('image')->store('service-details', 'public');
           $validatedData['image'] = $photoPath;
       }

       $validatedData['user_id'] = Auth::id();
       $ServiceDetail=ServiceDetail::findOrFail($id);
       $ServiceDetail->update($validatedData);
       return to_route('Service-details.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        ServiceDetail::findOrFail($id)->delete();
        return to_route('Service-details.index');
    }
}
