<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignUser extends Model
{
    use HasFactory;
    protected $table = 'assign_users'; // Replace with your actual table name

    // Define the inverse relationship with UserProfile
    public function userProfile()
    {
        return $this->hasOne(UserProfile::class, 'user_id', 'user_id');
    }
}
