<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDownloadLPJController extends Controller
{
    public function index(){
        return view("user.download.file-lpj.index");
    }
}
