<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\UserProfile;

class AdminController extends Controller
{
    public function profilepage()
    {
        return view('profile');
    }
    public function showAssignViewPermissionsForm($userId)
    {
        $userProfile = UserProfile::where('user_id', $userId)->first();
        $allUsers = UserProfile::where('user_id', '!=', $userId)->get();
        // dd($allUsers);

        if (!$userProfile) {
            return redirect()->back()->with('error', 'User profile not found');
        }

        return view('adminpages.assign-view-permissions', compact('userProfile', 'allUsers'));
    }
    public function assignViewPermissions(Request $request, $userId)
    {
        // Retrieve the user profile based on the user ID
        $userProfile = UserProfile::where('user_id', $userId)->firstOrFail();

        // Get the viewable user IDs from the request
        $viewableUserIds = $request->input('viewable_user_ids', []);

        // Retrieve the existing viewable user IDs from the pivot table
        $existingViewableUserIds = DB::table('assign_users')
            ->where('user_id', $userProfile->user_id)
            ->pluck('viewable_user_id')
            ->toArray();

        // Debugging: Log existing and new IDs
        Log::info('Existing Viewable User IDs: ', $existingViewableUserIds);
        Log::info('Submitted Viewable User IDs: ', $viewableUserIds);

        // Filter out IDs that are already present
        $newViewableUserIds = array_diff($viewableUserIds, $existingViewableUserIds);

        // Debugging: Log the IDs to be added
        Log::info('New Viewable User IDs to be added: ', $newViewableUserIds);

        // Prepare the data for insertion
        $dataToInsert = [];
        foreach ($newViewableUserIds as $viewableUserId) {
            // Ensure viewable_user_id exists in users table
            if (User::find($viewableUserId)) {
                $dataToInsert[] = [
                    'user_id' => $userProfile->user_id,
                    'viewable_user_id' => $viewableUserId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Insert only the new IDs
        if (!empty($dataToInsert)) {
            DB::table('assign_users')->insert($dataToInsert);
        }

        return redirect()->back()->with('success', 'View permissions assigned successfully.');
    }
}
