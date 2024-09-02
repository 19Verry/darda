<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Akhlak</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Bidang</a></li>
                <li class="breadcrumb-item active">Akhlak</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Edit Konten</h5>
                        <p class="mb-3">Form yang digunakan untuk Mengedit Content yang ada di Bidang Akhlak Web
                            Official.</p>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="/akhlaks/{{ $BidangAkhlak->id }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="card">
                                <div class="card-header">Isi Konten</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                                                style="height: 100px">{{ $BidangAkhlak->deskripsi }}</textarea>
                                            @error('deskripsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card with header and footer -->

                            <div class="card">
                                <div class="card-header">Informasi Program SMA</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="kepala_akhlak" class="col-sm-2 col-form-label">Kepala
                                            Sekolah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kepala_akhlak"
                                                name="kepala_akhlak"
                                                value="{{ old('kepala_akhlak', $BidangAkhlak->kepala_akhlak) }}">
                                            @error('kepala_akhlak')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="masa_jabatan" class="col-sm-2 col-form-label">Masa Jabatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="masa_jabatan"
                                                name="masa_jabatan"
                                                value="{{ old('masa_jabatan', $BidangAkhlak->masa_jabatan) }}">
                                            @error('masa_jabatan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid gap-2 mt-3 mb-3 px-2">
                                    <button class="btn btn-login" type="submit">Simpan Perubahan</button>
                                </div>
                            </div><!-- End Card with header and footer -->
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

        // Function to initialize CKEditor
        function initializeEditor(selector) {
            const element = document.querySelector(selector);
            if (element) {
                ClassicEditor
                    .create(element, {
                        plugins: [Essentials, Bold, Italic, Font, Paragraph],
                        toolbar: {
                            items: [
                                'undo', 'redo', '|', 'bold', 'italic', '|',
                                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                            ]
                        }
                    })
                    .then(editor => {
                        console.log(`CKEditor initialized on ${selector}`, editor);
                    })
                    .catch(error => {
                        console.error(`There was a problem initializing CKEditor on ${selector}:`, error);
                    });
            } else {
                console.warn(`Element with selector ${selector} not found.`);
            }
        }

        // Initialize the editor after the DOM has fully loaded
        document.addEventListener('DOMContentLoaded', () => {
            initializeEditor('#deskripsi');
        });
    </script>
</x-layout-admin>
