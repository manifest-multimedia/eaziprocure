<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 


class InvitationController extends Controller
{

    function getInvidationDetails($user, $org){
        
        // Get Invitation Details 

        // $invitedby=User::where('id', $user)->first(); 
        if($invitedby=User::find($user)){

            $invitedby=$invitedby->name;
            
            return 'Holla Amigos Diaz ' .$invitedby;
        } else{
            return 'Error! Invalid Invitation';
        } 
        
        // dd($invitation);
 


    }


    //Validate Invidation 

    //Register User as Part of Organization  

    //Activate User
}
