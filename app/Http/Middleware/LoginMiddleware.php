<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class LoginMiddleware
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
        if(Session::has("user")){
            if(Session::get("user")->role == "admin"){
                return redirect("e-budgeting");
            }else{
                return redirect("e-budgeting/user");
            }
        }
        return $next($request);
    }
}
