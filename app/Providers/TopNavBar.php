<?php

namespace App\Providers;
use App\Models\User;
use App\Models\NavBarBlockHeader;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\ServiceProvider;
use auth;
class TopNavBar extends ServiceProvider
{
    /**
     * Register services.
     *
     * 
     * @return void
     */
    
    public $test;
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
  
    public function boot()
    {
       
        view()->composer('row-text-right', function ($view) {
            $response = Http::withToken(Cookie::get("access_token"))->get("http://127.0.0.1:8001/api/row-text-right");
            
              
            $view->with('userinfo', $response);
       
           
        });
    }
}
