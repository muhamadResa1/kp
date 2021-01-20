@extends('master')
@section("masterdata.open", "menu-open")
@section('masterdata', "active")
@section("kel.apbu", "active")
@section('judul', 'Proses Pengajuan')
@section("content")
    <div class="card card-outline card-primary mt-4">
        <div class="card-body">
            <select name="tahun-akademik" class="form-control">
                <option value="0">Pilihan Tahun Akademik</option>
                <option value="1">2020</option>
            </select>
            <button class="btn btn-primary mt-3">Tampilkan</button>
        </div>
    </div>
    <div class="card card-outline card-primary mt-1">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama APBU</th>
                        <th>Pengajuan</th>
                        <th>Plafon</th>
                        <th>Diajukan</th>
                        <th>Direalisasi</th>
                        <th>Status</th>
                        <th>Operasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="8" style="text-align:center;font-weight:bold;background-color:#F7F7F7">Daftar Pengajuan Tahun Akademik Gasal 2018/2019</td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Pemeliharaan Sarana di Kelas dan Laboratorium</td>
                        <td><a href="#">Prodi Sistem Informasi</a></td>
                        <td>Rp. 5.000.000</td>
                        <td>Rp. 5.000.000</td>
                        <td>Rp. 1.000.000</td>
                        <td><a href="#">LPJ</a></td>
                        <td>
                            <div class="row">
                                <a href="#" class="btn btn-light mr-1 mt-1">Edit</a>
                                <a href="#" class="btn btn-light mt-1">LPJ</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
