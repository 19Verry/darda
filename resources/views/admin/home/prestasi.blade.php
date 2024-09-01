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
                        
                        <form action="">
                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <button type="button" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Prestasi
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Prestasi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <!-- Input untuk upload gambar -->
                                                <div class="mb-3">
                                                    <label for="imageUpload" class="form-label">Upload Gambar(Rasio gambar 9:16)</label>
                                                    <input class="form-control" type="file" id="imageUpload">
                                                </div>
                                                <!-- Dropdown untuk kategori gambar -->
                                                <div class="mb-3">
                                                    <label for="judulPrestasi" class="form-label">Judul</label>
                                                    <input class="form-control" type="text" id="judulPrestasi">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="KeterangansingkatPrestasi" class="form-label">Keterangan</label>
                                                    <textarea class="form-control" id="keterangan-Prestasi" style="height: 100px"></textarea>
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
                                        @foreach ($HomePrestasi as $index => $HomePrestasis)
                                        <tbody class="align-middle">
                                            <tr>
                                                <td>{{$index + 1}}</td>
                                                <td>
                                                    <div class="image-input-wrapper">
                                                        <img src="{{ $HomePrestasis->gambar }}" width="100" alt="" class="ms-3">
                                                        <input type="file" name="gambar1" class="form-control" accept="image/*">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="judul1" class="form-control" title="{{ $HomePrestasis->judul }}" value="{{ $HomePrestasis->judul }}">
                                                </td>
                                                <td>
                                                    <textarea name="deskripsi1" class="form-control" placeholder="Masukkan deskripsi" id="deskripsi-Prestasi{{$index + 1}}">{{ $HomePrestasis->deskripsi }}</textarea>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm remove-row">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- Tambahkan baris lain sesuai kebutuhan -->
                                        </tbody>
                                        
                                        @endforeach
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
    
        document.addEventListener('DOMContentLoaded', function () {
            // Loop over all textarea elements with id pattern `deskripsi-Prestasi`
            document.querySelectorAll('textarea[id^="deskripsi-Prestasi"]').forEach((textarea) => {
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


