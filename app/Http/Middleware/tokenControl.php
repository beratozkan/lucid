<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\User;
class tokenControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      /*  $user = user::where("email",$request->email)->first();
        if($user && ($request->token == $user->remember_token)){
            //$request->merge(["email" => $user->email]);
            return $next($request);
        }  
        return response()->json("token veya kullanıcı geçersiz");
     */   
    }
}
