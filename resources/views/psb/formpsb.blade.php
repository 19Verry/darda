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

                            <!-- Asal Sekolah, Provinsi Sekolah Asal -->
                            <div class="col-md-6">
                                <label for="Asal_Sekolah" class="form-label">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" id="Asal_Sekolah"
                                    placeholder="Asal Sekolah">
                            </div>

                            <div class="col-md-6">
                                <label for="Provinsi_Sekolah_Asal" class="form-label">Provinsi Sekolah Asal</label>
                                <input type="text" name="provinsi_sekolah_asal" class="form-control"
                                    id="Provinsi_Sekolah_Asal" placeholder="Provinsi Sekolah Asal">
                            </div>

                            <!-- Nomor HP, Email -->
                            <div class="col-md-6">
                                <label for="Nomor_HP" class="form-label">Nomor HP</label>
                                <input type="text" name="nomor_hp" class="form-control" id="Nomor_HP"
                                    placeholder="Nomor HP">
                            </div>

                            <div class="col-md-6">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="Email"
                                    placeholder="Email">
                            </div>

                            <!-- Pas Foto, Scan Ijazah, Scan KK -->
                            <div class="col-md-4">
                                <label for="Pas_Foto" class="form-label">Pas Foto</label>
                                <input type="file" name="pas_foto" class="form-control" id="Pas_Foto"
                                    accept="image/*">
                            </div>

                            <div class="col-md-4">
                                <label for="Scan_Ijazah" class="form-label">Scan Ijazah</label>
                                <input type="file" name="scan_ijazah" class="form-control" id="Scan_Ijazah"
                                    accept=".pdf, .jpg, .jpeg, .png">
                            </div>

                            <div class="col-md-4">
                                <label for="Scan_KK" class="form-label">Scan Kartu Keluarga (KK)</label>
                                <input type="file" name="scan_kk" class="form-control" id="Scan_KK"
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
