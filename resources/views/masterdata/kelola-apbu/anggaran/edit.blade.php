@extends("master")
@section("masterdata.open", "menu-open")
@section('masterdata', "active")
@section("kel.apbu", "active")
@section("judul", "Ajukan Anggaran")
@section("content")
    <form action="{{route('masterdata.kelola-apbu.anggaran.update',$apbu->id)}}" method="POST">
        @csrf
        <div class="card card-outline card-primary mt-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_apbu">Kode APBU</label>
                    <input type="text" name="kode_apbu" id="kode_apbu" class="form-control" value="{{$apbu->kode_apbu}}">
                </div>
                <div class="form-group">
                    <label for="nama_apbu">Nama APBU</label>
                    <input type="text" name="nama_apbu" id="nama_apbu" class="form-control" value="{{$apbu->nama_apbu}}">
                </div>
                <div class="form-group">
                    <label for="tahun_akademik">Tahun Akademik</label>
                    <input type="text" name="tahun_akademik" id="tahun_akademik" class="form-control" value="{{$apbu->tahun_akademik}}">
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal Anggaran</label>
                    <input type="number" name="nominal" id="nominal" class="form-control" value="{{$apbu->nominal}}">
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <button class="btn btn-primary mr-2" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
