@extends("master")
@section("masterdata.open", "menu-open")
@section('masterdata', "active")
@section("tambah.pengajuan", "active")
@section('judul', 'Data Pengajuan')
@section("content")
    <button class="btn btn-success mb-4">Tambah</button>
    <div class="card card-outline card-primary">
        <div class="card-body">
            <select name="tahun_akademik" class="form-control mb-3">
                <option value="0">Pilih Tahun Akademik</option>
                <option value="1">2020</option>
            </select>
            <button class="btn btn-primary">Tampilkan</button>
        </div>
    </div>
    <div class="card card-outline card-primary">
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
                    <th>Kelola</th>
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
                    <td>
                        <div class="row">
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger ml-1">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Total Anggaran</td>
                    <td colspan="2">Rp. 5.000.000</td>
                    <td class="font-weight-bold">Sisa Anggaran</td>
                    <td colspan="2">Rp. 4.850.000</td>
                    <td style="font-weigt:bold;">Digunakan</td>
                    <td>Rp. 150.000</td>
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
                    <td>
                        <div class="row">
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger ml-1">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Total Anggaran</td>
                    <td colspan="2">Rp. 5.000.000</td>
                    <td class="font-weight-bold">Sisa Anggaran</td>
                    <td colspan="2">Rp. 4.850.000</td>
                    <td style="font-weigt:bold;">Digunakan</td>
                    <td>Rp. 150.000</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
