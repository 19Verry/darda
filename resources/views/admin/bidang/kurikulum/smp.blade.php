<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Kurikulum SMA</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Bidang</a></li>
                <li class="breadcrumb-item"><a href="index.html">Kurikulum</a></li>
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
                        {{-- <hr> --}}
                        <form action="">
                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Konten</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 100px">{{ $KurikulumSmp[0]->deskripsi }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card with header and footer -->

                            <div class="card">
                                <div class="card-header">Informasi Program SMP</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="kepalasekolah" class="col-sm-2 col-form-label">Kepala Sekolah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kepalasekolah" name="masa_kurikulum" value="{{ $KurikulumSmp[0]->kepala_kurikulum }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="masajabatan" class="col-sm-2 col-form-label">Masa Jabatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="masajabatan" name="masa_jabatan" value="{{ $KurikulumSmp[0]->masa_jabatan }}">
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
            .create( document.querySelector( '#deskripsi' ), {
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
