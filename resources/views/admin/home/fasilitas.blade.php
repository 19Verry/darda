<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Fasilitas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Fasilitas</li>
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

                            <!-- Button trigger modal -->
                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Tambah Fasilitas
                                </button>
                            </div>
                            <!-- Modal tambah -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Fasilitas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('admin.fasilitas.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <!-- Input untuk upload gambar -->
                                                <div class="mb-3">
                                                    <label for="imageUpload" class="form-label">Upload Gambar (Rasio
                                                        gambar 16:9)</label>
                                                    <input class="form-control" type="file" id="imageUpload"
                                                        name="gambar">
                                                </div>
                                                <!-- Input untuk judul nama -->
                                                <div class="mb-3">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input class="form-control" type="text" id="nama"
                                                        name="nama">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-login">Simpan</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Button Tambah -->

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

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
                                        @foreach ($HomeFasilitas as $index => $HomeFasilitass)
                                            <tbody class="align-middle">
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        <div class="image-input-wrapper">
                                                            <img src="{{ asset('assets/img/fasilitas/' . $HomeFasilitass->gambar) }}"
                                                                style="margin-right: -130px" width="250"
                                                                alt="" class="ms-3">

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="nama" class="form-control"
                                                            value="{{ $HomeFasilitass->nama }}" readonly>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <!-- Button Hapus -->
                                                            <form
                                                                action="{{ route('admin.fasilitas.destroy', $HomeFasilitass->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-sm" type="submit"
                                                                    title="hapus">
                                                                    <i class="bi bi-trash"></i>
                                                                </button>
                                                            </form>

                                                            <!-- Button Edit -->
                                                            <a href="" class="btn btn-primary btn-sm ms-1"
                                                                title="edit">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Tambahkan baris lain sesuai kebutuhan -->
                                            </tbody>
                                        @endforeach
                                    </table>

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
