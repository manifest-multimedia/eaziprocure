<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ActiveBusinessProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // Check for existing Business Profile 

        // Check for Active Business Profile Upon Previous Acitivity

        // Set Active Business Profile in Session 
        
        // Update Active Business Profile Data in DB; 
        
        // Drop Session Data if No Active Profile Is Selected 

        return $next($request);
    }
}
