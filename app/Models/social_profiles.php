<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class social_profiles extends Model
{
    use HasFactory;

    public function socials(){
        return $this->belongsToMany(org_profiles::class);
    }
}
