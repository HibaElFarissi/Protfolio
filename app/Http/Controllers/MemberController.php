<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\Logo;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
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
        $Members=Member::all();
        return view('Members.index' , compact('Members','infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infos = info::all();
        $Member= new Member(); // Arréter 3amaliya old ($member)
        $isUpdate = false;
        return view('Members.form', compact('isUpdate', 'Member','infos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([

            'name' =>'required| max:255',
            'work' =>'required|max:255',
            'photo' =>'nullable|image|max:2048',
            'Linkedin' =>'required',
            'Github' =>'required',
        ]);

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Members','public');
            $validatedData['photo']=$photoPath;
        }

        Member::create($validatedData);
        return redirect()->route('Members.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $logo = Logo::all();
        $infos = info::all();
        $Member = Member::findOrFail($id);
        return view('Members.show', compact('Member','infos','logo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $infos = info::all();
        $Member = Member::findOrFail($id);
        $isUpdate = true;
        return view('Members.form', compact('Member', 'isUpdate','infos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData=$request->validate([
            'name' =>'required|max:255',
            'work' =>'required|max:255',
            'photo' =>'nullable|image|max:2048',
            'Linkedin' =>'required',
            'Github' =>'required',
        ]);

        $Member=Member::findOrFail($id);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Members','public');
            $validatedData['photo']=$photoPath;
        }

        $Member->update($validatedData);
        return to_route('Members.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Member::findOrFail($id)->delete();
        return to_route('Members.index');
    }
}
