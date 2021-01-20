@extends('user-master')
@section("download.open", "menu-open")
@section('download', "active")
@section("file-lpj", "active")
@section('judul', 'File LPJ')
@section("content")
    <div class="card card-outline card-primary mt-4">
        <div class="card-body">
            <select name="tahun-akademik" class="form-control">
                <option value="0">Pilih Tahun Akademik</option>
                <option value="1">2020</option>
            </select>
            <button class="btn btn-primary mt-3">Tampilkan</button>
        </div>
    </div>
    <div class="card card-outline card-primary mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama APBU</th>
                    <th>Nama Pengaju</th>
                    <th>Keterangan</th>
                    <th>Download Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="background-color:#17A2B8;color:white;text-align:center;font-weight:bold;" colspan="5">Tahun Akademik Gasal 2018/2019</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pemeliharaan Sarana di Kelas dan Laboratorium</td>
                    <td>Prodi Sistem Informasi</td>
                    <td>Renovasi Ruangan Lab</td>
                    <td><a href="#" class="btn btn-primary">Download Link</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Pemeliharaan Sarana di Kelas dan Laboratorium</td>
                    <td>Fakultas Teknik</td>
                    <td>Beli Komputer LAB TE</td>
                    <td>Link tidak tersedia</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
