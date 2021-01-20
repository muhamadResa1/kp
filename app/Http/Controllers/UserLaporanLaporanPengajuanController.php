<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLaporanLaporanPengajuanController extends Controller
{
    public function index(){
        return view("user.laporan.pengajuan.index");
    }
}
