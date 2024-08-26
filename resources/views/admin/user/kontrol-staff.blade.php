<x-layout-admin>
    <div class="pagetitle">
        <h1>Kelola Staff </h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title2">Table Staff untuk Mengedit Konten Website Official </h5>
                        <p>Sebagai Super Admin, anda bisa membuat staff baru, staff baru tersebut hanya bisa mengedit
                            konten
                            sesuai yang anda pillihkan untuk mereka
                        </p>
                    </div>
                    <div class="card-body">

                        <form action="">
                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Tambah Staff
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <!-- Input untuk upload gambar -->
                                                <div class="mb-3">
                                                    <label for="imageUpload" class="form-label">Username</label>
                                                    <input class="form-control" type="text" id="imageUpload"
                                                        placeholder="Masukkan Kata Sandi">
                                                </div>
                                                <!-- Dropdown untuk kategori gambar -->
                                                <div class="mb-3">
                                                    <label for="judulslideshow" class="form-label">Password</label>
                                                    <input class="form-control" type="password" id="judulslideshow"
                                                        placeholder="Masukkan Password">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="judulslideshow" class="form-label">Konfirmasi
                                                        Password</label>
                                                    <input class="form-control" type="password" id="judulslideshow"
                                                        placeholder="Ketik Password Kembali">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kontenEdit" class="form-label">Konten apa saja yang bisa
                                                        diedit?</label>
                                                    <div id="kontenEdit">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="prodi" name="konten[]" value="prodi">
                                                            <label class="form-check-label" for="prodi">Prodi</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="program" name="konten[]" value="program">
                                                            <label class="form-check-label"
                                                                for="program">Program</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="kurikulum" name="konten[]" value="kurikulum">
                                                            <label class="form-check-label"
                                                                for="kurikulum">Kurikulum</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="tahfidz" name="konten[]" value="tahfidz">
                                                            <label class="form-check-label"
                                                                for="tahfidz">Tahfidz</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="kesantrian" name="konten[]" value="kesantrian">
                                                            <label class="form-check-label"
                                                                for="kesantrian">Kesantrian</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="akhlak" name="konten[]" value="akhlak">
                                                            <label class="form-check-label"
                                                                for="akhlak">Akhlak</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="bahasa" name="konten[]" value="bahasa">
                                                            <label class="form-check-label"
                                                                for="bahasa">Bahasa</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-login">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-body mt-4">
                                    <table class="table table-sm table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Username</th>
                                                <th colspan="7">Edit Konten</th>
                                                <th rowspan="2">Aksi</th>
                                            </tr>
                                            <tr>
                                                <th>Prodi</th>
                                                <th>Program</th>
                                                <th>Kurikulum</th>
                                                <th>Tahfidz</th>
                                                <th>Kesantrian</th>
                                                <th>Akhlak</th>
                                                <th>Bahasa</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">
                                            <tr>
                                                <td>1</td>
                                                <td>tahfidz123@abudarda.com</td>
                                                <td>Bisa</td>
                                                <td>Tidak</td>
                                                <td>Tidak</td>
                                                <td>Bisa</td>
                                                <td>Tidak</td>
                                                <td>Bisa</td>
                                                <td>Bisa</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm remove-row">
                                                        <i class="bi bi-pen"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm remove-row">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="d-grid gap-2 mt-3 mb-3 px-2">
                                    <button class="btn btn-login" type="submit">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout-admin>
