<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_login;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function index(){
        return view("login");
    }
    public function login(Request $req){
        $user = tb_login::where("username", $req->username)->first();
        if(isset($user)){
            if(Hash::check($req->input("password"), $user->password)){
                if($user->active){
                    Session::put("user", $user);
                    return redirect("e-budgeting");
                }
            }
        }
        return redirect("/");
    }
}
