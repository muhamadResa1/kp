@extends('user-master')
@section("laporan.open", "menu-open")
@section('laporan', "active")
@section("laporan-apbu", "active")
@section('judul', 'Cetak APBU')
@section('content')
    <div class="card card-outline card-primary mt-4">
        <div class="card-body">
            <select name="tahun-akademik" class="form-control">
                <option value="0">Pilih Tahun Akademik</option>
                <option value="1">2020</option>
            </select>
            <button class="btn btn-primary mt-3">Tampilkan</button>
        </div>
    </div>
    <div class="card card-outline card-primary">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode APBU</th>
                        <th>Nama APBU</th>
                        <th>Plafon</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="background-color:#F7F7F7;text-align:center;font-weight:bold" colspan="4">Tahun Akademik Gasal 2018/2019</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>01.1.03.01</td>
                        <td>Pemeliharaan Sarana di Kelas dan Laboratorium</td>
                        <td>Rp. 5.000.000</td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold;" colspan="3">Total</td>
                        <td style="font-weight:bold">Rp. 5.000.000</td>
                    </tr>
                    <tr style="background-color:#F7F7F7">
                        <td colspan="4">
                            <button class="btn btn-primary" style="float:left;">Print</button>
                            <button class="btn btn-primary" style="float:right">Export to Excel</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
