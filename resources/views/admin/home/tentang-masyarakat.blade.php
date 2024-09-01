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
        <h1>Konten Tentang & Jumlah Masyarakat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</a></li>
                <li class="breadcrumb-item active">Tentang dan Masyarakat</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Edit Konten</h5>
                        <p class="mb-3">Form yang digunakan untuk Mengedit Content yang ada di gambar Visi dan Misi
                            Web Official.
                        </p>
                        {{-- <hr> --}}
                        <form action="">
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
                                                <img src="{{ asset('assets/img/logo.jpg') }}" width="150"
                                                    alt="Logo Ma'had" srcset="">
                                            </div>
                                            <input type="file" class="form-control mt-3">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="link_vidio" class="form-label">Link Video</label>
                                        <input class="form-control" id="link_vidio" name="link_vidio"
                                            value="https://youtu.be/_ZPymZavB-A?si=nduGw_8TaFjnsTTK">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="visi_mahad" class="form-label">Visi Ma'had</label>
                                        <textarea class="form-control" id="visi_mahad" name="visi_mahad" style="height: 100px">
                                            {{ $Tentang->visi_mahad }}
                                        </textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="misi_mahad" class="form-label">Misi Ma'had</label>
                                        <textarea class="form-control" id="misi_mahad" name="misi_mahad">
                                            {{ $Tentang->misi_mahad }}
                                        </textarea>
                                    </div>
                                </div>
                            </div><!-- End Card with header and footer -->

                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Konten Jumlah Masyarakat</div>
                                <div class="card-body row mt-4">
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="jumlah_santri" class="form-label">Jumlah Santri (Bentuk
                                                Nomor)</label>
                                            <input type="number" class="form-control" id="jumlah_santri"
                                                name="jumlah_santri" value="{{ $Tentang->jumlah_santri }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="jumlah_ustad" class="form-label">Jumlah Ustadz (Bentuk
                                                Nomor)</label>
                                            <input type="number" class="form-control" id="jumlah_ustad"
                                                name="jumlah_ustad" value="{{ $Tentang->jumlah_ustad }}">
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
            initializeCKEditor('#visi_mahad');
            initializeCKEditor('#misi_mahad');
        });
    </script>

</x-layout-admin>
