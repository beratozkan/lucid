<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use App\Models\UserInformation;
use Auth;
class constants extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('LeftSideBar', function ($view) {
            $response = Http::withToken(Cookie::get("access_token"))->get("http://127.0.0.1:8001/api/left-side-bar");
            $side_bar_info = $response;

            $view->with('user', $side_bar_info);
        });
    }
}
