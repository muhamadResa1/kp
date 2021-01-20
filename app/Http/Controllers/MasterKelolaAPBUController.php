<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\APBU;


class MasterKelolaAPBUController extends Controller
{
    public function index(){
        $apbu = APBU::all();
        return view('masterdata.kelola-apbu.index',["apbu" => $apbu]);
    }
    public function anggaran_index(){
        $apbu = APBU::all();
        return view("masterdata.kelola-apbu.anggaran.index", ["apbu" => $apbu]);
    }
    public function detail_index(){
        return view('masterdata.kelola-apbu.detail.index');
    }
    public function anggaran_add(){
        return view("masterdata.kelola-apbu.anggaran.add");
    }
    public function anggaran_store(Request $req){
        APBU::create([
            "kode_apbu" => $req->input("kode_apbu"),
            "nama_apbu" => $req->input("nama_apbu"),
            "tahun_akademik" => $req->input("tahun_akademik"),
            "nominal" => $req->input("nominal"),
        ]);
        return redirect()->route("masterdata.kelola-apbu.anggaran.index");
    }
    public function anggaran_edit($id){
        $apbu = APBU::find($id);
        return view("masterdata.kelola-apbu.anggaran.edit", ["apbu" => $apbu]);
    }
    public function anggaran_update(Request $req, $id){
        $apbu = APBU::find($id);
        $apbu->kode_apbu = $req->input("kode_apbu");
        $apbu->nama_apbu = $req->input("nama_apbu");
        $apbu->tahun_akademik = $req->input("tahun_akademik");
        $apbu->nominal = $req->input("nominal");
        $apbu->save();
        return redirect()->route('masterdata.kelola-apbu.index');
    }
    public function anggaran_delete($id){
        $apbu = APBU::find($id);
        $apbu->delete();
        return redirect()->route('masterdata.kelola-apbu.index');
    }
}
