<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("part.link")
    @yield("style")
    <title>E-Budgeting STMIK Sumedang</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{route('dashboard.index')}}" class="brand-link"  style="text-align:center;">
                <i class="fas fa-money-check-alt brand-image" style="margin-top:7px;margin-left:15px"></i>
                <span class="brand-text font-weight-bold">E-BUDGETING</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('dist/img/avatar.png')}}" alt="User Image" style="width:80px;">
                    </div>
                    <div class="info" style="margin-left:10px;">
                        <a href="#" class="d-block">Munzir</a>
                        <p style="color:white;font-size:13px;"><i class="fas fa-circle" style="color:#3C753C;margin-top:15px;margin-right:7px;"></i>Admin</p>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">MAIN MENU</li>
                        <li class="nav-item">
                            <a href="{{route('dashboard.index')}}" class="nav-link @yield('dashboard')">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item @yield('masterdata.open')">
                            <a href="#" class="nav-link @yield('masterdata')">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                Master Data
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('masterdata.kelola-apbu.index')}}" class="nav-link @yield('kel.apbu')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kelola APBU</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('masterdata.tambah-pengajuan.index')}}" class="nav-link @yield('tambah.pengajuan')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Pengajuan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kelola Fakultas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kelola Program Studi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kelola BEM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kelola Himapro</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('masterdata.tambah-tahun-akademik.index')}}" class="nav-link @yield('tambah-tahun-akademik')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Tahun Akademik</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kelola UKM</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @yield('laporan.open')">
                            <a href="#" class="nav-link @yield('laporan')">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Laporan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('laporan.laporan-pengajuan.index')}}" class="nav-link @yield('laporan-pengajuan')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Laporan Pengajuan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('laporan.apbu.index')}}" class="nav-link @yield('laporan-apbu')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>APBU</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @yield('menu.open')">
                            <a href="#" class="nav-link @yield('setting-menu')">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Setting Menu
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('menu.index')}}" class="nav-link @yield('menu')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kelola Menu</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @yield('akun.open')">
                            <a href="#" class="nav-link @yield('akun')">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>
                                Akun
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('account.index')}}" class="nav-link @yield('kel.akun')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kelola Akun</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @yield('download.open')">
                            <a href="#" class="nav-link @yield('download')">
                            <i class="nav-icon fas fa-download"></i>
                            <p>
                                Download Area
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('download.file-pengajuan.index')}}" class="nav-link @yield('file-pengajuan')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>File Pengajuan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('download.file-lpj.index')}}" class="nav-link @yield('file-lpj')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>File LPJ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('logout.logout')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Logout</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('judul')</h1>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    @yield("content")
                </div>
            </section>
        </div>
    </div>
    @include("part.script")
    @yield("script")
</body>
</html>

