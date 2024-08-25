
<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten SlideShow</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">SlideShow</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-header">
                    <h5 class="card-title2">Edit Konten</h5>
                    <p>Form yang digunakan untuk Mengedit yang Ada Pada Fasilitas Web
                        Official.
                    </p>
                </div>
                    <div class="card-body">
                        
                        <form action="">
                            <!-- Button trigger modal -->
                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <button type="button" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Fasilitas
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Fasilitas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <!-- Input untuk upload gambar -->
                                                <div class="mb-3">
                                                    <label for="imageUpload" class="form-label">Upload Gambar(Rasio gambar 16:9)</label>
                                                    <input class="form-control" type="file" id="imageUpload" accept="image/*">
                                                </div>
                                                <!-- Dropdown untuk kategori gambar -->
                                                <div class="mb-3">
                                                    <label for="imageCategory" class="form-label">Pilih Fasilitas</label>
                                                    <select class="form-select" id="imageCategory" onchange="handleCategoryChange()">
                                                        <option selected>Pilih </option>
                                                        <option value="manual">Fasilitas Baru</option>
                                                        <option value="kelas">Kelas</option>
                                                        <option value="laundry">Laundry</option>
                                                    </select>
                                                </div>
                                                <!-- Input manual akan muncul jika dipilih -->
                                                <div class="mb-3" id="manualInputDiv" style="display: none;">
                                                    <label for="manualCategory" class="form-label">Masukkan Fasilitas Baru</label>
                                                    <input type="text" class="form-control" id="manualCategory" placeholder="Ketik Fasilitas...">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-login">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Button Tambah -->

                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-body mt-4">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="image-input-wrapper">
                                                        <img src="{{ asset('assets/img/fasilitas/masjid1.jpg') }}" width="100" alt="" class="ms-3">
                                                        <input type="file" name="gambar1" class="form-control" accept="image/*">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="nama" class="form-control" value="masjid">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm remove-row">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="image-input-wrapper">
                                                        <img src="{{ asset('assets/img/fasilitas/kelas1.jpg') }}" width="100" alt="" class="ms-3">
                                                        <input type="file" name="gambar2" class="form-control" accept="image/*">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="judul2" class="form-control" value="kelas">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm remove-row">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <div class="image-input-wrapper">
                                                        <img src="{{ asset('assets/img/fasilitas/asrama4.jpg') }}" width="100" alt="" class="ms-3">
                                                        <input type="file" name="gambar2" class="form-control" accept="image/*">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="judul2" class="form-control" value="asrama">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm remove-row">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <div class="image-input-wrapper">
                                                        <img src="{{ asset('assets/img/fasilitas/masjid2.jpg') }}" width="100" alt="" class="ms-3">
                                                        <input type="file" name="gambar2" class="form-control" accept="image/*">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="judul2" class="form-control" value="masjid">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm remove-row">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- Tambahkan baris lain sesuai kebutuhan -->
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

    <script>
        function handleCategoryChange() {
            const dropdown = document.getElementById('imageCategory');
            const manualInputDiv = document.getElementById('manualInputDiv');
    
            if (dropdown.value === 'manual') {
                // Tampilkan input manual jika 'Input manual...' dipilih
                manualInputDiv.style.display = 'block';
            } else {
                // Sembunyikan input manual jika opsi lain dipilih
                manualInputDiv.style.display = 'none';
            }
        }
    </script>
    
</x-layout-admin>