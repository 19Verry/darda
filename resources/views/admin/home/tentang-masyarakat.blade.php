<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Tentang & Jumlah Masyarakat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                            Web
                            Official.
                        </p>
                        {{-- <hr> --}}
                        <form action="">
                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Konten Visi dan Misi</div>
                                <div class="card-body row mt-4">
                                    <div class="row">
                                        <label for="video" class="form-label">Tumbnail video Ma'had(Rasio gambar 9:16)</label>
                                        <div class="col-lg-3 mb-3 text-center">
                                            <div class="image-preview mt-2">
                                                <img src="{{ asset('assets/img/logo.jpg') }}" width="150"
                                                    alt="" srcset="">
                                            </div>
                                            <input type="file" class="form-control mt-3">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="linkvideo" class="form-label">Link Video</label>
                                        <input class="form-control" id="linkvideo"
                                            value="https://youtu.be/_ZPymZavB-A?si=nduGw_8TaFjnsTTK">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="visi" class="form-label">Visi Ma'had</label>
                                        <textarea class="form-control" id="visi" rows="4">Ma'had Tahfidz Abu AdDarda Pekanbaru bertujuan untuk mewujudkan para hafizh yang berkualitas dan berakhlaq mulia serta memahami ilmu Syar'i berdasarkan Al-Qur'an dan Sunnah sesuai pemahaman generasi terbaik.</textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label for="misi" class="form-label">Misi Ma'had</label>
                                        <textarea class="form-control" id="misi" rows="4">
                                            <p>Mencetak generasi penghafal Al Qur'an</p>
                                            <p>Menanamkan aqidah yang benar</p>
                                            <p>Mencetak generasi penghafal hadists</p>
                                            <p>Mencetak generasi yang menguasai bahasa arab secara aktif</p>
                                            <p>Melahirkan generasi yang mampu membaca dan memahami kitab-kitab para ulama</p>
                                            <p>Mencetak generasi yang berbakti kepada orang tua</p>
                                            <p>Menanamkan nilai-nilai akhlaq yang mulia dan berjiwa sosial</p>
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
                                            <label for="jumlah-santri" class="form-label">Jumlah Santri</label>
                                            <input type="text" class="form-control" id="jumlah-santri" value="232">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="jumlah-ustadz" class="form-label">Jumlah Ustadz</label>
                                            <input type="text" class="form-control" id="jumlah-ustadz"value="521">
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
            .create(document.querySelector('#visi'), {
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
            .create(document.querySelector('#misi'), {
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
