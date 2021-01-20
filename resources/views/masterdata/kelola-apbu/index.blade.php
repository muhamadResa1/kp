@extends('master')
@section("masterdata.open", "menu-open")
@section('masterdata', "active")
@section("kel.apbu", "active")
@section('judul', 'Daftar APBU')
@section("content")
    <div class="row mb-4 ml-1">
        <a class="btn btn-success" href="{{route('masterdata.kelola-apbu.anggaran.index')}}">Tambah</a>
        <a class="btn btn-primary" href="{{route('masterdata.kelola-apbu.detail.index')}}" style="margin-left:5px;">Proses Pengajuan</a>
    </div>
    <div class="card card-outline card-primary">
        <div class="card-body">
            <table id="apbu-table" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>No.</th>
                <th>Kode APBU</th>
                <th>Nama APBU</th>
                <th>Kelola</th>
                </tr>
                </thead>
                <tbody>
                @foreach($apbu as $a)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$a->kode_apbu}}</td>
                    <td>{{$a->nama_apbu}}</td>
                    <td>
                        <div class="row">
                            <button class="btn btn-primary">Input Anggaran</button>
                            <a class="btn btn-success" style="margin-left:5px;" href="{{route('masterdata.kelola-apbu.anggaran.edit',$a->id)}}">Edit</a>
                            <a class="btn btn-danger" style="margin-left:5px;" href="{{route('masterdata.kelola-apbu.anggaran.delete', $a->id)}}">Hapus</a>
                            <button class="btn btn-light" style="margin-left:5px;">Lihat Juklak</button>
                        </div>
                    </td>
                </tr>
                @endforeach
                <!-- <tr>
                <td>1</td>
                <td>01.1.03.02</td>
                <td>Pemeliharaan Sarana di Kelas dan Laboratorium</td>
                <td>
                    <div class="row">
                        <button class="btn btn-primary">Input Anggaran</button>
                        <button class="btn btn-success" style="margin-left:5px;">Edit</button>
                        <button class="btn btn-danger" style="margin-left:5px;">Hapus</button>
                        <button class="btn btn-light" style="margin-left:5px;">Lihat Juklak</button>
                    </div>
                </td> -->
                <!-- <td></td>
                <td>

                </td>
                <td>

                </td> -->
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@section("script")
<script>
  $(function () {
    $('#apbu-table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
