<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }

     public function index(Request $request): View
    {
        $infos = info::all();
        return view('profile.profile',compact('infos'), [
            'user' => $request->user(),
        ]);
    }

    public function update_password(Request $request): View
    {
        $infos = info::all();
        return view('profile.update-password',compact('infos') ,[
            'user' => $request->user(),
        ]);
    }

    public function delete_user(Request $request): View
    {
        $infos = info::all();
        return view('profile.delete-user',compact('infos'), [
            'user' => $request->user(),
        ]);
    }

    public function edit(Request $request): View
    {
        $infos = info::all();
        return view('profile.edit',compact('infos'), [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $infos = info::all();
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');

            // Generate a unique filename
            $imageName = time() . '.' . $photo->getClientOriginalExtension();

            // Store the image in the public/storage directory
            $photo->storeAs('profile_pictures', $imageName, 'public');

            // Update user record with the image path
            $request->user()->update(['photo' => $imageName]);
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated',compact('infos'));
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $infos = info::all();
        $request->validateWithBag('userDeletion',compact('infos'),[
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
