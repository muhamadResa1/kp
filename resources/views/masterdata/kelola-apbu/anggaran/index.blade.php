@extends('master')
@section("masterdata.open", "menu-open")
@section('masterdata', "active")
@section("kel.apbu", "active")
@section('judul', 'Input Anggaran')
@section('content')
    <a class="btn btn-success mb-4 mt-1" href="{{route('masterdata.kelola-apbu.anggaran.add')}}">Tambah</a>
    <div class="card card-outline card-primary">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tahun Akademik</th>
                    <th>Nominal Anggaran</th>
                    <th>Kelola</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" style="text-align:center;background-color:#f7f7f7;font-weight:bold;">Pemeliharaan Sarana di Kelas dan Laboratorium</td>
                </tr>
                @foreach($apbu as $a)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$a->tahun_akademik}}</td>
                        <td>{{$a->nominal}}</td>
                        <td>
                            <div class="row">
                                <a href="{{route('masterdata.kelola-apbu.anggaran.edit',$a->id)}}" class="btn btn-warning" style='color:white;'>Edit</a>
                                <a href="{{route('masterdata.kelola-apbu.anggaran.delete', $a->id)}}" class="btn btn-danger ml-1">Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                <!-- <tr>
                    <td>1.</td>
                    <td>Gasal 2018/2019</td>
                    <td>Rp. 5.000.000</td>
                    <td>
                        <div class="row">
                            <a href="#" class="btn btn-warning" style='color:white;'>Edit</a>
                            <a href="#" class="btn btn-danger ml-1">Hapus</a>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
@endsection
