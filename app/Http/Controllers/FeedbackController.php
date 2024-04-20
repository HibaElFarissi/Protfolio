<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $feedbacks = Feedback::paginate(3);
        return view('feedback.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $feedback = new Feedback();
        $isUpdate = false;
        return view('feedback.form', compact('feedback', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData=$request->validate([
            'name'=>'required',
            'job'=>'required',
            'feedback'=>'required',
            'image'=>'nullable|image|mimes:png,jpg,svg,jpeg',

        ]);

        if($request->hasFile('image')){
            $photoPath = $request->file('image')->store('Feedbacks','public');
        }
        $validatedData['image']=$photoPath;
        // $validatedData['user_id'] = Auth::id();

        Feedback::create($validatedData);
        Alert::success('succes', 'the Feedback has been added successfully');
        return to_route('feedback.index');
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
        $feedback=Feedback::findOrFail($id);
        $isUpdate = true;
        return view('feedback.form', compact('feedback', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData=$request->validate([
            'name'=>'required',
            'job'=>'required',
            'feedback'=>'required',
            'image'=>'nullable|image|mimes:png,jpg,jpeg,svg',

        ]);

        $feedback=Feedback::findOrFail($id);
        if($request->hasFile('image')){
            $photoPath = $request->file('image')->store('Feedbacks','public');
            $validatedData['image']=$photoPath;
        }

        $feedback->update($validatedData);
        Alert::success('Successfully Updated!', "The feedback {$feedback->name} has been updated");
        return to_route('feedback.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $feedback=Feedback::findOrFail($id);
        $feedback->delete();
        Alert::success('Successfully Deleted!', "The feedback {$feedback->name} has been Deleted");
        return to_route('feedback.index');
    }
}