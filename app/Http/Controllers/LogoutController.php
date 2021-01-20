<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LogoutController extends Controller
{
    public function logout(){
        if(Session::has("user")){
            Session::flush();
            return redirect("/");
        }else{
            return redirect("/");
        }
    }
}
