<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

// Route Default

Route::get('/', [Controllers\HomeController::class, 'index']);

// Route Login / Auth / Role
Route::get('/loginStaff', [Controllers\LoginController::class, 'loginForm'])->name('loginStaff');
Route::get('/loginStaff', [Controllers\LoginController::class, 'authenticate'])->name('loginStaff.authenticate');
Route::get('/login', function () {
    return view('auth/login-staff');
});
Route::get('/loginStaff', function () {
    return view(view: 'admin/dashboard');
});

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

// Rute Tahfidz
Route::get('/bidang/tahfidz', [Controllers\TahfidzController::class, 'index']);

Route::get('/bidang/kurikulum/smp', [Controllers\KurikulumSmpController::class, 'index']);
Route::get('/bidang/kurikulum/sma', [Controllers\KurikulumSmaController::class, 'index']);
Route::get('/bidang/kesantrian', [Controllers\KesantrianController::class, 'index']);
Route::get('profile', [Controllers\ProfileController::class, 'index']);

// Route PSB
Route::get('/psb', [Controllers\PsbController::class, 'index']);

// Route Berita
Route::get('/berita', [Controllers\BeritaController::class, 'index']);

// form psb
Route::get('/formpsb', [Controllers\PsbFormController::class, 'index']);
Route::post('/formpsb/store', [Controllers\PsbFormController::class, 'store'])->name('formpsb.store');

// UpdateFormPSB
Route::get('/updateform', [Controllers\UpdateFormPsbController::class, 'index']);
Route::put('/updateform/{santri:id}', [Controllers\UpdateFormPsbController::class, 'update']);

// berita
Route::get('/admin/home/berita', [Controllers\AdminBeritaController::class, 'index']);
Route::delete('/admin/home/berita/{id}', [Controllers\AdminBeritaController::class, 'destroy'])->name('admin.berita.destroy');
Route::post('/admin/home/berita/store', [Controllers\AdminBeritaController::class, 'store'])->name('admin.berita.store');
Route::put('/admin/home/berita/{id}', [Controllers\AdminBeritaController::class, 'update'])->name('admin.berita.update');

