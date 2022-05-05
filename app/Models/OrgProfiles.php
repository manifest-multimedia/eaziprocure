<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgProfiles extends Model
{
    use HasFactory;

    protected $fillable=[
        'org_logo',
        'org_name',
        'org_email', 
        'org_address', 
        'org_city', 
        'org_country',
    ];

    public function organizations() {
        return $this->belongsToMany(User::class, 'user_organizations'); 
    }

    public function socials()
    {
        return $this->hasMany(SocialProfiles::class); 
    }

}
