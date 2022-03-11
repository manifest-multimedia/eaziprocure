<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgProfiles extends Model
{
    use HasFactory;

    public function organizations() {
        return $this->belongsToMany(User::class, 'user_organizations'); 
    }

    public function socials()
    {
        return $this->hasMany(SocialProfiles::class); 
    }

}
