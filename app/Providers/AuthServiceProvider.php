<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Define Roles 

        // Super Admin 

        Gate::define('isSuperAdmin', function ($user) {
            return $user->user_role =='superadmin'; 
        }); 

        // Admin 

        Gate::define('isAdmin', function ($user)
        {
            return $user->user_role=='admin';
        }); 

        // User

        Gate::define('isUser', function($user){
            return $user->user_role=="user"; 
        }); 

        // Staff

        Gate::define('isStaff', function($user){
            return $user->user_role=="staff"; 
        }); 
    }
}
