<x-layout-official>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" alt="">

                <div class="carousel-container2 d-flex flex-column justify-content-center align-items-center text-center"
                    style="height: 100vh;top: 0;">
                    <h2>Penerimaan Santri Baru<br>Gelombang 2<br></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <a class="cta-btn" href="{{ url('auth/login-psb') }}"
                        class="{{ request()->is('pendaftaran/loginPendaftaran') ? 'active' : 'collapsed' }}">
                        Daftar Sekarang
                    </a>
                </div><!-- End Carousel Container -->
            </div><!-- End Carousel Item -->
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Isi Data Pendaftaran</h2>
            <div><span>Data Calon</span> <span class="description-title">Santri Baru</span></div>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 d-flex justify-content-center">
                <div class="col-lg-7 content ps-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        <div class="alert alert-psb alert-success alert-dismissible fade show d-none" role="alert">
                            <strong>Berhasil!</strong> Data Calon Santri Berhasil Dikirim.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>

                        <form class="row g-3 needs-validation" action="{{ route('admin.formpsb.store') }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="email">
                            <!-- Nama Lengkap, NIK, NISN SISWA -->
                            <div class="col-md-4">
                                <label for="Nama_Lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="Nama_Lengkap"
                                    placeholder="Nama Lengkap">
                            </div>

                            <div class="col-md-4">
                                <label for="NIK" class="form-label">NIK</label>
                                <input type="text" name="nik" class="form-control" id="NIK"
                                    placeholder="NIK">
                            </div>

                            <div class="col-md-4">
                                <label for="NISN_SISWA" class="form-label">NISN SISWA</label>
                                <input type="text" name="nisn" class="form-control" id="NISN_SISWA"
                                    placeholder="NISN SISWA">
                            </div>

                            <!-- Tempat Lahir, Tanggal Lahir -->
                            <div class="col-md-6">
                                <label for="Tempat_Lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="Tempat_Lahir"
                                    placeholder="Tempat Lahir">
                            </div>

                            <div class="col-md-6">
                                <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="Tanggal_Lahir">
                            </div>

                            <!-- Alamat -->
                            <div class="col-12">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="Alamat" placeholder="Alamat"></textarea>
                            </div>

                            <!-- Provinsi, Kabupaten/Kota, Kecamatan, Desa/Kelurahan -->
                            <div class="col-md-3">
                                <label for="Provinsi" class="form-label">Provinsi</label>
                                <input type="text" name="provinsi" class="form-control" id="Provinsi"
                                    placeholder="Provinsi">
                            </div>

                            <div class="col-md-3">
                                <label for="Kabupaten_Kota" class="form-label">Kabupaten/Kota</label>
                                <input type="text" name="kabupaten_kota" class="form-control" id="Kabupaten_Kota"
                                    placeholder="Kabupaten/Kota">
                            </div>

                            <div class="col-md-3">
                                <label for="Kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" id="Kecamatan"
                                    placeholder="Kecamatan">
                            </div>

                            <div class="col-md-3">
                                <label for="Desa_Kelurahan" class="form-label">Desa/Kelurahan</label>
                                <input type="text" name="desa_kelurahan" class="form-control" id="Desa_Kelurahan"
                                    placeholder="Desa/Kelurahan">
                            </div>

                            <!-- Data Ayah -->
                            <div class="col-md-6">
                                <label for="Nama_Ayah" class="form-label">Nama Ayah</label>
                                <input type="text" name="nama_ayah" class="form-control" id="Nama_Ayah"
                                    placeholder="Nama Ayah">
                            </div>

                            <div class="col-md-6">
                                <label for="Pendidikan_Ayah" class="form-label">Pendidikan Ayah</label>
                                <input type="text" name="pendidikan_ayah" class="form-control"
                                    id="Pendidikan_Ayah" placeholder="Pendidikan Ayah">
                            </div>

                            <div class="col-md-6">
                                <label for="Pekerjaan_Ayah" class="form-label">Pekerjaan Ayah</label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" id="Pekerjaan_Ayah"
                                    placeholder="Pekerjaan Ayah">
                            </div>

                            <!-- Penghasilan Ayah -->
                            <div class="col-md-6">
                                <label for="Penghasilan_Ayah" class="form-label">Penghasilan Ayah</label>
                                <select name="penghasilan_ayah" class="form-select" id="Penghasilan_Ayah">
                                    <option value="" disabled selected>Pilih Penghasilan Ayah</option>
                                    <option value="< 1 juta">Di bawah 1 juta</option>
                                    <option value="1 - 3 juta">1 juta - 3 juta</option>
                                    <option value="3 - 5 juta">3 juta - 5 juta</option>
                                    <option value="5 - 10 juta">5 juta - 10 juta</option>
                                    <option value="> 10 juta">Lebih dari 10 juta</option>
                                </select>
                            </div>


                            <div class="col-md-6">
                                <label for="No_HP_Ayah" class="form-label">No. HP Ayah</label>
                                <input type="text" name="no_hp_ayah" class="form-control" id="No_HP_Ayah"
                                    placeholder="No. HP Ayah">
                            </div>

                            <!-- Data Ibu -->
                            <div class="col-md-6">
                                <label for="Nama_Ibu" class="form-label">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" id="Nama_Ibu"
                                    placeholder="Nama Ibu">
                            </div>

                            <div class="col-md-6">
                                <label for="Pendidikan_Ibu" class="form-label">Pendidikan Ibu</label>
                                <input type="text" name="pendidikan_ibu" class="form-control" id="Pendidikan_Ibu"
                                    placeholder="Pendidikan Ibu">
                            </div>

                            <!-- Penghasilan Ayah -->
                            <div class="col-md-6">
                                <label for="penghasilan_ibu" class="form-label">Penghasilan Ibu</label>
                                <select name="penghasilan_ibu" class="form-select" id="penghasilan_ibu">
                                    <option value="" disabled selected>Pilih Penghasilan Ayah</option>
                                    <option value="< 1 juta">Di bawah 1 juta</option>
                                    <option value="1 - 3 juta">1 juta - 3 juta</option>
                                    <option value="3 - 5 juta">3 juta - 5 juta</option>
                                    <option value="5 - 10 juta">5 juta - 10 juta</option>
                                    <option value="> 10 juta">Lebih dari 10 juta</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="No_HP_Ibu" class="form-label">No. HP Ibu</label>
                                <input type="text" name="no_hp_ibu" class="form-control" id="No_HP_Ibu"
                                    placeholder="No. HP Ibu">
                            </div>

                            <!-- Data Prestasi -->
                            <div class="col-md-6">
                                <label for="Upload_Rapor_Kelas_5" class="form-label">Upload Rapor Kelas 5</label>
                                <input type="file" name="upload_rapor_kelas_5" class="form-control"
                                    id="Upload_Rapor_Kelas_5" accept=".pdf, .jpg, .jpeg, .png">
                            </div>

                            <div class="col-md-6">
                                <label for="Prestasi_Lain" class="form-label">Prestasi Lain</label>
                                <textarea name="prestasi_lain" class="form-control" id="Prestasi_Lain" placeholder="Prestasi Lain"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="Jumlah_Hafalan" class="form-label">Jumlah Hafalan</label>
                                <input type="text" name="jumlah_hafalan" class="form-control" id="Jumlah_Hafalan"
                                    placeholder="Jumlah Hafalan">
                            </div>

                            <div class="col-md-6">
                                <label for="Prestasi_Alquran" class="form-label">Prestasi Al-Qur'an</label>
                                <textarea name="prestasi_alquran" class="form-control" id="Prestasi_Alquran" placeholder="Prestasi Al-Qur'an"></textarea>
                            </div>

                            <!-- Prodi Dipilih -->
                            <div class="col-md-6">
                                <label for="Prodi_Dipilih" class="form-label">Prodi Dipilih</label>
                                <select name="prodi_dipilih" class="form-select" id="Prodi_Dipilih">
                                    <option value="" disabled selected>Pilih Prodi</option>
                                    <option value="reguler">Reguler</option>
                                    <option value="takhasussh">Takhasussh</option>
                                </select>
                            </div>


                            <div class="col-md-6">
                                <label for="Penandatangan" class="form-label">Penandatangan</label>
                                <input type="text" name="penandatangan" class="form-control" id="Penandatangan"
                                    placeholder="Penandatangan">
                            </div>

                            <!-- Upload Foto, KK, Akte -->
                            <div class="col-md-4">
                                <label for="Foto_3x4" class="form-label">Foto 3x4</label>
                                <input type="file" name="foto_3x4" class="form-control" id="Foto_3x4"
                                    accept="image/*">
                            </div>

                            <div class="col-md-4">
                                <label for="Upload_KK" class="form-label">Upload KK</label>
                                <input type="file" name="upload_kk" class="form-control" id="Upload_KK"
                                    accept=".pdf, .jpg, .jpeg, .png">
                            </div>

                            <div class="col-md-4">
                                <label for="Upload_Akte" class="form-label">Upload Akte</label>
                                <input type="file" name="upload_akte" class="form-control" id="Upload_Akte"
                                    accept=".pdf, .jpg, .jpeg, .png">
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button class="btn btn-login w-100 btn-kirim-psb" type="submit"
                                    style="background: #394047; color: white;">Kirim</button>
                                <button class="btn btn-login w-100 d-none btn-loading-psb" type="button"
                                    style="background: #394047; color: white;" disabled>
                                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->
</x-layout-official>
