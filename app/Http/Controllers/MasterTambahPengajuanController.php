<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterTambahPengajuanController extends Controller
{
    public function index(){
        return view("masterdata/tambah-pengajuan/index");
    }
}
