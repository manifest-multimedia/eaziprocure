<?php

namespace App\Listeners;

use IlluminateAuthEventsLogin;
use Session;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use App\Models\OrgProfiles; 
use App\Models\UserOrganizations;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Events\Login;

class LoginSuccessful
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \IlluminateAuthEventsLogin  $event
     * @return void
     */
    public function handle(Login $event)
    {
        
        //Check if User Has Organizations

        $user_id=Auth::user()->id; 

        $organization=UserOrganizations::where('user_id', $user_id)->get();

        if($organization->count() > 0){

            $org_id=UserOrganizations::where('user_id', $user_id)->where('status', 'default')->first()->org_id;

            session(['current_org_id' => $org_id]);
            session(['previous_org_id' => 0]);

        }


    }
}
