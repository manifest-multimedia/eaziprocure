<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use RealRashid\SweetAlert\Facades\Alert;


class InvitationController extends Controller
{

    function getInvidationDetails($user, $org, $role){
        
        // Get Invitation Details 

        // $invitedby=User::where('id', $user)->first(); 

        if($invitedby=User::find($user)){

            $invitedby=$invitedby->name;
            
            Alert::alert('Title', 'Message', 'Type');

            return redirect('/404')->with('success', 'yay!');
            
        } else{
            return redirect('/404')->with('toast_error', 'Error! Invalid Invitation');
        } 
        
        // dd($invitation);
 


    }


    //Validate Invidation 

    //Register User as Part of Organization  

    //Activate User
}
