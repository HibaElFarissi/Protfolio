<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $banners = Banner::get();
        return  view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $banners = new Banner();
        $isUpdate = false;
        return view('banners.form', compact('banners', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'bannerContact' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerAbout' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerClient' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerTestimonials' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerService' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerServiceDetail' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerProject' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerBlog' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerBlogDetail' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
        ]);

        // BannerContact
        if ($request->hasFile('bannerContact')) {
            $bannerContact = $request->file('bannerContact')->store('Banners_photo', 'public');
            $validatedData['bannerContact'] = $bannerContact;
        }

        // BannerAbout
        if ($request->hasFile('bannerAbout')) {
            $bannerAbout = $request->file('bannerAbout')->store('Banners_photo', 'public');
            $validatedData['bannerAbout'] = $bannerAbout;
        }
        // BannerClient
        if ($request->hasFile('bannerClient')) {
            $bannerClient = $request->file('bannerClient')->store('Banners_photo', 'public');
            $validatedData['bannerClient'] = $bannerClient;
        }

        // BannerTestimonials
        if ($request->hasFile('bannerTestimonials')) {
            $bannerTestimonials = $request->file('bannerTestimonials')->store('Banners_photo', 'public');
            $validatedData['bannerTestimonials'] = $bannerTestimonials;
        }

        // BannerService
        if ($request->hasFile('bannerService')) {
            $bannerService = $request->file('bannerService')->store('Banners_photo', 'public');
            $validatedData['bannerService'] = $bannerService;
        }

        // BannerServiceDetail
        if ($request->hasFile('bannerServiceDetail')) {
            $bannerServiceDetail = $request->file('bannerServiceDetail')->store('Banners_photo', 'public');
            $validatedData['bannerServiceDetail'] = $bannerServiceDetail;
        }

        // BannerProject
        if ($request->hasFile('bannerProject')) {
            $bannerProject = $request->file('bannerProject')->store('Banners_photo', 'public');
            $validatedData['bannerProject'] = $bannerProject;
        }

        // BannerBlog
        if ($request->hasFile('bannerBlog')) {
            $bannerBlog = $request->file('bannerBlog')->store('Banners_photo', 'public');
            $validatedData['bannerBlog'] = $bannerBlog;
        }

        // BannerBlogDetail
        if ($request->hasFile('bannerBlogDetail')) {
            $bannerBlogDetail = $request->file('bannerBlogDetail')->store('Banners_photo', 'public');
            $validatedData['bannerBlogDetail'] = $bannerBlogDetail;
        }

        Banner::create($validatedData);

        Alert::success('succes', 'Banner has been added successfully');
        return to_route('banners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $banners = Banner::findOrFail($id);
        $isUpdate = true;
        return view('banners.form', compact('isUpdate','banners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banners)
    {
        //
        $validatedData = $request->validate([
            'bannerContact' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerAbout' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerClient' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerTestimonials' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerService' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerServiceDetail' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerProject' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerBlog' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
            'bannerBlogDetail' => 'image|mimes:jpeg,png,jpg,gif,svg|nullable',
        ]);


         // BannerContact
         if ($request->hasFile('bannerContact')) {
            $bannerContact = $request->file('bannerContact')->store('Banners_photo', 'public');
            $validatedData['bannerContact'] = $bannerContact;
        }

        // BannerAbout
        if ($request->hasFile('bannerAbout')) {
            $bannerAbout = $request->file('bannerAbout')->store('Banners_photo', 'public');
            $validatedData['bannerAbout'] = $bannerAbout;
        }
        // BannerClient
        if ($request->hasFile('bannerClient')) {
            $bannerClient = $request->file('bannerClient')->store('Banners_photo', 'public');
            $validatedData['bannerClient'] = $bannerClient;
        }

          // BannerTestimonials
          if ($request->hasFile('bannerTestimonials')) {
            $bannerTestimonials = $request->file('bannerTestimonials')->store('Banners_photo', 'public');
            $validatedData['bannerTestimonials'] = $bannerTestimonials;
        }

        // BannerService
        if ($request->hasFile('bannerService')) {
            $bannerService = $request->file('bannerService')->store('Banners_photo', 'public');
            $validatedData['bannerService'] = $bannerService;
        }

        // BannerServiceDetail
        if ($request->hasFile('bannerServiceDetail')) {
            $bannerServiceDetail = $request->file('bannerServiceDetail')->store('Banners_photo', 'public');
            $validatedData['bannerServiceDetail'] = $bannerServiceDetail;
        }

        // BannerProject
        if ($request->hasFile('bannerProject')) {
            $bannerProject = $request->file('bannerProject')->store('Banners_photo', 'public');
            $validatedData['bannerProject'] = $bannerProject;
        }

        // BannerBlog
        if ($request->hasFile('bannerBlog')) {
            $bannerBlog = $request->file('bannerBlog')->store('Banners_photo', 'public');
            $validatedData['bannerBlog'] = $bannerBlog;
        }

        // BannerBlogDetail
        if ($request->hasFile('bannerBlogDetail')) {
            $bannerBlogDetail = $request->file('bannerBlogDetail')->store('Banners_photo', 'public');
            $validatedData['bannerBlogDetail'] = $bannerBlogDetail;
        }

        $banners->update($validatedData);

        Alert::success('succes', 'Banner has been updated successfully');
        return to_route('banners.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $banners=Banner::findOrFail($id);
        $banners->delete();
        Alert::success('succes', 'The Banner has been Deleted successfully');
        return to_route('banners.index', compact('banners'));
    }
}
