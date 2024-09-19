<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Prodi Takhassush</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Prodi</a></li>
                <li class="breadcrumb-item active">Takhassush</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Edit Konten</h5>
                        <p class="mb-3">Form yang digunakan untuk Mengedit Content yang ada di Prodi Takhassush Web
                            Official.
                        </p>

                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                            <strong>Sukses!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        @endif

                        <form action="/takhassushs/{{ $Takhassush->id }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Gambar</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar">

                                            @if($Takhassush->gambar)
                                            <div class="mt-3">
                                                <label for="video" class="form-label">Gambar Prodi Takhassush (Rasio gambar 9:16)</label>
                                                <p>Gambar saat ini:</p>
                                                <img src="{{ asset('assets/img/takhassush/' . $Takhassush->gambar) }}" alt="Gambar" class="img-fluid" style="max-height: 150px;">
                                            </div>
                                            @endif


                                            @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card with header and footer -->

                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Konten</div>
                                <div class="card-body mt-4">

                                    <div class="row mb-3">
                                        <label for="kop" class="col-sm-2 col-form-label">Kop</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kop" name="kop"
                                                value="{{ old('kop', $Takhassush->kop) }}">
                                            @error('kop')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" style="height: 100px"
                                                name="deskripsi">
                                            {{ $Takhassush->deskripsi }}
                                            </textarea>
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
                                <div class="card-header">Informasi Prodi</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="pendaftaran" class="col-sm-2 col-form-label">Pendaftaran</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="pendaftaran"
                                                name="pendaftaran"
                                                value="{{ old('pendaftaran', $Takhassush->pendaftaran) }}">
                                            @error('pendaftaran')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uang_pangkal" class="col-sm-2 col-form-label">Uang Pangkal</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uang_pangkal"
                                                name="uang_pangkal"
                                                value="{{ old('uang_pangkal', $Takhassush->uang_pangkal) }}">
                                            @error('uang_pangkal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uang_pakaian" class="col-sm-2 col-form-label">Uang Pakaian</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uang_pakaian"
                                                name="uang_pakaian"
                                                value="{{ old('uang_pakaian', $Takhassush->uang_pakaian) }}">
                                            @error('uang_pakaian')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uang_bulanan" class="col-sm-2 col-form-label">Uang Bulanan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uang_bulanan"
                                                name="uang_bulanan"
                                                value="{{ old('uang_bulanan', $Takhassush->uang_bulanan) }}">
                                            @error('uang_bulanan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uang_buku" class="col-sm-2 col-form-label">Uang Buku</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uang_buku"
                                                name="uang_buku"
                                                value="{{ old('uang_bulanan', $Takhassush->uang_buku) }}">
                                            @error('uang_buku')
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
