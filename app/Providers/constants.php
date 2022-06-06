<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
            $side_bar_info = UserInformation::where("userId",Auth::user()["id"])->first();
            $view->with('user', $side_bar_info);
        });
    }
}
