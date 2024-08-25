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
                    <p>Form yang digunakan untuk Mengedit yang Ada Pada SlideShow Web
                        Official.
                    </p>
                </div>
                    <div class="card-body">
                        
                        <form action="">
                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <button type="button" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah SlideShow
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">slideshow</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <!-- Input untuk upload gambar -->
                                                <div class="mb-3">
                                                    <label for="imageUpload" class="form-label">Upload Gambar(Rasio gambar 16:9)</label>
                                                    <input class="form-control" type="file" id="imageUpload">
                                                </div>
                                                <!-- Dropdown untuk kategori gambar -->
                                                <div class="mb-3">
                                                    <label for="judulslideshow" class="form-label">Judul</label>
                                                    <input class="form-control" type="text" id="judulslideshow">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Keterangansingkatslideshow" class="form-label">Keterangan</label>
                                                    <textarea class="form-control" id="keterangan-slideshow" style="height: 100px"></textarea>
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
                                        <tbody class="align-middle">
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="image-input-wrapper">
                                                        <img src="{{ asset('assets/img/hero-carousel/1.jpg') }}" width="100" alt="" class="ms-3">
                                                        <input type="file" name="gambar1" class="form-control" accept="image/*">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="judul1" class="form-control" placeholder="Masukkan judul">
                                                </td>
                                                <td>
                                                    <textarea name="deskripsi1" class="form-control" placeholder="Masukkan deskripsi" id="deskripsi-slideshow1"></textarea>
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
                                                        <img src="{{ asset('assets/img/hero-carousel/2.jpg') }}" width="100" alt="" class="ms-3">
                                                        <input type="file" name="gambar2" class="form-control" accept="image/*">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="judul2" class="form-control" placeholder="Masukkan judul">
                                                </td>
                                                <td>
                                                    <textarea name="deskripsi2" class="form-control" placeholder="Masukkan deskripsi" id="deskripsi-slideshow2"></textarea>
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
                                                        <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" width="100" alt="" class="ms-3">
                                                        <input type="file" name="gambar2" class="form-control" accept="image/*">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="judul2" class="form-control" placeholder="Masukkan judul">
                                                </td>
                                                <td>
                                                    <textarea name="deskripsi2" class="form-control" placeholder="Masukkan deskripsi" id="deskripsi-slideshow3"></textarea>
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
                                                        <img src="{{ asset('assets/img/hero-carousel/4.jpg') }}" width="100" alt="" class="ms-3">
                                                        <input type="file" name="gambar2" class="form-control" accept="image/*">
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="judul2" class="form-control" placeholder="Masukkan judul">
                                                </td>
                                                <td>
                                                    <textarea name="deskripsi2" class="form-control" placeholder="Masukkan deskripsi" id="deskripsi-slideshow4"></textarea>
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
    
        ClassicEditor
            .create( document.querySelector( '#deskripsi-slideshow1' ), {
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                }
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
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
    
        ClassicEditor
            .create( document.querySelector( '#deskripsi-slideshow2' ), {
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                }
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
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
    
        ClassicEditor
            .create( document.querySelector( '#deskripsi-slideshow3' ), {
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                }
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
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
    
        ClassicEditor
            .create( document.querySelector( '#deskripsi-slideshow4' ), {
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                }
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
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
    
        ClassicEditor
            .create( document.querySelector( '#keterangan-slideshow' ), {
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                }
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>
    
</x-layout-admin>


