<?php

namespace App\Providers;
use App\User;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
  
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
 
        $this->registerPolicies();

       
    }
}
