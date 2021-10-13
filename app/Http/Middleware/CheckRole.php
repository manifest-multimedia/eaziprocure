<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Gate;


// class BeforeMiddleware
// {
//     public function handle($request, Closure $next)
//     {
//         // Perform action

//         return $next($request);
//     }
// }

class CheckRole
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        

        /*  Check the Logged in user's data 
            if account status is 0 then proceed to account setup page. 
            If account status is 1 then go to dashboard.
            If account satuts is 2 then the account has been disabled.
            If account status is 3 then the account is in pending delete state. Meaning the User has Requested for their account
            to be deleted and this would be scheduled for deletion.
        */

        try {

            $account_status=Auth::user()->account_status; 

            switch($account_status) {

            case 0: 
            // New Account 
            return redirect()->route('account_setup'); 
            
            case 1: 
            // Active Account 
            return $next($request);
            
            case 2: 
            // Disabled Account
            return redirect()->route('account_disabled');     

            case 3: 
            //Pending Deletion 
            
            return redirect()->route('account_deleted'); 

            default: 

            abort(403,"Access Denied");   

            }
        }

        catch(exception $e) {
            return $e->message(); 
        }


    }
}
