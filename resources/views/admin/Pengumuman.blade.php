<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Berita</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Berita</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title2">Edit Pengumuman</h5>
                        <p>Form yang digunakan untuk Mengedit yang Ada Pada Pengumuman Web Official.</p>
                    </div>
                    <div class="card-body">

                        <div class="d-flex justify-content-end mt-3 mb-3">
                            <button type="button" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah Pengumuman
                            </button>
                        </div>

                        <!-- Modal tambah pengumuman -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pengumuman</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.pengumuman.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <!-- Input untuk judul -->
                                            <div class="mb-3">
                                                <label for="judul" class="form-label">Judul Pengumuman</label>
                                                <input class="form-control" type="text" id="judul" name="judul" required>
                                            </div>
                                            <!-- Input untuk upload PDF -->
                                            <div class="mb-3">
                                                <label for="pdfUpload" class="form-label">Upload PDF</label>
                                                <input class="form-control" type="file" id="pdfUpload" name="pdf" accept=".pdf" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-login">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Tambah Pengumuman -->

                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $errors->first('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <!-- Card untuk menampilkan daftar pengumuman -->
                        <div class="card">
                            <div class="card-body mt-4">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>PDF</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody class="align-middle">
                                        @foreach ($pengumuman as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <input type="text" name="judul" class="form-control" value="{{ $item->judul }}" readonly>
                                            </td>
                                            <td>
                                                <a href="{{ asset('assets/pdf/pengumuman/' . $item->pdf) }}" target="_blank" class="btn btn-primary btn-sm">
                                                    Lihat PDF
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <!-- Button Hapus -->
                                                    <form action="{{ route('admin.pengumuman.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit" title="hapus">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>

                                                    <!-- Button Edit -->
                                                    <div class="ms-2 text-center">
                                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                    </div>

                                                    <!-- Modal Edit Pengumuman -->
                                                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Pengumuman</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="{{ route('admin.pengumuman.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <!-- Input untuk judul -->
                                                                        <div class="mb-3">
                                                                            <label for="judul{{ $item->id }}" class="form-label">Judul Pengumuman</label>
                                                                            <input class="form-control" type="text" id="judul{{ $item->id }}" name="judul" value="{{ $item->judul }}" required>
                                                                        </div>
                                                                        <!-- Input untuk upload PDF -->
                                                                        <div class="mb-3">
                                                                            <label for="pdfUpload{{ $item->id }}" class="form-label">Upload PDF</label>
                                                                            <input class="form-control" type="file" id="pdfUpload{{ $item->id }}" name="pdf" accept=".pdf">
                                                                            @if ($item->pdf)
                                                                            <a href="{{ asset('assets/pdf/pengumuman/' . $item->pdf) }}" target="_blank" class="btn btn-sm btn-primary mt-2">
                                                                                Lihat PDF
                                                                            </a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Modal Edit Pengumuman -->
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
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
            // Loop over all textarea elements with id pattern deskripsi-berita
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

</x-layout-admin>
