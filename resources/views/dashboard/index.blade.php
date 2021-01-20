@extends("master")
@section("dashboard", "active")
@section("judul", "Dashboard")
@section("content")
    <div class="card bg-gradient-success">
        <div class="card-body">
            <div class="row">
                <i class="fas fa-info" style="margin-right:10px;font-size:17px;margin-top:2px;"></i>
                <p class="font-weight-bold" style="font-size:17px;">Selamat Datang, Admin</h>
            </div>
            <div class="row">
                <p class="text-warning font-weight-bold" style="margin-right:5px;">Info Terbaru : </p>
                <p>Info</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>0</h3>
                    <p>Total Pengajuan</p>
                    <div class="icon">
                        <i class="fas fa-list"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>0</h3>
                    <p>Pengajuan Disetujui</p>
                    <div class="icon">
                        <i class="fas fa-check-square"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>0</h3>
                    <p>Pengajuan Ditolak</p>
                    <div class="icon">
                        <i class="fas fa-window-close"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-warning">
                <div class="inner" style="color:white">
                    <h3>0</h3>
                    <p>Pengajuan Pending</p>
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <i class="fas fa-clipboard" style="margin-right:10px;margin-top:3px;font-size:17px;"></i>
                        <p style="font-size:17px;">Berdasarkan Tahun Akademik</p>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-7">
                            <select name="tahun akademik" id="" class="form-control">
                                <option value="0">Pilih Tahun Akademik</option>
                                <option value="1">2020</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <button class="btn btn-primary">Lihat Grafik</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card">
                <div class="card-footer">
                    Grafik
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <h5>Grafik Pengajuan Anggaran Fakultas Teknik</h5>
                    </div>
                    <div class="row justify-content-center">
                        <p>Tahun Akademik Gasal 2018/2019</p>
                    </div>
                    <canvas id="myChart" width="500" height="500">
                    </canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script>
        var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Fakultas Teknik', 'Prodi Sistem Informasi', 'Prodi Teknik Informatika'],
        datasets: [{
            label: '# of Votes',
            data: [14, 14, 8],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
    </script>
@endsection
