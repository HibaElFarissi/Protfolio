<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Logo;
use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'role:admin'])->only(['index', 'destroy']);
        $this->middleware(['auth','role:admin'])->except('create','store');
    }

    public function index()
    {
        //
        $infos = info::all();
        $contacts = Contact::get();
        return view('Email.inbox', compact('contacts','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $contact = new Contact();
        return view('pages.home',compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Contact::create($request->all());
        return redirect()->back();
    }


    public function destroy(string $id)
    {
        //
        $contact=Contact::findOrFail($id);
        $contact->delete();
        Alert::error('Successfully Deleted!', "The Email has been Deleted");
        return redirect()->back();
    }
}
