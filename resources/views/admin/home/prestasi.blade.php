<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Prestasi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Prestasi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title2">Edit Konten</h5>
                        <p>Form yang digunakan untuk Mengedit yang Ada Pada Prestasi Web
                            Official.
                        </p>
                    </div>
                    <div class="card-body">

                        <div class="d-flex justify-content-end mt-3 mb-3">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Tambah Prestasi
                            </button>
                        </div>
                        <!-- Modal tambah -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Prestasi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.prestasi.store') }}" method="POST"
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
                                            <!-- Input untuk judul -->
                                            <div class="mb-3">
                                                <label for="judul" class="form-label">judul</label>
                                                <input class="form-control" type="text" id="judul"
                                                    name="judul">
                                            </div>
                                            <!-- Input untuk deskripsi prestasi -->
                                            <div class="mb-3">
                                                <label for="deskripsi-tambah" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" id="deskripsi-tambah" name="deskripsi" style="height: 100px"></textarea>
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
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($HomePrestasi as $index => $item): ?>

                                        <tbody class="align-middle">
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    <div class="image-input-wrapper">
                                                        <img src="{{ asset('assets/img/prestasi/' . $item->gambar) }}"
                                                            style="margin-right: -12px" width="100" alt=""
                                                            class="ms-3">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="judul1" class="form-control"
                                                        title="{{ $item->judul }}" value="{{ $item->judul }}">
                                                </td>
                                                <td>
                                                    <div class="form-control"
                                                        style="height: 100px; width: 400px; margin-right: -115px; text-align: justify; overflow:auto">
                                                        {!! htmlspecialchars_decode($item['deskripsi']) !!}
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <!-- Button Hapus -->
                                                        <form action="{{ route('admin.prestasi.destroy', $item->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus prestasi ini?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                title="hapus">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>

                                                        <!-- Button Edit -->
                                                        <div class="ms-2 text-center">
                                                            <button type="button" class="btn btn-warning btn-sm "
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editModal{{ $item->id }}">
                                                                <i class="bi bi-pencil"></i>
                                                            </button>
                                                        </div>
                                                        <!-- Modal -->
                                                        <!-- Modal Edit -->
                                                        <div class="modal fade" id="editModal{{ $item->id }}"
                                                            tabindex="-1" aria-labelledby="editModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="editModalLabel{{ $item->id }}">Edit
                                                                            prestasi</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form
                                                                        action="{{ route('admin.prestasi.update', $item->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="modal-body">
                                                                            <!-- Input untuk upload gambar -->
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="imageUpload{{ $item->id }}"
                                                                                    class="form-label">Upload Gambar (Rasio
                                                                                    gambar 16:9)</label>
                                                                                <input class="form-control" type="file"
                                                                                    id="imageUpload{{ $item->id }}"
                                                                                    name="gambar">
                                                                                @if ($item->gambar)
                                                                                <img src="{{ asset('assets/img/prestasi/' . $item->gambar) }}"
                                                                                    alt="Gambar prestasi"
                                                                                    style="max-width: 100%; margin-top: 10px;">
                                                                                @endif
                                                                            </div>
                                                                            <!-- Input untuk judul -->
                                                                            <div class="mb-3">
                                                                                <label for="judul{{ $item->id }}"
                                                                                    class="form-label">judul</label>
                                                                                <input class="form-control" type="text"
                                                                                    id="judul{{ $item->id }}"
                                                                                    name="judul"
                                                                                    value="{{ $item->judul }}" required>
                                                                            </div>
                                                                            <!-- Input untuk deskripsi prestasi -->
                                                                            <div class="mb-3">
                                                                                <label for="deskripsi{{ $item->id }}"
                                                                                    class="form-label">Deskripsi</label>
                                                                                <textarea class="form-control" id="deskripsi{{ $item->id }}" name="deskripsi" style="height: 100px" required>{{ $item->deskripsi }}</textarea>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Tutup</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Simpan
                                                                                Perubahan</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Tambahkan baris lain sesuai kebutuhan -->
                                        </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
            }
        }
    </script>

    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } from 'ckeditor5';

        document.addEventListener('DOMContentLoaded', function() {
            // Loop over all textarea elements with id pattern deskripsi-Prestasi
            document.querySelectorAll('textarea[id^="deskripsi-tambah"]').forEach((textarea) => {
                ClassicEditor
                    .create(textarea, {
                        plugins: [Essentials, Bold, Italic, Font, Paragraph],
                        toolbar: {
                            items: [
                                'undo', 'redo', '|', 'bold', 'italic', '|',
                                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                            ]
                        }

                    })
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        });
    </script>

    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } from 'ckeditor5';

        document.addEventListener('DOMContentLoaded', function() {
            // Loop over all textarea elements with id pattern deskripsi-{id}
            document.querySelectorAll('textarea[id^="deskripsi"]').forEach((textarea) => {
                ClassicEditor
                    .create(textarea, {
                        plugins: [Essentials, Bold, Italic, Font, Paragraph],
                        toolbar: {
                            items: [
                                'undo', 'redo', '|', 'bold', 'italic', '|',
                                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                            ]
                        }
                    })
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            });
        });
    </script>


</x-layout-admin>