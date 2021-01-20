@extends('master')
@section("akun.open", "menu-open")
@section('akun', "active")
@section("kel.akun", "active")
@section('judul', 'Data Akun')
@section('content')
    <div class="card card-outline card-primary mt-4">
        <div class="card-header">
            <h5 class="card-title">Super Admin</h5>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-3 justify-content-center">
                    <img src="{{asset('dist/img/avatar.png')}}" alt="" width="100" style="display:block;margin:0 auto;border-radius:50px;">
                    <p style="text-align:center;margin-top:10px;font-weight:bold;">Munzir</p>
                    <div class="row justify-content-center">
                        <a class="btn btn-info" href="#">Edit</a>
                        <a href="#" class="btn btn-danger ml-1">Hapus</a>
                    </div>
                </div>
                <div class="col-3 justify-content-center">
                    <img src="{{asset('dist/img/avatar2.png')}}" alt="" width="100" style="display:block;margin:0 auto;border-radius:50px;">
                    <p style="text-align:center;margin-top:10px;font-weight:bold;">Muhammad</p>
                    <div class="row justify-content-center">
                        <a class="btn btn-info" href="#">Edit</a>
                        <a href="#" class="btn btn-danger ml-1">Hapus</a>
                    </div>
                </div>
                <div class="col-3 justify-content-center">
                    <img src="{{asset('dist/img/avatar3.png')}}" alt="" width="100" style="display:block;margin:0 auto;border-radius:50px;">
                    <p style="text-align:center;margin-top:10px;font-weight:bold;">Mussafi</p>
                    <div class="row justify-content-center">
                        <a class="btn btn-info" href="#">Edit</a>
                        <a href="#" class="btn btn-danger ml-1">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-outline card-primary mt-4">
        <div class="card-header">
            <h5 class="card-title">Admin</h5>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-3 justify-content-center">
                    <img src="{{asset('dist/img/avatar4.png')}}" alt="" width="100" style="display:block;margin:0 auto;border-radius:50px;">
                    <p style="text-align:center;margin-top:10px;font-weight:bold;">Ahmad</p>
                    <div class="row justify-content-center">
                        <a class="btn btn-info" href="#">Edit</a>
                        <a href="#" class="btn btn-danger ml-1">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-outline card-primary mt-4">
        <div class="card-header">
            <h5 class="card-title">Super Admin</h5>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-3 justify-content-center">
                    <img src="{{asset('dist/img/avatar5.png')}}" alt="" width="100" style="display:block;margin:0 auto;border-radius:50px;">
                    <p style="text-align:center;margin-top:10px;font-weight:bold;">Ghani</p>
                    <div class="row justify-content-center">
                        <a class="btn btn-info" href="#">Edit</a>
                        <a href="#" class="btn btn-danger ml-1">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
