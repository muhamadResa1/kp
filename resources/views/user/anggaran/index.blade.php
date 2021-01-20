@extends("user-master")
@section("user.anggaran", "active")
@section("judul", "Ajukan Anggaran")
@section("content")
    <div class="card card-outline card-primary mt-4">
        <div class="card-body">
            <div class="form-group">
                <label for="nama_apbu">Nama APBU</label>
                <input type="text" name="nama_apbu" id="nama_apbu" class="form-control" >
            </div>
            <div class="form-group">
                <label for="pengajuan">Pengajuan</label>
                <input type="text" name="pengajuan" id="pengajuan" class="form-control">
            </div>
            <div class="form-group">
                <label for="plafon">Plafon</label>
                <input type="number" name="plafon" id="plafon" class="form-control">
            </div>
            <div class="form-group">
                <label for="diajukan">Diajukan</label>
                <input type="number" name="diajukan" id="diajukan" class="form-control">
            </div>
            <div class="form-group">
                <label for="direalisasi">Direalisasi</label>
                <input type="number" name="direalisasi" id="direalisasi" class="form-control">
            </div>
            <div class="form-group">
                <label for="dokumen">Input Dokumen</label>
                <input type="file" name="dokumen" id="dokumen" class="form-control">
            </div>
        </div>
    </div>
@endsection
