<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadFilePengajuanController extends Controller
{
    public function index(){
        return view('download.file-pengajuan.index');
    }
}
