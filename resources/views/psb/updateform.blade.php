<x-layout-official>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" alt="">

                <div class="carousel-container2 d-flex flex-column justify-content-center align-items-center text-center"
                    style="height: 100vh;top: 0;">
                    <h2>Ubah Data Diri</h2>
                </div><!-- End Carousel Container -->
            </div><!-- End Carousel Item -->
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Ubah Data Pendaftaran</h2>
            <div><span>Data Calon</span> <span class="description-title">Santri Baru .</span></div>
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

                        <form class="row g-3 needs-validation" action="{{ route('formpsb.store') }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf

                            <input type="hidden" name="email" value="Verry@Gmail.com">

                            <!-- Nama Lengkap dan NIK -->
                            <div class="col-md-12">
                                <label for="Nama_Lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="Nama_Lengkap" placeholder="Masukkan nama lengkap Anda" value="{{ old('nama_lengkap', $formpsb->nama_lengkap) }}">
                                @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- NISN SISWA dan Tempat Lahir -->
                            <div class="row">
                                <div class="col-md-6 mt-1">
                                    <label for="NISN_SISWA" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
                                    <input type="text" name="nisn" class="form-control" id="NISN_SISWA" placeholder="Masukkan NISN Anda" value="{{ old('nisn', $formpsb->nisn) }}">
                                    @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-1">
                                    <label for="NIK" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                                    <input type="text" name="nik" class="form-control" id="NIK" placeholder="Masukkan NIK Anda" value="{{ old('nik', $formpsb->nik) }}">
                                    @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <label for="Tempat_Lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="Tempat_Lahir" placeholder="Masukkan tempat lahir Anda" value="{{ old('tempat_lahir', $formpsb->tempat_lahir) }}">
                                @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- Tanggal Lahir -->
                            <div class="col-6 mt-1">
                                <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="Tanggal_Lahir" value="{{ old('tanggal_lahir', $formpsb->tanggal_lahir) }}">
                                @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="col-12 mt-1">
                                <label for="Alamat" class="form-label">Alamat Tempat Tinggal</label>
                                <textarea name="alamat" class="form-control" id="Alamat" placeholder="Masukkan alamat lengkap Anda">{{ old('alamat', $formpsb->alamat) }}</textarea>
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Provinsi, Kabupaten/Kota, Kecamatan, Desa/Kelurahan -->
                            <div class="row mt-1">
                                <div class="col-md-3">
                                    <label for="Provinsi" class="form-label">Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" id="Provinsi" placeholder="Masukkan provinsi tempat tinggal" value="{{ old('provinsi', $formpsb->provinsi) }}">
                                    @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="Kabupaten_Kota" class="form-label">Kabupaten/Kota</label>
                                    <input type="text" name="kabupaten_kota" class="form-control" id="Kabupaten_Kota" placeholder="Masukkan kabupaten/kota tempat tinggal" value="{{ old('kabupaten_kota', $formpsb->kabupaten_kota) }}">
                                    @error('kabupaten_kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="Kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control" id="Kecamatan" placeholder="Masukkan kecamatan tempat tinggal" value="{{ old('kecamatan', $formpsb->kecamatan) }}">
                                    @error('kecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="Desa_Kelurahan" class="form-label">Desa/Kelurahan</label>
                                    <input type="text" name="desa_kelurahan" class="form-control" id="Desa_Kelurahan" placeholder="Masukkan desa/kelurahan tempat tinggal" value="{{ old('desa_kelurahan', $formpsb->desa_kelurahan) }}">
                                    @error('desa_kelurahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Asal Sekolah dan Provinsi Sekolah Asal -->
                            <div class="row mt-1">
                                <div class="col-md-6">
                                    <label for="Asal_Sekolah" class="form-label">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" id="Asal_Sekolah" placeholder="Masukkan nama sekolah asal" value="{{ old('asal_sekolah', $formpsb->asal_sekolah) }}">
                                    @error('asal_sekolah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="Provinsi_Sekolah_Asal" class="form-label">Provinsi Sekolah Asal</label>
                                    <input type="text" name="provinsi_sekolah_asal" class="form-control" id="Provinsi_Sekolah_Asal" placeholder="Masukkan provinsi sekolah asal" value="{{ old('provinsi_sekolah_asal', $formpsb->provinsi_sekolah_asal) }}">
                                    @error('provinsi_sekolah_asal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Kabupaten/Kota Sekolah Asal dan Kecamatan Sekolah Asal -->
                            <div class="row mt-1">
                                <div class="col-md-6">
                                    <label for="Kabupaten_Kota_Sekolah_Asal" class="form-label">Kabupaten/Kota Sekolah Asal</label>
                                    <input type="text" name="kabupaten_kota_sekolah_asal" class="form-control" id="Kabupaten_Kota_Sekolah_Asal" placeholder="Masukkan kabupaten/kota sekolah asal" value="{{ old('kabupaten_kota_sekolah_asal', $formpsb->kabupaten_kota_sekolah_asal) }}">
                                    @error('kabupaten_kota_sekolah_asal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="Kecamatan_Sekolah_Asal" class="form-label">Kecamatan Sekolah Asal</label>
                                    <input type="text" name="kecamatan_sekolah_asal" class="form-control" id="Kecamatan_Sekolah_Asal" placeholder="Masukkan kecamatan sekolah asal" value="{{ old('kecamatan_sekolah_asal', $formpsb->kecamatan_sekolah_asal) }}">
                                    @error('kecamatan_sekolah_asal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Tahun Lulus -->
                            <div class="col-4">
                                <label for="Tahun_Lulus" class="form-label">Tahun Lulus</label>
                                <input type="number" name="tahun_lulus" class="form-control" id="Tahun_Lulus" placeholder="Masukkan tahun lulus sekolah" value="{{ old('tahun_lulus', $formpsb->tahun_lulus) }}">
                                @error('tahun_lulus')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Upload Ijazah -->
                            <div class="col-8">
                                <label for="Upload_Ijazah" class="form-label">Upload Ijazah</label>

                                <!-- Menampilkan gambar jika ada -->
                                @if($formpsb->upload_ijazah)
                                <img src="{{ asset('assets/img/formpsb/' . $formpsb->upload_ijazah) }}" class="img-fluid w-100 h-auto mb-2" alt="Ijazah">
                                @endif

                                <input type="file" name="upload_ijazah" class="form-control" id="Upload_Ijazah" placeholder="Pilih file ijazah untuk diunggah">
                                @error('upload_ijazah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <!-- Nama Ayah dan Pendidikan Terakhir Ayah -->
                            <div class="row mt-1">
                                <div class="col-md-6">
                                    <label for="Nama_Ayah" class="form-label">Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" id="Nama_Ayah" placeholder="Masukkan nama lengkap ayah" value="{{ old('nama_ayah', $formpsb->nama_ayah) }}">
                                    @error('nama_ayah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="Pendidikan_Terakhir_Ayah" class="form-label">Pendidikan Terakhir Ayah</label>
                                    <select name="pendidikan_ayah" class="form-select" id="Pendidikan_Terakhir_Ayah">
                                        <option value="">Pilih Pendidikan Terakhir</option>
                                        <option value="SD" {{ old('pendidikan_ayah', $formpsb->pendidikan_ayah) == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ old('pendidikan_ayah', $formpsb->pendidikan_ayah) == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ old('pendidikan_ayah', $formpsb->pendidikan_ayah) == 'SMA' ? 'selected' : '' }}>SMA</option>
                                        <option value="D1" {{ old('pendidikan_ayah', $formpsb->pendidikan_ayah) == 'D1' ? 'selected' : '' }}>D1</option>
                                        <option value="D2" {{ old('pendidikan_ayah', $formpsb->pendidikan_ayah) == 'D2' ? 'selected' : '' }}>D2</option>
                                        <option value="D3" {{ old('pendidikan_ayah', $formpsb->pendidikan_ayah) == 'D3' ? 'selected' : '' }}>D3</option>
                                        <option value="S1" {{ old('pendidikan_ayah', $formpsb->pendidikan_ayah) == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ old('pendidikan_ayah', $formpsb->pendidikan_ayah) == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3" {{ old('pendidikan_ayah', $formpsb->pendidikan_ayah) == 'S3' ? 'selected' : '' }}>S3</option>
                                    </select>
                                    @error('pendidikan_ayah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Pekerjaan Ayah dan Penghasilan Ayah/Bulan -->
                            <div class="row mt-1">
                                <div class="col-md-6">
                                    <label for="Pekerjaan_Ayah" class="form-label">Pekerjaan Ayah</label>
                                    <input type="text" name="pekerjaan_ayah" class="form-control" id="Pekerjaan_Ayah" placeholder="Masukkan pekerjaan ayah" value="{{ old('pekerjaan_ayah', $formpsb->pekerjaan_ayah) }}">
                                    @error('pekerjaan_ayah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="Penghasilan_Ayah_Bulan" class="form-label">Penghasilan Ayah/Bulan</label>
                                    <select name="penghasilan_ayah" class="form-select" id="Penghasilan_Ayah_Bulan">
                                        <option value="">Pilih Penghasilan Ayah/Bulan</option>
                                        <option value="< 1 Juta" {{ old('penghasilan_ayah', $formpsb->penghasilan_ayah) == '< 1 Juta' ? 'selected' : '' }}>
                                            < 1 Juta</option>
                                        <option value="1-2jt" {{ old('penghasilan_ayah', $formpsb->penghasilan_ayah) == '1-2jt' ? 'selected' : '' }}>1-2 Juta</option>
                                        <option value="2-3jt" {{ old('penghasilan_ayah', $formpsb->penghasilan_ayah) == '2-3jt' ? 'selected' : '' }}>2-3 Juta</option>
                                        <option value="3-4jt" {{ old('penghasilan_ayah', $formpsb->penghasilan_ayah) == '3-4jt' ? 'selected' : '' }}>3-4 Juta</option>
                                        <option value="4-5jt" {{ old('penghasilan_ayah', $formpsb->penghasilan_ayah) == '4-5jt' ? 'selected' : '' }}>4-5 Juta</option>
                                        <option value="5-10jt" {{ old('penghasilan_ayah', $formpsb->penghasilan_ayah) == '5-10jt' ? 'selected' : '' }}>5-10 Juta</option>
                                        <option value="10-20jt" {{ old('penghasilan_ayah', $formpsb->penghasilan_ayah) == '10-20jt' ? 'selected' : '' }}>10-20 Juta</option>
                                        <option value="20jt" {{ old('penghasilan_ayah', $formpsb->penghasilan_ayah) == '20jt' ? 'selected' : '' }}>Lebih dari 20 Juta</option>
                                    </select>
                                    @error('penghasilan_ayah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- No Hp/WA Ayah -->
                            <div class="col-12 mt-1">
                                <label for="No_Hp_WA_Ayah" class="form-label">No Hp/WA Ayah</label>
                                <input type="tel" name="no_hp_ayah" class="form-control" id="No_Hp_WA_Ayah" placeholder="Masukkan nomor HP/WA ayah" value="{{ old('no_hp_ayah', $formpsb->no_hp_ayah) }}">
                                @error('no_hp_ayah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Nama Ibu dan Pendidikan Terakhir Ibu -->
                            <div class="row mt-1">
                                <div class="col-md-6">
                                    <label for="Nama_Ibu" class="form-label">Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" id="Nama_Ibu" placeholder="Masukkan nama lengkap ibu" value="{{ old('nama_ibu', $formpsb->nama_ibu) }}">
                                    @error('nama_ibu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="Pendidikan_Terakhir_Ibu" class="form-label">Pendidikan Terakhir Ibu</label>
                                    <select name="pendidikan_ibu" class="form-select" id="Pendidikan_Terakhir_Ibu">
                                        <option value="">Pilih Pendidikan Terakhir</option>
                                        <option value="SD" {{ old('pendidikan_ibu', $formpsb->pendidikan_ibu) == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ old('pendidikan_ibu', $formpsb->pendidikan_ibu) == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ old('pendidikan_ibu', $formpsb->pendidikan_ibu) == 'SMA' ? 'selected' : '' }}>SMA</option>
                                        <option value="D1" {{ old('pendidikan_ibu', $formpsb->pendidikan_ibu) == 'D1' ? 'selected' : '' }}>D1</option>
                                        <option value="D2" {{ old('pendidikan_ibu', $formpsb->pendidikan_ibu) == 'D2' ? 'selected' : '' }}>D2</option>
                                        <option value="D3" {{ old('pendidikan_ibu', $formpsb->pendidikan_ibu) == 'D3' ? 'selected' : '' }}>D3</option>
                                        <option value="S1" {{ old('pendidikan_ibu', $formpsb->pendidikan_ibu) == 'S1' ? 'selected' : '' }}>S1</option>
                                        <option value="S2" {{ old('pendidikan_ibu', $formpsb->pendidikan_ibu) == 'S2' ? 'selected' : '' }}>S2</option>
                                        <option value="S3" {{ old('pendidikan_ibu', $formpsb->pendidikan_ibu) == 'S3' ? 'selected' : '' }}>S3</option>
                                    </select>
                                    @error('pendidikan_ibu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Pekerjaan Ibu dan Penghasilan Ibu/Bulan -->
                            <div class="row mt-1">
                                <div class="col-md-6">
                                    <label for="Pekerjaan_Ibu" class="form-label">Pekerjaan Ibu</label>
                                    <input type="text" name="pekerjaan_ibu" class="form-control" id="Pekerjaan_Ibu" placeholder="Masukkan pekerjaan ibu" value="{{ old('pekerjaan_ibu', $formpsb->pekerjaan_ibu) }}">
                                    @error('pekerjaan_ibu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="Penghasilan_Ibu_Bulan" class="form-label">Penghasilan Ibu/Bulan</label>
                                    <select name="penghasilan_ibu" class="form-select" id="Penghasilan_Ibu_Bulan">
                                        <option value="">Pilih Penghasilan Ibu/Bulan</option>
                                        <option value="< 1 Juta" {{ old('penghasilan_ibu', $formpsb->penghasilan_ibu) == '< 1 Juta' ? 'selected' : '' }}>
                                            < 1 Juta</option>
                                        <option value="1-2jt" {{ old('penghasilan_ibu', $formpsb->penghasilan_ibu) == '1-2jt' ? 'selected' : '' }}>1-2 Juta</option>
                                        <option value="2-3jt" {{ old('penghasilan_ibu', $formpsb->penghasilan_ibu) == '2-3jt' ? 'selected' : '' }}>2-3 Juta</option>
                                        <option value="3-4jt" {{ old('penghasilan_ibu', $formpsb->penghasilan_ibu) == '3-4jt' ? 'selected' : '' }}>3-4 Juta</option>
                                        <option value="4-5jt" {{ old('penghasilan_ibu', $formpsb->penghasilan_ibu) == '4-5jt' ? 'selected' : '' }}>4-5 Juta</option>
                                        <option value="5-10jt" {{ old('penghasilan_ibu', $formpsb->penghasilan_ibu) == '5-10jt' ? 'selected' : '' }}>5-10 Juta</option>
                                        <option value="10-20jt" {{ old('penghasilan_ibu', $formpsb->penghasilan_ibu) == '10-20jt' ? 'selected' : '' }}>10-20 Juta</option>
                                        <option value="20jt" {{ old('penghasilan_ibu', $formpsb->penghasilan_ibu) == '20jt' ? 'selected' : '' }}>Lebih dari 20 Juta</option>
                                    </select>
                                    @error('penghasilan_ibu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- No Hp/WA Ibu -->
                            <div class="col-12 mt-1">
                                <label for="No_Hp_WA_Ibu" class="form-label">No Hp/WA Ibu</label>
                                <input type="tel" name="no_hp_ibu" class="form-control" id="No_Hp_WA_Ibu" placeholder="Masukkan nomor HP/WA ibu" value="{{ old('no_hp_ibu', $formpsb->no_hp_ibu) }}">
                                @error('no_hp_ibu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Upload Rapor Kelas 5 -->
                            <div class="col-12 mt-1">
                                <label for="Upload_Rapor_Kelas_5" class="form-label">Upload Rapor Kelas 5</label>
                                <input type="file" name="upload_rapor_kelas_5" class="form-control" id="Upload_Rapor_Kelas_5" placeholder="Pilih file rapor kelas 5 untuk diunggah">
                                @error('upload_rapor_kelas_5')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- Prestasi Lain (jika ada) -->
                            <div class="col-12">
                                <label for="Prestasi_Lain" class="form-label">Prestasi Lain (jika ada)</label>
                                <textarea name="prestasi_lain" class="form-control" id="Prestasi_Lain" placeholder="Masukkan prestasi lain yang relevan">{{ old('prestasi_lain', $formpsb->prestasi_lain) }}</textarea>
                                @error('prestasi_lain')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Jumlah Hafalan Al-Quran (berapa Juz) -->
                            <div class="col-12">
                                <label for="Jumlah_Hafalan" class="form-label">Jumlah Hafalan Al-Quran</label>
                                <input type="number" name="jumlah_hafalan" class="form-control" id="Jumlah_Hafalan" placeholder="Masukkan jumlah juz hafalan Al-Quran" value="{{ old('jumlah_hafalan', $formpsb->jumlah_hafalan) }}">
                                @error('jumlah_hafalan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Prestasi di bidang Al-Quran -->
                            <div class="col-12">
                                <label for="Prestasi_AlQuran" class="form-label">Prestasi di bidang Al-Quran</label>
                                <textarea name="prestasi_alquran" class="form-control" id="Prestasi_AlQuran" placeholder="Masukkan prestasi di bidang Al-Quran">{{ old('prestasi_alquran', $formpsb->prestasi_alquran) }}</textarea>
                                @error('prestasi_alquran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Prodi yang Dipilih -->
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="prodi_dipilih" class="form-label">Jenis Program Studi</label>
                                    <select name="prodi_dipilih" class="form-select" id="prodi_dipilih">
                                        <option value="">Pilih Jenis Program Studi</option>
                                        <option value="Reguler" {{ old('prodi_dipilih', $formpsb->prodi_dipilih) == 'Reguler' ? 'selected' : '' }}>Reguler</option>
                                        <option value="Takhasuss" {{ old('prodi_dipilih', $formpsb->prodi_dipilih) == 'Takhasuss' ? 'selected' : '' }}>Takhasuss</option>
                                    </select>
                                    @error('prodi_dipilih')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Penandatangan -->
                            <div class="col-12">
                                <label for="Penandatangan" class="form-label">Nama Penandatangan</label>
                                <input type="text" name="penandatangan" class="form-control" id="Penandatangan" placeholder="Masukkan nama penandatangan" value="{{ old('penandatangan', $formpsb->penandatangan) }}">
                                @error('penandatangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Foto Ukuran 3x4 -->
                            <div class="col-4">
                                <label for="Foto_Ukuran_3x4" class="form-label">Foto Ukuran 3x4</label>
                                <input type="file" name="foto_3x4" class="form-control" id="Foto_Ukuran_3x4" placeholder="Pilih file foto ukuran 3x4 untuk diunggah">
                                @error('foto_3x4')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Upload Kartu Keluarga -->
                            <div class="col-4">
                                <label for="Upload_Kartu_Keluarga" class="form-label">Upload Kartu Keluarga</label>
                                <input type="file" name="upload_kk" class="form-control" id="Upload_Kartu_Keluarga" placeholder="Pilih file kartu keluarga untuk diunggah">
                                @error('upload_kk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- Upload Akte Kelahiran ananda -->
                            <div class="col-4">
                                <label for="Upload_Akte_Kelahiran" class="form-label">Upload Akte Kelahiran</label>
                                <input type="file" name="upload_akte" class="form-control" id="Upload_Akte_Kelahiran" placeholder="Pilih file akte kelahiran untuk diunggah">
                                @error('upload_akte')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

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
    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <!-- Footer About Section -->
                <div class="col-lg-7 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Kontak Ma'had Abu Ad Darda</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>{{$HeaderFooter->nama_jalan}}</p>
                        <p>{{$HeaderFooter->kelurahan_kecamatan_kota}}</p>
                        <p class="mt-3"><strong>Telephone:</strong> {{$HeaderFooter->no_hp}}</p>
                        <p><strong>Email:</strong> <span>{{$HeaderFooter->email}}</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="{{ $HeaderFooter->link_facebook }}" target="blank">
                            <i class="bi bi-facebook" style="color: #4267B2;"></i> <!-- Warna Facebook -->
                        </a>
                        <a href="{{ $HeaderFooter->link_instagram }}" target="blank">
                            <i class="bi bi-instagram" style="color: #C13584;"></i> <!-- Warna Instagram -->
                        </a>
                        <a href="{{ $HeaderFooter->youtube }}" target="blank">
                            <i class="bi bi-youtube" style="color: #FF0000;"></i> <!-- Warna YouTube -->
                        </a>
                    </div>

                </div>

                <!-- Footer Map Section -->
                <div class="col-lg-5 col-md-6 footer-links">
                    <a href="https://maps.app.goo.gl/NBALCBpijXnpDF2H6" class="logo d-flex align-items-center"
                        target="_blank">
                        <h4 class="sitename">Map Ma'had Abu Ad Darda</h4>
                    </a>
                    <iframe class="maps"
                        src="{{ $HeaderFooter->link_maps }}"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <footer class="container d-flex justify-content-center align-items-center mt-4 copyright">
            <div class="text-center textcopy">
                <p class="mb-0 textcopy2">© <span>Copyright</span> <strong class="px-1 sitename">Abu Darda'</strong>
                    <span>All Rights Reserved</span>
                </p>
            </div>
        </footer>


    </footer>
</x-layout-official>