// pengumuman
Route::get('admin/home/pengumuman', [Controllers\AdminPengumumanController::class, 'index']);
Route::delete('admin/home/pengumuman/{id}', [Controllers\AdminPengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy');
Route::post('/admin/home/pengumuman/store', [Controllers\AdminPengumumanController::class, 'store'])->name('admin.pengumuman.store');
Route::put('/admin/home/pengumuman/{id}', [Controllers\AdminPengumumanController::class, 'update'])->name('admin.pengumuman.update');

// Form Psb admin
Route::get('/admin/formpsb', [Controllers\AdminFormPsbController::class, 'index']);
Route::put('/admin/formpsb/{santri:id}', [Controllers\AdminFormPsbController::class, 'update']);


Route::get('/formpsb/#about', function () {
    return view('psb/formpsb/#about');
});

Route::get('/finishpsb', [Controllers\FinishPsbController::class, 'index'])->name('finishpsb');
Route::get('/updateform', [Controllers\UpdateFormPsbController::class, 'index'])->name('finishpsb');

Route::post('/admin/slideshow/store', [Controllers\AdminSlideshowController::class, 'store'])->name('admin.slideshow.store');


Route::get('/admin', function () {
    return view('admin/dashboard');
});

// header-footer
Route::get('/admin/header-footer', [Controllers\AdminHeaderFooterController::class, 'index']);
Route::put('/headerfooters/{HeaderFooter:id}', [Controllers\AdminHeaderFooterController::class, 'update']);


// slideshow
Route::get('/admin/home/slideshow', [Controllers\AdminSlideshowController::class, 'index']);
Route::delete('/admins/{slideshow:id}', [Controllers\AdminSlideshowController::class, 'destroy'])->name('admin.slideshow.destroy');
Route::post('/admin/home/slideshow/store', [Controllers\AdminSlideshowController::class, 'store'])->name('admin.slideshow.store');
// Route::post('/admin/home/slideshow/update', [Controllers\AdminSlideshowController::class, 'update'])->name('admin.slideshow.update');
Route::put('/admin/home/{slideshow:id}', [Controllers\AdminSlideshowController::class, 'update'])->name('admin.slideshow.update');

// Rute Sejarah
Route::get('/admin/home/sejarah', [Controllers\AdminSejarahController::class, 'index']);
Route::put('/sejarahs/{HomeSejarah:id}', [Controllers\AdminSejarahController::class, 'update']);

// Rute Yayasan
Route::get('/admin/home/yayasan', [Controllers\AdminYayasanController::class, 'index']);
Route::put('/yayasans/{HomeYayasan:id}', [Controllers\AdminYayasanController::class, 'update']);

// tentang
Route::get('admin/home/tentang-masyarakat', [Controllers\AdminTentangController::class, 'index']);
Route::put('/tentangs/{HomeTentang:id}', [Controllers\AdminTentangController::class, 'update']);

// psb
Route::get('admin/home/psb', [Controllers\AdminPsbController::class, 'index']);
Route::put('/psbs/{HomePsb:id}', [Controllers\AdminPsbController::class, 'update']);

// fasilitas
Route::get('admin/home/fasilitas', [Controllers\AdminFasilitasController::class, 'index']);
Route::delete('admin/home/fasilitas/{id}', [Controllers\AdminFasilitasController::class, 'destroy'])->name('admin.fasilitas.destroy');
Route::post('/admin/home/fasilitas/store', [Controllers\AdminFasilitasController::class, 'store'])->name('admin.fasilitas.store');
Route::put('/admin/home/fasilitas/{id}', [Controllers\AdminFasilitasController::class, 'update'])->name('admin.fasilitas.update');



// kegiatan
Route::get('admin/home/kegiatan', [Controllers\AdminKegiatanController::class, 'index']);
Route::delete('admin/home/kegiatan/{id}', [Controllers\AdminKegiatanController::class, 'destroy'])->name('admin.kegiatan.destroy');
Route::post('/admin/home/kegiatan/store', [Controllers\AdminKegiatanController::class, 'store'])->name('admin.kegiatan.store');
Route::put('/admin/home/kegiatan/{id}', [Controllers\AdminKegiatanController::class, 'update'])->name('admin.kegiatan.update');


// prestasi
Route::get('admin/home/prestasi', [Controllers\AdminPrestasiController::class, 'index']);
Route::delete('admin/home/prestasi/{id}', [Controllers\AdminPrestasiController::class, 'destroy'])->name('admin.prestasi.destroy');
Route::post('/admin/home/prestasi/store', [Controllers\AdminPrestasiController::class, 'store'])->name('admin.prestasi.store');
Route::put('/admin/home/prestasi/{id}', [Controllers\AdminPrestasiController::class, 'update'])->name('admin.prestasi.update');


// Rute kurikulum SMP
Route::get('admin/bidang/kurikulum/smp', [Controllers\AdminKurikulumSmpController::class, 'index']);
Route::put('/smps/{KurikulumSmp:id}', [Controllers\AdminKurikulumSmpController::class, 'update']);

// Rute Kurikulum SMA
Route::get('/admin/bidang/kurikulum/sma', [Controllers\AdminKurikulumSmaController::class, 'index']);
Route::put('/smas/{KurikulumSma:id}', [Controllers\AdminKurikulumSmaController::class, 'update']);

// Rute Tahfidz
Route::get('/admin/bidang/tahfidz', [Controllers\AdminTahfidzController::class, 'index']);
Route::put('/tahfidzs/{BidangTahfidz:id}', [Controllers\AdminTahfidzController::class, 'update']);

// Rute Kesantrian
Route::get('admin/bidang/kesantrian', [Controllers\AdminKesantrianController::class, 'index']);
Route::put('/kesantrians/{BidangKesantrian:id}', [Controllers\AdminKesantrianController::class, 'update']);

Route::get('admin/home/prodi/reguler', [Controllers\AdminRegulerController::class, 'index']);
Route::put('/regulers/{ProdiReguler:id}', [Controllers\AdminRegulerController::class, 'update']);

Route::get('admin/home/prodi/takhassush', [Controllers\AdminTakhassushController::class, 'index']);
Route::put('/takhassushs/{ProdiTakhassush:id}', [Controllers\AdminTakhassushController::class, 'update']);

// Rute controller admin untuk staff
Route::get('/admin/user/staff', [Controllers\AdminStaffController::class, 'index']);
Route::post('/staffs', [App\Http\Controllers\AdminStaffController::class, 'store']);
Route::delete('/staffs/destroy/{id}', [Controllers\AdminStaffController::class, 'destroy']);



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
