<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrgProfilesController extends Controller
{
    public function overview(Request $request){
            
            $id=$request->id; 

            return $id; 
    }
}
