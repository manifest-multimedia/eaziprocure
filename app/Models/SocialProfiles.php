<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialProfiles extends Model
{
    use HasFactory;

    public function socials(){
        return $this->belongsToMany(OrgProfiles::class);
    }
}
