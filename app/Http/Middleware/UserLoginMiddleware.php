<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class UserLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Session::has("user")){
            if(!Session::get("user")->role == "user"){
                return redirect("e-budxgeting");
            }
        }
        return $next($request);
    }
}
