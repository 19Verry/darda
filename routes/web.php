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
Route::get('/admin/header-footer', [Controllers\AdminHeaderFooterController::class, 'index']);
Route::get('admin/home/slideshow', [Controllers\AdminSlideshowController::class, 'index']);
Route::get('admin/home/tentang-masyarakat', [Controllers\AdminTentangController::class, 'index']);
Route::get('admin/home/psb', [Controllers\AdminPsbController::class, 'index']);
Route::get('admin/home/fasilitas', [Controllers\AdminFasilitasController::class, 'index']);
Route::get('admin/home/kegiatan', [Controllers\AdminKegiatanController::class, 'index']);
Route::get('admin/home/prestasi', [Controllers\AdminKegiatanController::class, 'index']);
Route::get('admin/bidang/kurikulum/smp', [Controllers\AdminKurikulumSmpController::class, 'index']);
Route::get('admin/bidang/kurikulum/sma', [Controllers\AdminKurikulumSmaController::class, 'index']);
Route::get('admin/bidang/tahfidz', [Controllers\AdminTahfidzController::class, 'index']);
Route::get('admin/bidang/kesantrian', [Controllers\AdminKesantrianController::class, 'index']);
Route::get('admin/bidang/akhlak', [Controllers\AdminAkhlakController::class, 'index']);
Route::get('admin/bidang/bahasa', [Controllers\AdminBahasaController::class, 'index']);
Route::get('admin/home/prodi/reguler', [Controllers\AdminRegulerController::class, 'index']);
Route::get('admin/home/prodi/takhassush',[Controllers\AdminTakhassushController::class, 'index']);
Route::get('admin/user/staff', [Controllers\AdminStaffController::class, 'index']);
Route::get('admin/user/ortu', [Controllers\AdminOrtuController::class, 'index']);
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