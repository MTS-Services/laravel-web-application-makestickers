<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Http\Traits\FileManagementTrait;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{

    use FileManagementTrait;


    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        return view('backend.user.profile.index');
    }

    public function edit()
    {
        return view('backend.user.profile.edit');
    }



    public function update(Request $request)
    {

        $user = User::findOrFail(user()->id);
        if (isset($request->image)) {
            $this->handleFileUpload($request, $user, 'user_image');
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->phone_number = $request->phone_number;
        $user->update();
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
    }

    public function showUpdateForm()
    {
        return view('backend.user.profile.password_update');
    }

    public function updatePassword(Request $request)
    {
        $user = User::findOrFail(user()->id);
        // Validate the incoming request
        $request->validate([
            'current_password' => 'required|current_password:web',
            'password' => 'required|string|min:8|confirmed|different:current_password',
        ]);

        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update the password if the current password is correct
        $user->password = Hash::make($request->password); // hash the new password before saving

        $user->save();

        // Redirect with success message
        return redirect()->route('user.profile')->with('success', 'Password updated successfully.');
    }
}
