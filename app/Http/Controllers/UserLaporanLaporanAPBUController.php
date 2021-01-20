<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLaporanLaporanAPBUController extends Controller
{
    public function index(){
        return view("user.laporan.apbu.index");
    }
}
