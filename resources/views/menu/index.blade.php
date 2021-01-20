@extends('master')
@section("menu.open", "menu-open")
@section('setting-menu', "active")
@section("menu", "active")
@section('judul', 'Kelola Menu')
@section('content')
    <div class="card card-outline card-primary mt-3">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Menu</th>
                        <th>Tampilkan / Sembunyikan Menu</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3" style="background-color:#17A2B8;text-align:center;color:white;"><b>Hak Akses</b> : Admin</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Beranda</td>
                        <td><button class="btn btn-warning" style="color:white">Sembunyikan</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Master Data</td>
                        <td><button class="btn btn-warning" style="color:white">Sembunyikan</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Laporan</td>
                        <td><button class="btn btn-warning" style="color:white">Sembunyikan</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Setting Menu</td>
                        <td><button class="btn btn-warning" style="color:white">Sembunyikan</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Akun</td>
                        <td><button class="btn btn-warning" style="color:white">Sembunyikan</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Download Area</td>
                        <td><button class="btn btn-warning" style="color:white">Sembunyikan</button></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color:#17A2B8;text-align:center;color:white;"><b>Hak Akses</b> : Pimpinan</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Beranda</td>
                        <td><button class="btn btn-warning" style="color:white">Sembunyikan</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Master Data</td>
                        <td><button class="btn btn-primary">Tampilkan</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Laporan</td>
                        <td><button class="btn btn-warning" style="color:white">Sembunyikan</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Setting Menu</td>
                        <td><button class="btn btn-primary">Tampilkan</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Akun</td>
                        <td><button class="btn btn-primary">Tampilkan</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Download Area</td>
                        <td><button class="btn btn-warning" style="color:white">Sembunyikan</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
