<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanAPBUController extends Controller
{
    public function index(){
        return view("laporan.apbu.index");
    }
}
