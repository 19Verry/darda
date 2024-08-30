<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

// Route Default

Route::get('/', [Controllers\HomeController::class, 'index']);

// Route Kantin

Route::get('/kantin', function () {
    return view('kantin/dashboard');
});
Route::get('/loginkantin', function () {
    return view('loginKantin');
});
Route::get('/transaksi', function () {
    return view('kantin/history-transaksi');
});
Route::get('/ubahpassword', function () {
    return view('kantin/ubah-password');
});
Route::get('/tarik', function () {
    return view('kantin/tarik');
});
Route::get('/topup', function () {
    return view('kantin/topup');
});

// Route Official

Route::get('/prodi', [Controllers\ProdiController::class, 'index']);
Route::get('/bidang/kurikulum/smp', [Controllers\KurikulumSmpController::class, 'index']);
Route::get('/bidang/kurikulum/sma', [Controllers\KurikulumSmaController::class, 'index']);
Route::get('/bidang/tahfidz', [Controllers\TahfidzController::class, 'index']);
Route::get('/bidang/kesantrian', [Controllers\KesantrianController::class, 'index']);
Route::get('/bidang/akhlak', [Controllers\AkhlakController::class, 'index']);
Route::get('/bidang/bahasa', [Controllers\BahasaController::class, 'index']);
Route::get('profile', [Controllers\ProfileController::class, 'index']);

// Route PSB

Route::get('/psb', function () {
    return view('psb/psb');
});
Route::get('/formpsb', function () {
    return view('psb/formpsb');
});
Route::get('/formpsb/#about', function () {
    return view('psb/formpsb/#about');
});
Route::get('/finishpsb', function () {
    return view('psb/finishpsb');
});

// Route Admin 

Route::get('/admin', function () {
    return view('admin/dashboard');
});
Route::get('/admin/header-footer', function () {
    return view('admin/header-footer');
});
Route::get('admin/home/slideshow', function () {
    return view('admin.home.slideshow');
});
Route::get('admin/home/tentang-masyarakat', function () {
    return view('admin.home.tentang-masyarakat');
});
Route::get('admin/home/psb', function () {
    return view('admin.home.psb');
});
Route::get('admin/home/fasilitas', function () {
    return view('admin.home.fasilitas');
});
Route::get('admin/home/kegiatan', function () {
    return view('admin.home.kegiatan');
});
Route::get('admin/home/prestasi', function () {
    return view('admin.home.prestasi');
});
Route::get('admin/bidang/kurikulum/smp', function () {
    return view('admin.bidang.kurikulum.smp');
});
Route::get('admin/bidang/kurikulum/sma', function () {
    return view('admin.bidang.kurikulum.sma');
});
Route::get('admin/bidang/tahfidz', function () {
    return view('admin.bidang.tahfidz');
});
Route::get('admin/bidang/kesantrian', function () {
    return view('admin.bidang.kesantrian');
});
Route::get('admin/bidang/akhlak', function () {
    return view('admin.bidang.akhlak');
});
Route::get('admin/bidang/bahasa', function () {
    return view('admin.bidang.bahasa');
});
Route::get('admin/home/prodi/reguler', function () {
    return view('admin.home.prodi.reguler');
});
Route::get('admin/home/prodi/takhassush', function () {
    return view('admin.home.prodi.takhassush');
});
Route::get('admin/user/staff', function () {
    return view('admin.user.kontrol-staff');
});
Route::get('admin/user/ortu', function () {
    return view('admin.user.kontrol-ortu');
});

// Route Authentication

Route::get('/login-kantin', function () {
    return view('auth/login-kantin');
});
Route::get('/auth/register', function () {
    return view('auth/register');
});
Route::get('auth/login-staff', function () {
    return view('auth.login-staff');
});
Route::get('auth/login-psb', function () {
    return view('auth.login-psb');
});