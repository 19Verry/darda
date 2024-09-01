<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Prodi Reguler</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Prodi</a></li>
                <li class="breadcrumb-item active">Reguler</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Edit Konten</h5>
                        <p class="mb-3">Form yang digunakan untuk Mengedit Content yang ada di Prodi Reguler Web
                            Official.
                        </p>
                        {{-- <hr> --}}
                        <form action="">
                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Konten</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="kop" class="col-sm-2 col-form-label">Kop</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kop" name="kop"
                                                value="{{ $Takhassush->kop }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="deskripsi" style="height: 100px" name="deskripsi">
                                                {{ $Takhassush->deskripsi }}
                                            </textarea>
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
                                                name="pendaftaran" value="{{ $Takhassush->pendaftaran }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uang_pangkal" class="col-sm-2 col-form-label">Uang Pangkal</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uang_pangkal"
                                                name="uang_pangkal" value="{{ $Takhassush->uang_pangkal }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uang_pakaian" class="col-sm-2 col-form-label">Uang Pakaian</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uang_pakaian"
                                                name="uang_pakaian" value="{{ $Takhassush->uang_pakaian }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uang_bulanan" class="col-sm-2 col-form-label">Uang Bulanan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uang_bulanan"
                                                name="uang_bulanan" value="{{ $Takhassush->uang_bulanan }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uang_buku" class="col-sm-2 col-form-label">Uang Buku</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uang_buku" name="uang_buku"
                                                value="{{ $Takhassush->uang_buku }}">
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

        ClassicEditor
            .create(document.querySelector('#deskripsi'), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                }
            })
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>


</x-layout-admin>
