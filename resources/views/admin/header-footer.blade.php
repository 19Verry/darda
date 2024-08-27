<x-layout-admin>
    <div class="pagetitle">
        <h1>Konten Header dan Footer</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Header dan Footer</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Edit Konten</h5>
                        <p class="mb-3">Form yang digunakan untuk Mengedit Content yang ada di Footer dan Header Web
                            Official.
                        </p>
                        {{-- <hr> --}}
                        <form action="">

                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Bagian Teratas Web</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama Ma'had</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama"
                                                value="Ma'had Abu Ad Darda'">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Warna slideshow web </label>
                                        <div class="col-sm-10">
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#060606" title="Choose your color">
                                          </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Warna heading web </label>
                                        <div class="col-sm-10">
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="rgba(0, 0, 0, 0.85)" title="Choose your color">
                                          </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Warna judul text </label>
                                        <div class="col-sm-10">
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#394047" title="Choose your color">
                                          </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Warna paragraph text </label>
                                        <div class="col-sm-10">
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#444444" title="Choose your color">
                                          </div>
                                    </div>
                                </div>
                            </div><!-- End Card with header and footer -->

                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Bagian Terbawah Web</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="alamat" class="col-sm-2 col-form-label">Nama Jalan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="alamat"
                                                value="Jl. Merak Sakti">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alamat" class="col-sm-2 col-form-label">Kelurahan, Kecamatan,
                                            Kota</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="alamat"
                                                value="Kelurahan Simpang Baru, Kecamatan Tampan, Pekanbaru">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nohp" class="col-sm-2 col-form-label">Nomor Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nohp"
                                                value="+62 811 752 6232">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="linkfb" class="col-sm-2 col-form-label">Link Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="linkfb"
                                                value="https://www.facebook.com/profile.php?id=100084932678568">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="linkig" class="col-sm-2 col-form-label">Link Instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="linkig"
                                                value="https://www.instagram.com/mahadtahfizhabuaddarda?igsh=MWwwbWpjMmJoeXd1NA==">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="linkyt" class="col-sm-2 col-form-label">Link Youtube</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="linkyt"
                                                value="https://www.youtube.com/@masjidjamiabudarda">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="namayayasan" class="col-sm-2 col-form-label">Lokasi Maps</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="namayayasan"
                                                value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6858105366637!2d101.3820970741607!3d0.46696709831261257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a8f875d787ef%3A0x95502175cb982467!2sMa&#39;had%20Tahfizh%20Abu%20Ad%20Darda!5e0!3m2!1sen!2sid!4v1724603134242!5m2!1sen!2sid">
                                        </div>
                                    </div>
                                    
                                    <div class="d-grid gap-2 mt-3">
                                        <button class="btn btn-login" type="submit">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </div><!-- End Card with header and footer -->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout-admin>
