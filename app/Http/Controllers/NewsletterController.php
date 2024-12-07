<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Newsletters = Newsletter::get();
        return view('Newsletters.index', compact('Newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    //     $Newsletter = new Newsletter();
    //     return view('layouts.Home',compact('Newsletter'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Newsletter::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */

    public function destroy(string $id)
    {
        //
        $Newsletter=Newsletter::findOrFail($id);
        $Newsletter->delete();
        Alert::error('Successfully Deleted!', "The Email has been Deleted");
        return redirect()->back();
    }
}
