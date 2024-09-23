<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

// Route Default

Route::get('/', [Controllers\HomeController::class, 'index']);

// Route Login / Auth / Role
Route::get('/login', function () {
    return view('auth/login');
})->middleware(('guest'));
Route::post('/login', [Controllers\LoginController::class, 'authenticate'])->middleware(('guest'));
Route::POST('/logout', [Controllers\LogoutController::class, 'logout'])->middleware(('auth'));
// Route::get('/login', function () {
//     return view('auth/login-staff');
// });
// Route::get('/loginStaff', function () {
//     return view(view: 'admin/dashboard');
// });

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
Route::get('/admin/home/berita', [Controllers\AdminBeritaController::class, 'index'])->middleware(('auth'));
Route::delete('/admin/home/berita/{id}', [Controllers\AdminBeritaController::class, 'destroy'])->name('admin.berita.destroy')->middleware(('auth'));
Route::post('/admin/home/berita/store', [Controllers\AdminBeritaController::class, 'store'])->name('admin.berita.store')->middleware(('auth'));
Route::put('/admin/home/berita/{id}', [Controllers\AdminBeritaController::class, 'update'])->name('admin.berita.update')->middleware(('auth'));

// pengumuman
Route::get('admin/home/pengumuman', [Controllers\AdminPengumumanController::class, 'index'])->middleware(('auth'));
Route::delete('admin/home/pengumuman/{id}', [Controllers\AdminPengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy')->middleware(('auth'));
Route::post('/admin/home/pengumuman/store', [Controllers\AdminPengumumanController::class, 'store'])->name('admin.pengumuman.store')->middleware(('auth'));
Route::put('/admin/home/pengumuman/{id}', [Controllers\AdminPengumumanController::class, 'update'])->name('admin.pengumuman.update')->middleware(('auth'));

// Form Psb admin
Route::get('/admin/formpsb', [Controllers\AdminFormPsbController::class, 'index'])->middleware(('auth'));
Route::put('/admin/formpsb/{santri:id}', [Controllers\AdminFormPsbController::class, 'update'])->middleware(('auth'));


Route::get('/formpsb/#about', function () {
    return view('psb/formpsb/#about');
});

Route::get('/finishpsb', [Controllers\FinishPsbController::class, 'index'])->name('finishpsb')->middleware(('auth'));
Route::get('/updateform', [Controllers\UpdateFormPsbController::class, 'index'])->name('finishpsb')->middleware(('auth'));

Route::post('/admin/slideshow/store', [Controllers\AdminSlideshowController::class, 'store'])->name('admin.slideshow.store')->middleware(('auth'));


Route::get('/admin', function () {
    return view('admin/dashboard');
})->middleware(('auth'));

// header-footer
Route::get('/admin/header-footer', [Controllers\AdminHeaderFooterController::class, 'index'])->middleware(('auth'));
Route::put('/headerfooters/{HeaderFooter:id}', [Controllers\AdminHeaderFooterController::class, 'update'])->middleware(('auth'));


// slideshow
Route::get('/admin/home/slideshow', [Controllers\AdminSlideshowController::class, 'index'])->middleware(('auth'));
Route::delete('/admins/{slideshow:id}', [Controllers\AdminSlideshowController::class, 'destroy'])->name('admin.slideshow.destroy')->middleware(('auth'));
Route::post('/admin/home/slideshow/store', [Controllers\AdminSlideshowController::class, 'store'])->name('admin.slideshow.store')->middleware(('auth'));
// Route::post('/admin/home/slideshow/update', [Controllers\AdminSlideshowController::class, 'update'])->name('admin.slideshow.update')->middleware(('auth'));
Route::put('/admin/home/{slideshow:id}', [Controllers\AdminSlideshowController::class, 'update'])->name('admin.slideshow.update')->middleware(('auth'));

// Rute Sejarah
Route::get('/admin/home/sejarah', [Controllers\AdminSejarahController::class, 'index'])->middleware(('auth'));
Route::put('/sejarahs/{HomeSejarah:id}', [Controllers\AdminSejarahController::class, 'update'])->middleware(('auth'));

// Rute Yayasan
Route::get('/admin/home/yayasan', [Controllers\AdminYayasanController::class, 'index'])->middleware(('auth'));
Route::put('/yayasans/{HomeYayasan:id}', [Controllers\AdminYayasanController::class, 'update'])->middleware(('auth'));

// tentang
Route::get('admin/home/tentang-masyarakat', [Controllers\AdminTentangController::class, 'index'])->middleware(('auth'));
Route::put('/tentangs/{HomeTentang:id}', [Controllers\AdminTentangController::class, 'update'])->middleware(('auth'));

// psb
Route::get('admin/home/psb', [Controllers\AdminPsbController::class, 'index'])->middleware(('auth'));
Route::put('/psbs/{HomePsb:id}', [Controllers\AdminPsbController::class, 'update'])->middleware(('auth'));

// fasilitas
Route::get('admin/home/fasilitas', [Controllers\AdminFasilitasController::class, 'index'])->middleware(('auth'));
Route::delete('admin/home/fasilitas/{id}', [Controllers\AdminFasilitasController::class, 'destroy'])->name('admin.fasilitas.destroy')->middleware(('auth'));
Route::post('/admin/home/fasilitas/store', [Controllers\AdminFasilitasController::class, 'store'])->name('admin.fasilitas.store')->middleware(('auth'));
Route::put('/admin/home/fasilitas/{id}', [Controllers\AdminFasilitasController::class, 'update'])->name('admin.fasilitas.update')->middleware(('auth'));



// kegiatan
Route::get('admin/home/kegiatan', [Controllers\AdminKegiatanController::class, 'index'])->middleware(('auth'));
Route::delete('admin/home/kegiatan/{id}', [Controllers\AdminKegiatanController::class, 'destroy'])->name('admin.kegiatan.destroy')->middleware(('auth'));
Route::post('/admin/home/kegiatan/store', [Controllers\AdminKegiatanController::class, 'store'])->name('admin.kegiatan.store')->middleware(('auth'));
Route::put('/admin/home/kegiatan/{id}', [Controllers\AdminKegiatanController::class, 'update'])->name('admin.kegiatan.update')->middleware(('auth'));


// prestasi
Route::get('admin/home/prestasi', [Controllers\AdminPrestasiController::class, 'index'])->middleware(('auth'));
Route::delete('admin/home/prestasi/{id}', [Controllers\AdminPrestasiController::class, 'destroy'])->name('admin.prestasi.destroy')->middleware(('auth'));
Route::post('/admin/home/prestasi/store', [Controllers\AdminPrestasiController::class, 'store'])->name('admin.prestasi.store')->middleware(('auth'));
Route::put('/admin/home/prestasi/{id}', [Controllers\AdminPrestasiController::class, 'update'])->name('admin.prestasi.update')->middleware(('auth'));


// Rute kurikulum SMP
Route::get('admin/bidang/kurikulum/smp', [Controllers\AdminKurikulumSmpController::class, 'index'])->middleware(('auth'));
Route::put('/smps/{KurikulumSmp:id}', [Controllers\AdminKurikulumSmpController::class, 'update'])->middleware(('auth'));

// Rute Kurikulum SMA
Route::get('/admin/bidang/kurikulum/sma', [Controllers\AdminKurikulumSmaController::class, 'index'])->middleware(('auth'));
Route::put('/smas/{KurikulumSma:id}', [Controllers\AdminKurikulumSmaController::class, 'update'])->middleware(('auth'));

// Rute Tahfidz
Route::get('/admin/bidang/tahfidz', [Controllers\AdminTahfidzController::class, 'index'])->middleware(('auth'));
Route::put('/tahfidzs/{BidangTahfidz:id}', [Controllers\AdminTahfidzController::class, 'update'])->middleware(('auth'));

// Rute Kesantrian
Route::get('admin/bidang/kesantrian', [Controllers\AdminKesantrianController::class, 'index'])->middleware(('auth'));
Route::put('/kesantrians/{BidangKesantrian:id}', [Controllers\AdminKesantrianController::class, 'update'])->middleware(('auth'));

Route::get('admin/home/prodi/reguler', [Controllers\AdminRegulerController::class, 'index'])->middleware(('auth'));
Route::put('/regulers/{ProdiReguler:id}', [Controllers\AdminRegulerController::class, 'update'])->middleware(('auth'));

Route::get('admin/home/prodi/takhassush', [Controllers\AdminTakhassushController::class, 'index'])->middleware(('auth'));
Route::put('/takhassushs/{ProdiTakhassush:id}', [Controllers\AdminTakhassushController::class, 'update'])->middleware(('auth'));

// Rute controller admin untuk staff
Route::get('/admin/user/staff', [Controllers\AdminStaffController::class, 'index'])->middleware(('auth'));
Route::post('/staffs', [App\Http\Controllers\AdminStaffController::class, 'store'])->middleware(('auth'));
Route::delete('/staffs/destroy/{id}', [Controllers\AdminStaffController::class, 'destroy'])->middleware(('auth'));



Route::get('admin/user/ortu', [Controllers\AdminOrtuController::class, 'index'])->middleware(('auth'));

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
