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
                            <h2 class="mb-2">Budiyono Siregar</h2>
                            <h3>074821742</h3>
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
                                            <th scope="col"class="text-center">1</th>
                                            <th scope="col"class="text-center">2</th>
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
                                                    id="fullName" value="Budiyono Siregar">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="emailakun" class="col-md-4 col-lg-3 col-form-label">Email
                                                Akun</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="emailakun" type="email" class="form-control"
                                                    id="emailakun" value="budiyono@gmail.com">
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 mt-3 mb-3 px-2">
                                            <button class="btn btn-login" type="submit">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Pas
                                                Foto</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="assets/img/profile-img.jpg" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i
                                                            class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">No
                                                Pendaftaran</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fullName" type="text" class="form-control"
                                                    id="fullName" value="Kevin Anderson">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Tanggal
                                                Pendaftaran</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company" type="date" class="form-control"
                                                    id="company">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Nama
                                                Lengkap</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="job" type="text" class="form-control"
                                                    id="Job" value="Budiyono">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Country" class="col-md-4 col-lg-3 col-form-label">NIK
                                                Santri</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="country" type="text" class="form-control"
                                                    id="Country" value="NIK">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">NISN
                                                Santri</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control"
                                                    id="Address" value="NISN Santri">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Tempat
                                                Lahir</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control"
                                                    id="Phone" value="Pekanbaru">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Tanggal
                                                Lahir</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="date" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="about"
                                                class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="about" class="form-control" id="about" style="height: 100px">.</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email"
                                                class="col-md-4 col-lg-3 col-form-label">Provinsi</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Kabupaten /
                                                Kota</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email"
                                                class="col-md-4 col-lg-3 col-form-label">Kecamatan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Desa /
                                                Keluarahan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Asal
                                                Sekolah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Provinsi
                                                Asal Sekolah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Kabupaten /
                                                Kota Asal Sekolah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Kecamatan
                                                Asal Sekolah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Ijazah
                                                SMA Santri</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="assets/img/profile-img.jpg" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i
                                                            class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        title="Remove my profile image"><i
                                                            class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Nama
                                                Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Pendidikan
                                                Terakhir Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Pekerjaan
                                                Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Penghasilan
                                                Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">No HP/WA
                                                Ayah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Nama
                                                Ibu</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Pendidikan
                                                Terakhir Ibu</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Upload
                                                Raport Kelas 5</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="assets/img/profile-img.jpg" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i
                                                            class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        title="Remove my profile image"><i
                                                            class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Ranking
                                                Kelas 5</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="about" class="col-md-4 col-lg-3 col-form-label">Prestasi
                                                Lain (Jika Ada)</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="about" class="form-control" id="about" style="height: 100px">.</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Jumlah
                                                Hafalan Alquran (Berapa Juz)</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="about" class="col-md-4 col-lg-3 col-form-label">Prestasi di
                                                Bidang Alquran</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="about" class="form-control" id="about" style="height: 100px">.</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Prodi" class="col-md-4 col-lg-3 col-form-label">Prodi yang
                                                di Pilih</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="prodi" class="form-control" id="Prodi">
                                                    <option value="reguler">Reguler</option>
                                                    <option value="takhassuss">Takhassuss</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email"
                                                class="col-md-4 col-lg-3 col-form-label">Penandatangan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Upload
                                                Kartu Keluarga</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="assets/img/profile-img.jpg" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i
                                                            class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        title="Remove my profile image"><i
                                                            class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Upload
                                                Akte Kelahiran Anda</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="assets/img/profile-img.jpg" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm"
                                                        title="Upload new profile image"><i
                                                            class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        title="Remove my profile image"><i
                                                            class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email
                                                Aktif</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="text" class="form-control"
                                                    id="Email">
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
