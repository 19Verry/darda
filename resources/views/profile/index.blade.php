<x-layout-profile>
    <div class="container my-5">
        <div class="pagetitle pt-4">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="bi bi-arrow-left me-2"></i>Kembali</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <!-- Bagian Kiri: 2 kolom pendek -->
                <div class="col-xl-4">
                    <!-- Kolom Pendek 1 -->
                    <div class="card mb-3">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2 class="mb-2">{{ Auth::user()->name }}</h2>
                            <h3>{{ Auth::user()->email }}</h3>
                        </div>
                    </div>

                    <!-- Kolom Pendek 2 -->
                    <div class="card mb-3">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <table class="table table-bordered table-sm">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Seleksi Tahap</th>
                                            <th scope="col" class="text-center">I</th>
                                            <th scope="col" class="text-center">II</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Hasil Seleksi</td>
                                            <td><span class="badge bg-success">Lulus</span></td> <!-- Badge Success -->
                                            <td><span class="badge bg-danger">Tidak Lulus</span></td>
                                            <!-- Badge Danger -->
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><span class="badge bg-warning text-dark">Diproses</span></td>
                                            <!-- Badge Warning -->
                                            <td><span class="badge bg-info text-dark">Belum Terlaksana</span></td>
                                            <!-- Badge Warning -->
                                        </tr>
                                    </tbody>
                                </table>

                            </table>
                        </div>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Selamat!</strong> Calon Santri dapat mengikuti seleksi berikutnya
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Mohon maaf,</strong> saat ini Calon Santri belum bisa melanjutkan seleksi berikutnya.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>

                <!-- Bagian Kanan: Kolom panjang -->
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Akun Anda</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Data
                                        Calon Santri</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Ubah Kata Sandi Akun</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">


                                    <h5 class="card-title">Detail Data Akun</h5>

                                    <form action="" method="post">
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name
                                                Anda</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fullName" type="text" class="form-control"
                                                    id="fullName" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="emailakun" class="col-md-4 col-lg-3 col-form-label">Email
                                                Akun</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="emailakun" type="email" class="form-control"
                                                    id="emailakun" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 mt-3 mb-3 px-2">
                                            <button class="btn btn-login" type="submit">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form action="{{ route('profile.update', $profile->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Pas Foto</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ $profile->foto_3x4 ?? 'assets/img/profile-img.jpg' }}" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no_pendaftaran" class="col-md-4 col-lg-3 col-form-label">No Pendaftaran</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nik" type="text" class="form-control" id="no_pendaftaran" value="{{ $profile->nik }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="tanggal_pendaftaran" class="col-md-4 col-lg-3 col-form-label">Tanggal Pendaftaran</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="tanggal_pendaftaran" type="date" class="form-control" id="tanggal_pendaftaran" value="{{ $profile->tanggal_pendaftaran }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="nama_lengkap" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="{{ $profile->nama_lengkap }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="nisn" class="col-md-4 col-lg-3 col-form-label">NISN Santri</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nisn" type="text" class="form-control" id="nisn" value="{{ $profile->nisn }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="tempat_lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" value="{{ $profile->tempat_lahir }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="tanggal_lahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" value="{{ $profile->tanggal_lahir }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="alamat" class="form-control" id="alamat" style="height: 100px">{{ $profile->alamat }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="provinsi" class="col-md-4 col-lg-3 col-form-label">Provinsi</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="provinsi" type="text" class="form-control" id="provinsi" value="{{ $profile->provinsi }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="kabupaten_kota" class="col-md-4 col-lg-3 col-form-label">Kabupaten / Kota</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="kabupaten_kota" type="text" class="form-control" id="kabupaten_kota" value="{{ $profile->kabupaten_kota }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="kecamatan" class="col-md-4 col-lg-3 col-form-label">Kecamatan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="kecamatan" type="text" class="form-control" id="kecamatan" value="{{ $profile->kecamatan }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="desa_kelurahan" class="col-md-4 col-lg-3 col-form-label">Desa / Kelurahan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="desa_kelurahan" type="text" class="form-control" id="desa_kelurahan" value="{{ $profile->desa_kelurahan }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="asal_sekolah" class="col-md-4 col-lg-3 col-form-label">Asal Sekolah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" value="{{ $profile->asal_sekolah }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="provinsi_sekolah_asal" class="col-md-4 col-lg-3 col-form-label">Provinsi Asal Sekolah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="provinsi_sekolah_asal" type="text" class="form-control" id="provinsi_sekolah_asal" value="{{ $profile->provinsi_sekolah_asal }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="kabupaten_kota_sekolah_asal" class="col-md-4 col-lg-3 col-form-label">Kabupaten / Kota Asal Sekolah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="kabupaten_kota_sekolah_asal" type="text" class="form-control" id="kabupaten_kota_sekolah_asal" value="{{ $profile->kabupaten_kota_sekolah_asal }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="kecamatan_sekolah_asal" class="col-md-4 col-lg-3 col-form-label">Kecamatan Asal Sekolah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="kecamatan_sekolah_asal" type="text" class="form-control" id="kecamatan_sekolah_asal" value="{{ $profile->kecamatan_sekolah_asal }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="ijazah_sma" class="col-md-4 col-lg-3 col-form-label">Ijazah SMA Santri</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ $profile->ijazah_sma ?? 'assets/img/profile-img.jpg' }}" alt="Ijazah SMA">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new ijazah"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm" title="Remove ijazah"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="nama_ayah" class="col-md-4 col-lg-3 col-form-label">Nama Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nama_ayah" type="text" class="form-control" id="nama_ayah" value="{{ $profile->nama_ayah }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="pendidikan_ayah" class="col-md-4 col-lg-3 col-form-label">Pendidikan Terakhir Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="pendidikan_ayah" type="text" class="form-control" id="pendidikan_ayah" value="{{ $profile->pendidikan_ayah }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="pekerjaan_ayah" class="col-md-4 col-lg-3 col-form-label">Pekerjaan Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="pekerjaan_ayah" type="text" class="form-control" id="pekerjaan_ayah" value="{{ $profile->pekerjaan_ayah }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="penghasilan_ayah" class="col-md-4 col-lg-3 col-form-label">Penghasilan Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="penghasilan_ayah" type="text" class="form-control" id="penghasilan_ayah" value="{{ $profile->penghasilan_ayah }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="no_hp_ayah" class="col-md-4 col-lg-3 col-form-label">No HP/WA Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="no_hp_ayah" type="text" class="form-control" id="no_hp_ayah" value="{{ $profile->no_hp_ayah }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="nama_ibu" class="col-md-4 col-lg-3 col-form-label">Nama Ibu</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nama_ibu" type="text" class="form-control" id="nama_ibu" value="{{ $profile->nama_ibu }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="pendidikan_ibu" class="col-md-4 col-lg-3 col-form-label">Pendidikan Terakhir Ibu</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="pendidikan_ibu" type="text" class="form-control" id="pendidikan_ibu" value="{{ $profile->pendidikan_ibu }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="raport_kelas_5" class="col-md-4 col-lg-3 col-form-label">Upload Raport Kelas 5</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ $profile->raport_kelas_5 ?? 'assets/img/profile-img.jpg' }}" alt="Raport Kelas 5">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new raport"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm" title="Remove raport"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="prestasi_lain" class="col-md-4 col-lg-3 col-form-label">Prestasi Lain (Jika Ada)</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="prestasi_lain" class="form-control" id="prestasi_lain" style="height: 100px">{{ $profile->prestasi_lain }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="jumlah_hafalan" class="col-md-4 col-lg-3 col-form-label">Jumlah Hafalan Alquran (Berapa Juz)</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="jumlah_hafalan" type="text" class="form-control" id="jumlah_hafalan" value="{{ $profile->jumlah_hafalan }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="prestasi_alquran" class="col-md-4 col-lg-3 col-form-label">Prestasi di Bidang Alquran</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="prestasi_alquran" class="form-control" id="prestasi_alquran" style="height: 100px">{{ $profile->prestasi_alquran }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="prodi_dipilih" class="col-md-4 col-lg-3 col-form-label">prodi_dipilih yang Dipilih</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="prodi_dipilih" class="form-control" id="prodi_dipilih">
                                                    <option value="reguler" {{ old('prodi_dipilih', $profile->prodi_dipilih) === 'reguler' ? 'selected' : '' }}>Reguler</option>
                                                    <option value="takhassuss" {{ old('prodi_dipilih', $profile->prodi_dipilih) === 'takhassuss' ? 'selected' : '' }}>Takhassuss</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="Email"
                                                class="col-md-4 col-lg-3 col-form-label">Penandatangan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="penandatangan" type="text" class="form-control" id="penandatangan" value="{{ $profile->penandatangan }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="kk" class="col-md-4 col-lg-3 col-form-label">Upload Kartu Keluarga</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ $profile->upload_kk ? asset('storage/' . $profile->upload_kk) : asset('assets/img/profile-img.jpg') }}" alt="Kartu Keluarga" class="img-fluid mb-2">
                                                <div class="pt-2">
                                                    <input type="file" name="upload_kk" id="upload_kk" class="d-none" onchange="this.form.submit();">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new kartu keluarga" onclick="document.getElementById('upload_kk').click();">
                                                        <i class="bi bi-upload"></i> Upload
                                                    </a>
                                                    <a href="{{ route('profile.removeFile', ['id' => $profile->id, 'type' => 'kk']) }}" class="btn btn-danger btn-sm" title="Remove kartu keluarga" onclick="event.preventDefault(); if(confirm('Are you sure you want to remove this file?')) { document.getElementById('remove-file-form-kk').submit(); }">
                                                        <i class="bi bi-trash"></i> Remove
                                                    </a>
                                                    <form id="remove-file-form-kk" action="{{ route('profile.removeFile', ['id' => $profile->id, 'type' => 'kk']) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="akte_kelahiran" class="col-md-4 col-lg-3 col-form-label">Upload Akte Kelahiran</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{ $profile->upload_akte ? asset('storage/' . $profile->upload_akte) : asset('assets/img/profile-img.jpg') }}" alt="Akte Kelahiran" class="img-fluid">
                                                <div class="pt-2">
                                                    <input type="file" name="upload_akte" id="upload_akte" class="d-none" onchange="this.form.submit();">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new akte" onclick="document.getElementById('upload_akte').click();">
                                                        <i class="bi bi-upload"></i>
                                                    </a>
                                                    <a href="{{ route('profile.removeFile', ['id' => $profile->id, 'type' => 'akte']) }}" class="btn btn-danger btn-sm" title="Remove akte" onclick="return confirm('Are you sure you want to remove this file?');">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email
                                                Aktif</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control" id="email" value="{{ $profile->email }}">
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 mt-3 mb-3 px-2">
                                            <button class="btn btn-login" type="submit">Simpan Perubahan</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>
                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="currentPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Masukkan
                                                Password Lama
                                                Anda</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Masukkan
                                                Password Baru</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Masukkan
                                                Ulang Password
                                                Baru</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 mt-3 mb-3 px-2">
                                            <button class="btn btn-login" type="submit">Simpan Perubahan</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</x-layout-profile>