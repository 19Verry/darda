<x-layout-official>
    <!-- hero -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" alt="">

                <div class="carousel-container2 d-flex flex-column justify-content-center align-items-center text-center"
                    style="height: 100vh;top: 0px;">
                    <h2>Penerimaan Santri Baru<br>Gelombang 2<br></h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <a class="cta-btn" href={{ url('auth/login-psb') }} " class="{{ request()->is('pendaftaran/loginPendaftaran') ? 'active' : 'collapsed' }}">Daftar Sekarang</a>
                </div><!-- End Carousel Container -->
            </div><!-- End Carousel Item -->
    </section>
    <!-- /Hero Section -->
    <section id="about" class="about section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Isi Data Pendaftaran</h2>
            <div><span>Data Calon</span> <span class="description-title">Santri Baru</span></div>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 d-flex justify-content-center">
                <div class="col-lg-7 content ps-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        <form name="psb-abudarda" class="row g-3 needs-validation" action="/finishpsb">
                            <!-- No Pendaftaran -->
                            <div class="col-12">
                                <label for="No_Pendaftaran" class="form-label">No Pendaftaran</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="no_pendaftaran" class="form-control" id="No_Pendaftaran" placeholder="Masukkan No Pendaftaran">
                                </div>
                            </div>

                            <!-- Tanggal Pendaftaran -->
                            <div class="col-12">
                                <label for="Tanggal_Pendaftaran" class="form-label">Tanggal Pendaftaran</label>
                                <input type="date" name="tanggal_pendaftaran" class="form-control" id="Tanggal_Pendaftaran" placeholder="Masukkan Tanggal Pendaftaran">
                            </div>

                            <!-- Nama Lengkap -->
                            <div class="col-12">
                                <label for="Nama_Lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="Nama_Lengkap" placeholder="Masukkan Nama Lengkap">
                            </div>

                            <!-- NIK -->
                            <div class="col-12">
                                <label for="NIK" class="form-label">NIK</label>
                                <input type="text" name="nik" class="form-control" id="NIK" placeholder="Masukkan NIK">
                            </div>

                            <!-- NISN SISWA -->
                            <div class="col-12">
                                <label for="NISN_SISWA" class="form-label">NISN SISWA</label>
                                <input type="text" name="nisn" class="form-control" id="NISN_SISWA" placeholder="Masukkan NISN SISWA">
                            </div>

                            <!-- Tempat Lahir -->
                            <div class="col-12">
                                <label for="Tempat_Lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="Tempat_Lahir" placeholder="Masukkan Tempat Lahir">
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="col-12">
                                <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="Tanggal_Lahir">
                            </div>

                            <!-- Alamat -->
                            <div class="col-12">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="Alamat" placeholder="Masukkan Alamat"></textarea>
                            </div>

                            <!-- Provinsi -->
                            <div class="col-12">
                                <label for="Provinsi" class="form-label">Provinsi</label>
                                <input type="text" name="provinsi" class="form-control" id="Provinsi" placeholder="Masukkan Provinsi">
                            </div>

                            <!-- Kabupaten/Kota -->
                            <div class="col-12">
                                <label for="Kabupaten_Kota" class="form-label">Kabupaten/Kota</label>
                                <input type="text" name="kabupaten_kota" class="form-control" id="Kabupaten_Kota" placeholder="Masukkan Kabupaten/Kota">
                            </div>

                            <!-- Kecamatan -->
                            <div class="col-12">
                                <label for="Kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" id="Kecamatan" placeholder="Masukkan Kecamatan">
                            </div>

                            <!-- Desa/Kelurahan -->
                            <div class="col-12">
                                <label for="Desa_Kelurahan" class="form-label">Desa/Kelurahan</label>
                                <input type="text" name="desa_kelurahan" class="form-control" id="Desa_Kelurahan" placeholder="Masukkan Desa/Kelurahan">
                            </div>

                            <!-- Asal Sekolah -->
                            <div class="col-12">
                                <label for="Asal_Sekolah" class="form-label">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" id="Asal_Sekolah" placeholder="Masukkan Asal Sekolah">
                            </div>

                            <!-- Provinsi Sekolah Asal -->
                            <div class="col-12">
                                <label for="Provinsi_Sekolah_Asal" class="form-label">Provinsi Sekolah Asal</label>
                                <input type="text" name="provinsi_sekolah_asal" class="form-control" id="Provinsi_Sekolah_Asal" placeholder="Masukkan Provinsi Sekolah Asal">
                            </div>

                            <!-- Kabupaten/Kota Sekolah Asal -->
                            <div class="col-12">
                                <label for="Kabupaten_Kota_Sekolah_Asal" class="form-label">Kabupaten/Kota Sekolah Asal</label>
                                <input type="text" name="kabupaten_kota_sekolah_asal" class="form-control" id="Kabupaten_Kota_Sekolah_Asal" placeholder="Masukkan Kabupaten/Kota Sekolah Asal">
                            </div>

                            <!-- Kecamatan Sekolah Asal -->
                            <div class="col-12">
                                <label for="Kecamatan_Sekolah_Asal" class="form-label">Kecamatan Sekolah Asal</label>
                                <input type="text" name="kecamatan_sekolah_asal" class="form-control" id="Kecamatan_Sekolah_Asal" placeholder="Masukkan Kecamatan Sekolah Asal">
                            </div>

                            <!-- Tahun Lulus -->
                            <div class="col-12">
                                <label for="Tahun_Lulus" class="form-label">Tahun Lulus</label>
                                <input type="number" name="tahun_lulus" class="form-control" id="Tahun_Lulus" placeholder="Masukkan Tahun Lulus">
                            </div>

                            <!-- Upload IJAZAH -->
                            <div class="col-12">
                                <label for="Upload_Ijazah" class="form-label">Upload Ijazah (Link Google Drive) </label>
                                <input type="text" name="upload_ijazah" class="form-control" id= placeholder="Masukkan Link Gdrive""Upload_Ijazah">
                            </div>

                            <!-- Nama Ayah -->
                            <div class="col-12">
                                <label for="Nama_Ayah" class="form-label">Nama Ayah</label>
                                <input type="text" name="nama_ayah" class="form-control" id="Nama_Ayah" placeholder="Masukkan Nama Ayah">
                            </div>

                            <!-- Pendidikan Terakhir Ayah -->
                            <div class="col-12">
                                <label for="Pendidikan_Terakhir_Ayah" class="form-label">Pendidikan Terakhir Ayah</label>
                                <input type="text" name="pendidikan_ayah" class="form-control" id="Pendidikan_Terakhir_Ayah" placeholder="Masukkan Pendidikan Terakhir Ayah">
                            </div>

                            <!-- Pekerjaan Ayah -->
                            <div class="col-12">
                                <label for="Pekerjaan_Ayah" class="form-label">Pekerjaan Ayah</label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" id="Pekerjaan_Ayah" placeholder="Masukkan Pekerjaan Ayah">
                            </div>

                            <!-- Penghasilan Ayah/Bulan -->
                            <div class="col-12">
                                <label for="Penghasilan_Ayah_Bulan" class="form-label">Penghasilan Ayah/Bulan</label>
                                <input type="text" name="penghasilan_ayah" class="form-control" id="Penghasilan_Ayah_Bulan" placeholder="Masukkan Penghasilan Ayah/Bulan">
                            </div>

                            <!-- No Hp/WA Ayah -->
                            <div class="col-12">
                                <label for="No_Hp_WA_Ayah" class="form-label">No Hp/WA Ayah</label>
                                <input type="tel" name="no_hp_ayah" class="form-control" id="No_Hp_WA_Ayah" placeholder="Masukkan No Hp/WA Ayah">
                            </div>

                            <!-- Nama Ibu -->
                            <div class="col-12">
                                <label for="Nama_Ibu" class="form-label">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" id="Nama_Ibu" placeholder="Masukkan Nama Ibu">
                            </div>

                            <!-- Pendidikan Terakhir Ibu -->
                            <div class="col-12">
                                <label for="Pendidikan_Terakhir_Ibu" class="form-label">Pendidikan Terakhir Ibu</label>
                                <input type="text" name="pendidikan_ibu" class="form-control" id="Pendidikan_Terakhir_Ibu" placeholder="Masukkan Pendidikan Terakhir Ibu">
                            </div>

                            <!-- Pekerjaan Ibu -->
                            <div class="col-12">
                                <label for="Pekerjaan_Ibu" class="form-label">Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaan_ibu" class="form-control" id="Pekerjaan_Ibu" placeholder="Masukkan Pekerjaan Ibu">
                            </div>

                            <!-- Penghasilan Ibu/Bulan -->
                            <div class="col-12">
                                <label for="Penghasilan_Ibu_Bulan" class="form-label">Penghasilan Ibu/Bulan</label>
                                <input type="text" name="penghasilan_ibu" class="form-control" id="Penghasilan_Ibu_Bulan" placeholder="Masukkan Penghasilan Ibu/Bulan">
                            </div>

                            <!-- No Hp/WA Ibu -->
                            <div class="col-12">
                                <label for="No_Hp_WA_Ibu" class="form-label">No Hp/WA Ibu</label>
                                <input type="tel" name="no_hp_ibu" class="form-control" id="No_Hp_WA_Ibu" placeholder="Masukkan No Hp/WA Ibu">
                            </div>

                            <!-- Upload Rapor Kelas 5 -->
                            <div class="col-12">
                                <label for="Upload_Rapor_Kelas_5" class="form-label">Upload Rapor Kelas 5 (Link Google Drive) </label>
                                <input type="text" name="upload_rapor_kelas_5" class="form-control" id= placeholder="Masukkan Link Gdrive""Upload_Rapor_Kelas_5">
                            </div>

                            <!-- Rangking kls 5 -->
                            <div class="col-12">
                                <label for="Rangking_kls_5" class="form-label">Rangking Kelas 5</label>
                                <input type="number" name="rangking_kls_5" class="form-control" id="Rangking_kls_5" placeholder="Masukkan Rangking Kelas 5">
                            </div>

                            <!-- Prestasi Lain (jika ada) -->
                            <div class="col-12">
                                <label for="Prestasi_Lain" class="form-label">Prestasi Lain (jika ada)</label>
                                <textarea name="prestasi_lain" class="form-control" id="Prestasi_Lain" placeholder="Masukkan Prestasi Lain"></textarea>
                            </div>

                            <!-- Jumlah Hafalan Al-Quran yang dimiliki Calon Santri (berapa Juz) -->
                            <div class="col-12">
                                <label for="Jumlah_Hafalan" class="form-label">Jumlah Hafalan Al-Quran (berapa Juz)</label>
                                <input type="number" name="jumlah_hafalan" class="form-control" id="Jumlah_Hafalan" placeholder="Masukkan Jumlah Juz Hafalan">
                            </div>

                            <!-- Prestasi di bidang Al-Quran -->
                            <div class="col-12">
                                <label for="Prestasi_AlQuran" class="form-label">Prestasi di bidang Al-Quran</label>
                                <textarea name="prestasi_alquran" class="form-control" id="Prestasi_AlQuran"
                                    placeholder="Masukkan Prestasi di bidang Al-Quran"></textarea>
                            </div>

                            <!-- Prodi yang dipilih -->
                            <div class="col-12">
                                <label for="Prodi_yang_Dipilih" class="form-label">Prodi yang dipilih</label>
                                <input type="text" name="prodi_dipilih" class="form-control" id="Prodi_yang_Dipilih" placeholder="Masukkan Prodi yang Dipilih">
                            </div>

                            <!-- Penandatangan -->
                            <div class="col-12">
                                <label for="Penandatangan" class="form-label">Penandatangan</label>
                                <input type="text" name="penandatangan" class="form-control" id="Penandatangan" placeholder="Masukkan Nama Penandatangan">
                            </div>

                            <!-- Foto Ukuran 3x4 -->
                            <div class="col-12">
                                <label for="Foto_Ukuran_3x4" class="form-label">Foto Ukuran 3x4 (Link Google Drive) </label>
                                <input type="text" name="foto_3x4" class="form-control" id="Foto_Ukuran_3x4" placeholder="Masukkan Link Gdrive">
                            </div>

                            <!-- Upload Kartu Keluarga -->
                            <div class="col-12">
                                <label for="Upload_Kartu_Keluarga" class="form-label">Upload Kartu Keluarga (Link Google Drive) </label>
                                <input type="text" name="upload_kk" class="form-control" id="Upload_Kartu_Keluarga" placeholder="Masukkan Link Gdrive">
                            </div>

                            <!-- Upload AKTE Kelahiran ananda -->
                            <div class="col-12">
                                <label for="Upload_Akte_Kelahiran" class="form-label">Upload Akte Kelahiran ananda (Link Google Drive) </label>
                                <input type="text" name="upload_akte" class="form-control" id="Upload_Akte_Kelahiran" placeholder="Masukkan Link Gdrive">
                            </div>

                            <!-- Email Aktif -->
                            <div class="col-12">
                                <label for="Email_Aktif" class="form-label">Email Aktif</label>
                                <input type="email" name="email_aktif" class="form-control" id="Email_Aktif" placeholder="Masukkan Email Aktif">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-login w-100" type="submit" style="background: #394047; color: white;">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->
</x-layout-official>
