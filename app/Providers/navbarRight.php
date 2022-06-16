<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\userNotification;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

use Auth;
class navbarRight extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
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
        view()->composer('TopNavBar', function ($view) {
            //$notification = userNotification::where("userid",Auth::user()["id"])->take(5)->get();
            $response = Http::withToken(Cookie::get("access_token"))->get("http://127.0.0.1:8001/api/top-nav-bar");
            $notification = $response;
            $view->with('notification', $notification);
        });
    }
}
