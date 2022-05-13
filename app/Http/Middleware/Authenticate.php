<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use auth;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect("/login");

        }
        return $next($request);
    }
}
