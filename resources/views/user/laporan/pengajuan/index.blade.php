@extends('user-master')
@section("laporan.open", "menu-open")
@section('laporan', "active")
@section("laporan-pengajuan", "active")
@section('judul', 'Cetak Laporan')
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
    <div class="card card-outline card-primary mt-1">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Pengajuan</th>
                        <th>No. Agenda</th>
                        <th>TGL Surat Masuk</th>
                        <th>TGL Surat Keluar</th>
                        <th>Realisasi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="8" style="background-color:#F7F7F7">
                            <h6 class="font-weight-bold mt-1" style="text-align:center;">Tahun Akademik Gasal 2018/2019</h6>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" style="background-color:#17A2B8">
                        <h6 class="font-weight-bold mt-1" style="text-align:center;color:white">APBU : Pemeliharaan Sarana di Kelas dan Laboratorium</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Prodi Sistem Informasi</td>
                        <td>SI/01/2018</td>
                        <td>01/02/2018</td>
                        <td>28/02/2018</td>
                        <td>100000</td>
                        <td>LPJ</td>
                    </tr>
                    <tr>
                    <td colspan="8" style="background-color:#17A2B8;text-align:center;color:white;font-weight:bold;">APBU : Pemeliharaan Sarana Belajar dan Alat Peraga Non Laboratorium</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Prodi Sistem Informasi</td>
                    <td>SI/02/2018</td>
                    <td>10/02/2018</td>
                    <td>10/03/2018</td>
                    <td>0</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td colspan="7"  style="text-align:center;background-color:#F7F7F7"><h4 style="font-weight:bold;" class="mt-2">Anggaran Total : Rp. 15.000.000 | Total Digunakan : Rp. 150.000</h4></td>
                </tr>
                    <td colspan="7" style="background-color:#F7F7F7">
                        <button class="btn btn-primary" style="float:left">Print</button>
                        <button class="btn btn-primary" style="float:right;">Export to Excel</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
