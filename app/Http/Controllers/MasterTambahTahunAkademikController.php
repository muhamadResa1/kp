<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterTambahTahunAkademikController extends Controller
{
    public function index(){
        return view('masterdata.tambah-tahun-akademik.index');
    }
}
