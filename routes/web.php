<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["middleware" => "LoginMiddleware"],function(){
    Route::get('/', "LoginController@index")->name("login.index");
    Route::post("/", "LoginController@login")->name("login.login");
});

Route::group(["middleware" => "LoggedMiddleware"],function(){
    Route::get("e-budgeting", "DashboardController@index")->name("dashboard.index");
    Route::get("e-budgeting/master/kelola-apbu", "MasterKelolaAPBUController@index")->name("masterdata.kelola-apbu.index");
    Route::get("e-budgeting/master/tambah-pengajuan", "MasterTambahPengajuanController@index")->name("masterdata.tambah-pengajuan.index");
    Route::get("e-budgeting/master/tambah-tahun-akademik", "MasterTambahTahunAkademikController@index")->name("masterdata.tambah-tahun-akademik.index");
    Route::get("e-budgeting/master/kelola-apbu/anggaran", "MasterKelolaAPBUController@anggaran_index")->name('masterdata.kelola-apbu.anggaran.index');
    Route::get("e-budgeting/master/kelola-apbu/detail", "MasterKelolaAPBUController@detail_index")->name("masterdata.kelola-apbu.detail.index");
    Route::get("e-budgeting/laporan/laporan-pengajuan", "LaporanLaporanPengajuanController@index")->name("laporan.laporan-pengajuan.index");
    Route::get('e-budgeting/laporan/apbu', "LaporanAPBUController@index")->name("laporan.apbu.index");
    Route::get("e-budgeting/menu", "MenuController@index")->name("menu.index");
    Route::get("e-budgeting/download/file-pengajuan", "DownloadFilePengajuanController@index")->name('download.file-pengajuan.index');
    Route::get("e-budgeting/download/file-lpj", "DownloadFileLPJController@index")->name('download.file-lpj.index');
    Route::get('e-budgeting/account', "AccountController@index")->name('account.index');
    Route::get("logout", "LogoutController@logout")->name("logout.logout");
    Route::get("e-budgeting/master/kelola-apbu/anggaran/add", "MasterKelolaAPBUController@anggaran_add")->name("masterdata.kelola-apbu.anggaran.add");
    Route::post("e-budgeting/master/kelola-apbu/anggaran/store", "MasterKelolaAPBUController@anggaran_store")->name("masterdata.kelola-apbu.anggaran.store");
    Route::get("e-budgeting/master/kelola-apbu/anggaran/edit/{id}", "MasterKelolaAPBUController@anggaran_edit")->name("masterdata.kelola-apbu.anggaran.edit");
    Route::post("e-budgeting/master/kelola-apbu/anggaran/update/{id}", "MasterKelolaAPBUController@anggaran_update")->name("masterdata.kelola-apbu.anggaran.update");
    Route::get("e-budgeting/master/kelola-apbu/anggaran/delete/{id}", "MasterKelolaAPBUController@anggaran_delete")->name("masterdata.kelola-apbu.anggaran.delete");
});

Route::group(["middleware" => "UserLoginMiddleware"],function(){
    Route::get("e-budgeting/user", "UserDashboardController@index")->name("user.dashboard.index");
    Route::get("e-budgeting/user/laporan/pengajuan", "UserLaporanLaporanPengajuanController@index")->name("user.laporan.laporan-pengajuan.index");
    Route::get("e-budgeting/user/laporan/apbu", "UserLaporanLaporanAPBUController@index")->name("user.laporan.apbu.index");
    Route::get("e-budgeting/user/download/file-pengajuan", "UserDownloadPengajuanController@index")->name("user.download.pengajuan.index");
    Route::get("e-budgeting/user/download/file-lpj", "UserDownloadLPJController@index")->name("user.download.lpj.index");
    Route::get("e-budgeting/user/logout", "UserLogoutController@logout")->name("user.logout.logout");
    // Route::get("e-budgeting/user/anggaran", "UserAnggaranController@index")->name("user.anggaran.index");
});
