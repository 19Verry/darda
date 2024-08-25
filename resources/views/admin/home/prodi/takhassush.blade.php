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
                        {{-- <hr> --}}
                        <form action="">
                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Konten</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="kepalasekolah" class="col-sm-2 col-form-label">Kop</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kepalasekolah"
                                                value="Hafalan Al-Quran 30 Juz dengan Mutqin (Kokoh) Maksimal dalam 3 Tahun">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="deskripsi" style="height: 100px"> 
                                                <p>
                                                    Selamat datang di halaman resmi Program Studi Takhassush, tempat pembelajaran mendalam
                                                    di bidang ilmu agama. Kami berkomitmen untuk membentuk generasi yang hafal Al-Qur'an,
                                                    menguasai kitab-kitab, serta memiliki pemahaman yang mendalam tentang syariat Islam.
                                                </p>
                                                <p>
                                                    Dengan bimbingan para ahli, mahasiswa diharapkan mampu mengembangkan keahlian dalam
                                                    bahasa Arab, meneliti ilmu-ilmu syar'i, dan menjadi teladan bagi masyarakat.
                                                    Bergabunglah dengan kami untuk melanjutkan tradisi keilmuan yang unggul, baik di dalam
                                                    negeri maupun internasional.
                                                </p>
                                                <p>
                                                    Mari bergabung dengan Program Studi Takhassush dan temukan peluang untuk mengembangkan
                                                    pengetahuan dan keahlian dalam ilmu agama yang mendalam. Di sini, Kamu tidak hanya akan
                                                    diajarkan untuk memahami serta menghafal Alquran dan Sunnah, tetapi juga diajak untuk
                                                    menerapkan nilai-nilai tersebut dalam kehidupan sehari-hari, menjadi individu yang
                                                    berkontribusi positif bagi masyarakat. Dengan dukungan fasilitas yang lengkap dan
                                                    bimbingan dari para pengajar berpengalaman, Kamu akan dibentuk menjadi sosok yang siap
                                                    menghadapi tantangan global dengan landasan ilmu agama yang kuat.
                                                </p>
                    
                                                <p>
                                                    Jangan ragu untuk mengambil langkah pertama menuju masa depan yang cerah bersama kami.
                                                    Di Program Studi Takhassush, kami percaya bahwa setiap individu memiliki potensi luar
                                                    biasa untuk menjadi pemimpin yang berwawasan luas dan berakhlak mulia. Ambil kesempatan
                                                    ini untuk memperdalam pengetahuan, memperkuat iman, dan menjadi inspirasi bagi generasi
                                                    berikutnya. Bergabunglah sekarang dan jadilah bagian dari pembelajar yang berkomitmen
                                                    untuk menghidupkan kembali tradisi keilmuan Islam.
                                                </p>
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
                                            <input type="text" class="form-control" id="pendaftaran" value="gratis">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uangpangkal" class="col-sm-2 col-form-label">Uang Pangkal</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uangpangkal" value="gratis">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uangpakaian" class="col-sm-2 col-form-label">Uang Pakaian</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uangpakaian"
                                                value="Rp.1.600.000 (Pakaian 5 Stel)">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uangbulanan" class="col-sm-2 col-form-label">Uang Bulanan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uangbulanan"
                                                value="Rp.1.900.000">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="uangbuku" class="col-sm-2 col-form-label">Uang Buku</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="uangbuku"
                                                value="Rp.650.000 (Untuk Setahun)">
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
