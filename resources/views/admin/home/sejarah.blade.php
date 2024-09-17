<x-layout-admin>
    <style>
        /* Untuk browser WebKit seperti Chrome, Safari */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Untuk browser Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        /* Untuk browser Edge */
        input[type=number]::-ms-clear,
        input[type=number]::-ms-reveal {
            display: none;
            width: 0;
            height: 0;
        }
    </style>
    <div class="pagetitle">
        <h1>Konten Tentang Sejarah Ma'had</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</a></li>
                <li class="breadcrumb-item active">Sejarah Ma'had</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Edit Konten</h5>
                        <p class="mb-3">Form yang digunakan untuk Mengedit Content yang ada di Bagian Sejarah Ma'had
                            Web Official.
                        </p>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="/sejarahs/{{ $Sejarah->id }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Konten Visi dan Misi</div>
                                <div class="card-body row mt-4">
                                    <div class="row">
                                        <label for="video" class="form-label">Tumbnail video Ma'had (Rasio gambar
                                            9:16)</label>
                                        <div class="col-lg-3 mb-3 text-center">
                                            <div class="image-preview mt-2">
                                                <img src="{{ asset('assets/img/sejarah/' . $Sejarah->gambar) }}"
                                                    width="150" alt="Thumbnail video">
                                            </div>
                                            <input type="file" name="gambar" class="form-control mt-3">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="link_video" class="form-label">Link Video</label>
                                        <input class="form-control" id="link_video" name="link_video"
                                            value=" {{ old('link_video', $Sejarah->link_video) }}">
                                        @error('link_video')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="judul_deskripsi" class="form-label">Judul Bagian Pertama</label>
                                        <input type="text" class="form-control" id="judul_deskripsi"
                                            name="judul_deskripsi"
                                            value="{{ old('judul_deskripsi', $Sejarah->judul_deskripsi) }}">
                                        @error('judul_deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="deskripsi" class="form-label">Isi Bagian Pertama</label>
                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                                            style="height: 100px">
                                            {{ $Sejarah->deskripsi }}
                                        </textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="judul_timeline" class="form-label">Judul Bagian Kedua</label>
                                        <input type="text" class="form-control" id="judul_timeline"
                                            name="judul_timeline"
                                            value="{{ old('judul_timeline', $Sejarah->judul_timeline) }}">
                                        @error('judul_timeline')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="timeline" class="form-label">Isi Bagian Kedua</label>
                                        <textarea class="form-control @error('timeline') is-invalid @enderror" id="timeline" name="timeline"
                                            style="height: 100px">
                                            {{ $Sejarah->timeline }}
                                        </textarea>
                                        @error('timeline')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mt-1 mb-3 px-2">
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
        function initializeCKEditor(selector) {
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
                        console.error(`Error initializing CKEditor on ${selector}:`, error);
                    });
            } else {
                console.warn(`Element with selector ${selector} not found.`);
            }
        }

        // Initialize editors after DOM has loaded
        document.addEventListener('DOMContentLoaded', () => {
            initializeCKEditor('#deskripsi');
            initializeCKEditor('#timeline');
        });
    </script>

</x-layout-admin>
