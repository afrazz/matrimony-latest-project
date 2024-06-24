<?php

namespace App\Http\Controllers;

use App\Models\UserProfile; // Import your UserProfile model
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\AssignUser;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user(); // Retrieve authenticated user

        $userProfileExists = UserProfile::where('user_id', $user->id)->exists();
        $assignUsers = AssignUser::with('userProfile')->get();
        $assignedUserIds = $assignUsers->pluck('user_id');
        // dd($assignUsers);
        $otherUsersData = UserProfile::whereNotIn('user_id', $assignedUserIds)->where('Payment', 'done')->get();

        if ($otherUsersData->isEmpty()) {

            $message = "No other user profiles found.";

            return view('empty', compact('userProfileExists', 'message'));
        }

        foreach ($otherUsersData as $profile) {
            $otherFullnames[] = $profile->fullname;
        }


        return view('home', [
            'userProfileExists' => $userProfileExists,
            'otherUsersData' => $otherUsersData,
        ]);
    }
    

    public function adminHome()
    {
        return view('dashboard');
    }
}
