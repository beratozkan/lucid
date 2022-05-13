<?php

namespace App\Providers;
use App\Models\User;
use App\Models\NavBarBlockHeader;

use Illuminate\Support\ServiceProvider;
use auth;
class TopNavBar extends ServiceProvider
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
        view()->composer('row-text-right', function ($view) {
            $userinfo = NavBarBlockHeader::where("userId",Auth::user()["id"])->get();
            $view->with('userinfo', $userinfo);
        });
    }
}
