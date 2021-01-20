@extends("master")
@section("masterdata.open", "menu-open")
@section('masterdata', "active")
@section("kel.apbu", "active")
@section("judul", "Ajukan Anggaran")
@section("content")
    <form action="{{route('masterdata.kelola-apbu.anggaran.store')}}" method="POST">
        @csrf
        <div class="card card-outline card-primary mt-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_apbu">Kode APBU</label>
                    <input type="text" name="kode_apbu" id="kode_apbu" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_apbu">Nama APBU</label>
                    <input type="text" name="nama_apbu" id="nama_apbu" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="tahun_akademik">Tahun Akademik</label>
                    <input type="text" name="tahun_akademik" id="tahun_akademik" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal Anggaran</label>
                    <input type="number" name="nominal" id="nominal" class="form-control">
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
