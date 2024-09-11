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
                                    @foreach ($HomeKegiatan as $index => $HomeKegiatans)
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>
                                                <div class="image-input-wrapper">
                                                    <img src="{{ asset('assets/img/kegiatan/' . $HomeKegiatans->gambar) }}"
                                                        style="margin-right: -15px" width="150" alt=""
                                                        class="ms-3">
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="nama" class="form-control"
                                                    title="{{ $HomeKegiatans->nama }}" readonly
                                                    value="{{ $HomeKegiatans->nama }}">
                                            </td>
                                            <td>
                                                <div class="form-control"
                                                    style="height: 100px; width: 400px; margin-right: -35px; text-align: justify;">
                                                    {!! htmlspecialchars_decode($HomeKegiatans['deskripsi']) !!}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <!-- Button Hapus -->
                                                    <form
                                                        action="{{ route('admin.kegiatan.destroy', $HomeKegiatans->id) }}"
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
                                                    <div class="container text-center mt-5">
                                                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#editModal">
                                                            Edit
                                                        </button>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel">Edit Content</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="editForm">
                                                                        <div class="mb-3">
                                                                            <label for="imageInput" class="form-label">Gambar</label>
                                                                            <div class="image-preview mt-2">
                                                                                <img src="" width="150" alt="Logo Ma'had">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="titleInput" class="form-label">Nama</label>
                                                                            <input type="text" class="form-control" id="titleInput" placeholder="Masukkan judul baru">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="descriptionInput" class="form-label">Keterangan Singkat</label>
                                                                            <textarea class="form-control" id="descriptionInput" rows="3" placeholder="Masukkan deskripsi baru"></textarea>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
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
            // Loop over all textarea elements with id pattern `deskripsi-Prestasi`
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


{{-- id="deskripsi-kegiatan{{$index + 1}} --}}