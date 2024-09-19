<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Kegiatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Kegiatan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title2">Edit Konten</h5>
                        <p>Form yang digunakan untuk Mengedit yang Ada Pada Kegiatan Web
                            Official.
                        </p>
                    </div>
                    <div class="card-body">

                        <div class="d-flex justify-content-end mt-3 mb-3">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Tambah Kegiatan
                            </button>
                        </div>
                        <!-- Modal tambah -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Kegiatan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.kegiatan.store') }}" method="POST"
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
                                            <!-- Input untuk nama -->
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">nama</label>
                                                <input class="form-control" type="text" id="nama"
                                                    name="nama">
                                            </div>
                                            <!-- Input untuk deskripsi kegiatan -->
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
                                            <th>Nama</th>
                                            <th>Keterangan Singkat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <?php foreach ($HomeKegiatan as $index => $item): ?>
                                        <tr>
                                            <td><?php echo $index + 1; ?></td>
                                            <td>
                                                <img src="{{ asset('assets/img/kegiatan/' . $item->gambar) }}"
                                                    width="100" alt="" class="ms-3">
                                            </td>
                                            <td>
                                                <input type="text" name="nama" class="form-control"
                                                    value="{{ $item->nama }}" readonly>
                                            </td>
                                            <td>
                                                <div class="form-control"
                                                    style="height: 100px; width: 400px; margin-right: -35px; text-align: justify;">
                                                    {!! htmlspecialchars_decode($item['deskripsi']) !!}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <!-- Button Hapus -->
                                                    <form action="{{ route('admin.kegiatan.destroy', $item->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"
                                                            title="hapus">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>

                                                    <!-- Button Edit -->
                                                    <div class="ms-2 text-center">
                                                        <button type="button" class="btn btn-warning btn-sm"
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
                                                                        Kegiatan</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('admin.kegiatan.update', $item->id) }}"
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
                                                                                <img src="{{ asset('assets/img/kegiatan/' . $item->gambar) }}"
                                                                                    alt="Gambar Kegiatan"
                                                                                    style="max-width: 100%; margin-top: 10px;">
                                                                            @endif
                                                                        </div>
                                                                        <!-- Input untuk nama -->
                                                                        <div class="mb-3">
                                                                            <label for="nama{{ $item->id }}"
                                                                                class="form-label">Nama</label>
                                                                            <input class="form-control" type="text"
                                                                                id="nama{{ $item->id }}"
                                                                                name="nama"
                                                                                value="{{ $item->nama }}" required>
                                                                        </div>
                                                                        <!-- Input untuk deskripsi kegiatan -->
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
                                        <?php endforeach; ?>
                                        <!-- Tambahkan baris lain sesuai kebutuhan -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
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


{{-- id="deskripsi-kegiatan{{$index + 1}} --}}
