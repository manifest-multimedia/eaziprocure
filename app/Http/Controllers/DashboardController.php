<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth; 


class DashboardController extends Controller

{
    public function __invoke()
    
    {
        if(Gate::any(['isSuperAdmin', 'isAdmin', 'isUser', 'isStaff']))
        
            {   $role=Auth::user()->user_role;
            
                switch($role) {

                    case "superadmin": 
                        return view('dashboards.user'); 
                    break;
                    
                    case "admin":
                        return view('dashboards.admin'); 
                    break;

                    case "user": 
                        return view ('dashboards.user'); 
                    break; 

                    case "staff":     
                        return view('dashboards.staff'); 
                    break; 

                    default: 

                    abort(403, 'You are not authorized to access this resource.');

                }   
            }

            else {
                abort(403, 'Unauthorized Action');
            }



    }

    public function adminArea(){
        if(Gate::any(['isSuperAdmin'])){

            return view('superadmin.dashboard');

        }
        
        else {
            abort(403, 'Unauthorized Request');
        }
        
        
    }

    public function accountUpgrade(){

        $email=Auth::user()->email; 
        
        return view('settings.upgrade', compact('email'));

    }

}
