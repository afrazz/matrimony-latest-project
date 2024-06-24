<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfile;

class UserController extends Controller
{

    public function userprofile(Request $request)
    {
        $user = Auth::user();

        $userProfileExists = UserProfile::where('user_id', $user->id)->exists();

        // Pass data to the view
        return view('profiles.userProfile', [
            'email' => $user->email,
            'name' => $user->name,
            'userProfileExists' => $userProfileExists,
        ]);
    }
    public function userprofileSave(Request $request)
    {
        $request->validate([
            'fullname' => 'nullable|string',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'height' => 'nullable|integer',
            'religion' => 'nullable|string',
            'city' => 'nullable|string',
            'mobile_number' => 'nullable|string',
            'education' => 'nullable|string',
            'occupation' => 'nullable|string',
            'annual_income' => 'nullable|integer',
            'profile_pic' => 'nullable|image|max:2048', // Example validation for image upload
            'Payment' => 'nullable|string',
        ]);

        // Retrieve the authenticated user
        $user = Auth::user();

        // Create a new user profile record
        $userProfile = new UserProfile();
        $userProfile->user_id = $user->id; // Associate with the authenticated user
        $userProfile->fullname = $request->input('fullname', session('name'));
        $userProfile->gender = $request->input('gender');
        $userProfile->date_of_birth = $request->input('dob');
        $userProfile->height = $request->input('height');
        $userProfile->religion = $request->input('religion');
        $userProfile->city = $request->input('city');
        $userProfile->mobile_number = $request->input('mobile_number');
        $userProfile->education = $request->input('education');
        $userProfile->occupation = $request->input('occupation');
        $userProfile->annual_income = $request->input('annual_income');
        $userProfile->Payment = 'not done';

        // Handle profile picture upload if provided
        if ($request->hasFile('profile_pic')) {
            $profilePicPath = $request->file('profile_pic')->store('profile_pics', 'public');
            $userProfile->profile_pic = $profilePicPath;
        }

        $userProfile->save(); // Save the user profile data

        // Redirect back or to another page after successful save
        return redirect()->route('home')->with('success', 'Profile updated successfully!');
    }

    public function showprofile()
    {
        $user = Auth::user(); 

        $userProfileExists = UserProfile::where('user_id', $user->id)->exists();
        $userProfile = UserProfile::where('user_id', $user->id)->first();

        if (!$userProfileExists) {
            return redirect()->route('home');
        }

        return view('profiles.showprofile', [
            
            'userProfileExists' => $userProfileExists,
            'userProfile' => $userProfile,
        ]);
    }
    public function edituserprofile(string $id){

        $user = Auth::user(); 

        $userProfileExists = UserProfile::where('user_id', $user->id)->exists();

        $userProfile = UserProfile::find($id);

        if (!$userProfile || $userProfile->user_id !== Auth::id()) {
            return redirect()->route('login')->with('error', 'User profile does not exist.');
        }

        return view('profiles/useredit',[
            'userProfileExists' => $userProfileExists,
            'userProfile' => $userProfile,
        ]);
    }
    public function updateUserProfile(Request $request, string $id){

        $userProfile = UserProfile::find($id);

        if (!$userProfile || $userProfile->user_id !== Auth::id()) {
            return redirect()->route('login')->with('error', 'User profile does not exist.');
        }
        $request->validate([
            'fullname' => 'nullable|string',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'height' => 'nullable|integer',
            'religion' => 'nullable|string',
            'city' => 'nullable|string',
            'mobile_number' => 'nullable|string',
            'education' => 'nullable|string',
            'occupation' => 'nullable|string',
            'annual_income' => 'nullable|integer',
            'profile_pic' => 'nullable|image|max:2048',
        ]);

        // Update the user profile with new data
        $userProfile->update($request->all());

        // Handle profile picture upload if provided
        if ($request->hasFile('profile_pic')) {
            $profilePicPath = $request->file('profile_pic')->store('profile_pics', 'public');
            $userProfile->profile_pic = $profilePicPath;
            $userProfile->save();
        }
        return redirect()->route('showprofile')->with('success', 'Profile updated successfully!');
    }

    public function checkprofile(string $id){

        $user = Auth::user(); 

        $userProfileExists = UserProfile::where('user_id', $user->id)->exists();

        $userProfile = UserProfile::findOrFail($id);
        return view('profiles.checkprofile',[
            'userProfileExists' => $userProfileExists,
            'userProfile' => $userProfile,
        ]);
    }
    public function aboutpage()
    {
        $user = Auth::user();
        $userProfileExists = UserProfile::where('user_id', $user->id)->exists();
        return view('about', [
            'userProfileExists' => $userProfileExists,
        ]);
    }

    public function contactpage()
    {
        $user = Auth::user();
        $userProfileExists = UserProfile::where('user_id', $user->id)->exists();
        return view('contact', [
            'userProfileExists' => $userProfileExists,
        ]);
    }
}
