<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Kurikulum SMA</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Bidang</a></li>
                <li class="breadcrumb-item">Kurikulum</a></li>
                <li class="breadcrumb-item active">Kurikulum SMP</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Edit Konten</h5>
                        <p class="mb-3">Form yang digunakan untuk Mengedit Content yang ada di Kurikulum SMP Web
                            Official.
                        </p>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- <hr> --}}
                        <form action="/smps/{{ $KurikulumSmp->id }}" method="POST">
                            @method('PUT')
                            @csrf
                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Konten</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                                                style="height: 100px">{{ $KurikulumSmp->deskripsi }}</textarea>
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
                                <div class="card-header">Informasi Program SMP</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="kepala_kurikulum" class="col-sm-2 col-form-label">Kepala
                                            Sekolah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kepala_kurikulum"
                                                name="kepala_kurikulum"
                                                value="{{ old('kepala_kurikulum', $KurikulumSmp->kepala_kurikulum) }}">
                                            @error('kepala_kurikulum')
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
                                                value="{{ old('masa_jabatan', $KurikulumSmp->masa_jabatan) }}">
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
