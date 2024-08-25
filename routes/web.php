<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
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
Route::get('/prodi', function () {
    return view('prodi');
});
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
Route::get('/program/smp', function () {
    return view('program/smp');
});
Route::get('/program/sma', function () {
    return view('program/sma');
});
Route::get('/bidang/kurikulum/smp', function () {
    return view('bidang/kurikulum/smp');
});
Route::get('/bidang/kurikulum/sma', function () {
    return view('bidang/kurikulum/sma');
});
Route::get('/bidang/tahfidz', function () {
    return view('bidang/tahfidz');
});
Route::get('/bidang/kesantrian', function () {
    return view('bidang/kesantrian');
});
Route::get('/bidang/akhlak', function () {
    return view('bidang/akhlak');
});
Route::get('/bidang/bahasa', function () {
    return view('bidang/bahasa');
});
Route::get('/login-kantin', function () {
    return view('auth/login-kantin');
});
Route::get('/auth/register', function () {
    return view('auth/register');
});
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
Route::get('admin/program/smp', function () {
    return view('admin.program.smp');
});
Route::get('admin/program/sma', function () {
    return view('admin.program.sma');
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
Route::get('auth/login-staff', function () {
    return view('auth.login-staff');
});
Route::get('auth/login-psb', function () {
    return view('auth.login-psb');
});
