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

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="/headerfooters/{{ $HeaderFooter->id }}" method="POST">
                            @method('PUT')
                            @csrf
                            <!-- Card with header and footer -->
                            <div class="card">
                                <div class="card-header">Isi Bagian Teratas Web</div>
                                <div class="card-body mt-4">
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama Ma'had</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_mahad" class="form-control" id="nama_mahad"
                                                value="{{ old('nama_mahad', $HeaderFooter->nama_mahad) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Warna slideshow web
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="color" class="form-control form-control-color"
                                                id="exampleColorInput" value="#060606" title="Choose your color">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Warna heading web </label>
                                        <div class="col-sm-10">
                                            <input type="color" class="form-control form-control-color"
                                                id="exampleColorInput" value="rgba(0, 0, 0, 0.85)"
                                                title="Choose your color">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Warna judul text </label>
                                        <div class="col-sm-10">
                                            <input type="color" class="form-control form-control-color"
                                                id="exampleColorInput" value="#394047" title="Choose your color">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Warna paragraph text
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="color" class="form-control form-control-color"
                                                id="exampleColorInput" value="#444444" title="Choose your color">
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
                                            <input type="text" class="form-control" id="nama_jalan" name="nama_jalan"
                                                value="{{ old('nama_jalan', $HeaderFooter->nama_jalan) }}">

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="alamat" class="col-sm-2 col-form-label">Kelurahan, Kecamatan,
                                            Kota</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kelurahan_kecamatan_kota" name="kelurahan_kecamatan_kota"
                                            value="{{ old('kelurahan_kecamatan_kota', $HeaderFooter->kelurahan_kecamatan_kota) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nohp" class="col-sm-2 col-form-label">Nomor Telphone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nohp" name="no_hp"
                                            value="{{ old('no_hp', $HeaderFooter->no_hp) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="linkfb" class="col-sm-2 col-form-label">Link Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="link_facebook" name="link_facebook"
                                            value="{{ old('link_facebook', $HeaderFooter->link_facebook) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="linkig" class="col-sm-2 col-form-label">Link Instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="link_instagram" name="link_instagram"
                                            value="{{ old('link_instagram', $HeaderFooter->link_instagram) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="linkyt" class="col-sm-2 col-form-label">Link Youtube</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="link_youtube" name="link_youtube"
                                            value="{{ old('link_youtube', $HeaderFooter->link_youtube) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="namayayasan" class="col-sm-2 col-form-label">Link Maps</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="link_maps" name="link_maps"
                                            value="{{ old('link_maps', $HeaderFooter->link_maps) }}">
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
