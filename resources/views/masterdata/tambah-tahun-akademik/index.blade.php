@extends("master")
@section("masterdata.open", "menu-open")
@section('masterdata', "active")
@section("tambah-tahun-akademik", "active")
@section('judul', 'Data Tahun Akademik')
@section("content")
    <button class="btn btn-success mb-4">Tambah</button>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Tahun Akademik</h3>
            <div class="card-tools mr-2">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
        <table id="tahun-akademik-table" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>No.</th>
                <th>Tahun Akademik</th>
                <th>Kelola</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>1</td>
                <td>Gasal 2018/2019</td>
                <td>
                    <div class="row">
                        <button class="btn btn-light" style="margin-left:5px;">Edit</button>
                        <button class="btn btn-danger" style="margin-left:5px;">Hapus</button>
                    </div>
                </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@section('script')
<script>
  $(function () {
    $('#tahun-akademik-table').DataTable({
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
