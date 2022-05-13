<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\userNotification;
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
            $notification = userNotification::where("userid",Auth::user()["id"])->take(5)->get();
            $view->with('notification', $notification);
        });
    }
}
