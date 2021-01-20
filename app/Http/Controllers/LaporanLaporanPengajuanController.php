<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanLaporanPengajuanController extends Controller
{
    public function index(){
        return view("laporan.laporan-pengajuan.index");
    }
}
