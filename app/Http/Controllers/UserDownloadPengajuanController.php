<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDownloadPengajuanController extends Controller
{
    public function index(){
        return view("user.download.file-pengajuan.index");
    }
}
