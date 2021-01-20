<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadFileLPJController extends Controller
{
    public function index(){
        return view('download.file-lpj.index');
    }
}
