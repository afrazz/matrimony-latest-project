<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'user_profiles';
    
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'fullname',
        'gender',
        'date_of_birth',
        'height',
        'religion',
        'city',
        'mobile_number',
        'education',
        'occupation',
        'annual_income',
        'profile_pic',
        'payment',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function viewableProfiles()
    {
        return $this->belongsToMany(UserProfile::class, 'assign_users', 'user_id', 'viewable_user_id');
    }
    public function assignUser()
    {
        return $this->belongsTo(AssignUser::class, 'user_id', 'user_id');
    }
    
}
