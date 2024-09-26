<x-layout-official>
    <!-- hero -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <?php foreach ($slideshow as $index => $item): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <img src="{{ asset('assets/img/hero-carousel/' . $item->gambar) }}" class="img-fluid w-100 h-100"
                    alt="">
                <div class="carousel-container">
                    <h2>{{ $item->judul }}<br></h2>
                    <p><?= htmlspecialchars_decode($item['deskripsi']) ?></p>
                    {{-- <a href="#about" class="btn-get-started">Read More</a> --}}
                </div>
            </div><!-- End Carousel Item -->
            <?php endforeach; ?>


            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section>
    <!-- /Hero Section -->

    <!-- Berita -->
    <section id="berita" class="berita section" style="padding-bottom: 0px;">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div><span>Berita</span> <span class="description-title">Ma'had Abu Ad Darda'</span></div>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row">
                <!-- Bagian Kiri (Berita) -->
                <!-- Bagian Kiri (Berita) -->
                <div class="col-lg-8 col-md-6 col-sm-12"style="padding-right: 40px;">
                    <div class="row">
                        @if (count($berita) > 2)
                            <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel"
                                data-bs-interval="4000">
                                <div class="carousel-inner">
                                    @foreach ($berita->chunk(3) as $index => $chunk)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                            <div class="row">
                                                @foreach ($chunk as $beritas)
                                                    <div class="col-6 col-md-4 mb-4">
                                                        <!-- Card Style for News -->
                                                        <div class="card border-0 shadow-sm h-100" data-aos="fade-up"
                                                            data-aos-delay="100">
                                                            <img src="{{ asset('assets/img/berita/' . $beritas->gambar) }}"
                                                                class="card-img-top img-fluid"
                                                                alt="{{ $beritas->judul }}"
                                                                style="height: 200px; object-fit: cover;">
                                                            <div class="card-body">
                                                                <h4 class="card-title text-start">{{ $beritas->judul }}
                                                                </h4>
                                                                <p class="card-text text-start"
                                                                    style="text-align: justify;">{!! htmlspecialchars_decode($beritas['deskripsi']) !!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Carousel Controls -->
                                <button class="carousel-control-prev" style="filter: invert(1); margin-left: -70px"
                                    type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Sebelumnya</span>
                                </button>
                                <button class="carousel-control-next" style="filter: invert(1); margin-right: -70px"
                                    type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Berikutnya</span>
                                </button>
                            </div>
                        @else
                            <div class="row">
                                @foreach ($berita as $beritas)
                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card border-0 shadow-sm h-100" data-aos="fade-up"
                                            data-aos-delay="100">
                                            <img src="{{ asset('assets/img/berita/' . $beritas->gambar) }}"
                                                class="card-img-top img-fluid" alt="{{ $beritas->judul }}"
                                                style="height: 200px; object-fit: cover;">
                                            <div class="card-body">
                                                <h4 class="card-title text-start">{{ $beritas->judul }}</h4>
                                                <p class="card-text text-start" style="text-align: justify;">
                                                    {!! htmlspecialchars_decode($beritas['deskripsi']) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Bagian Kanan (Pengumuman) -->
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4 mt-md-0">
                    <div class="card border-0 shadow-sm" style="background-color: #ffffff;">
                        <div class="card-header" style="background-color: #394047; color: #ffffff;">
                            <h4
                                style="font-weight: bold; color: #ffffff; border-bottom: 2px solid #b3c8cf; display: inline-block; padding-bottom: 5px;">
                                <i class="bi bi-clipboard-fill"></i> Pengumuman
                            </h4>
                        </div>

                        <div class="card-body">
                            <!-- Daftar Pengumuman -->
                            <ul class="list-group list-group-flush">
                                @foreach ($pengumuman as $item)
                                    <li class="list-group-item d-flex align-items-center"
                                        style="background-color: #ffffff; color: #394047;">
                                        <i class="bi bi-folder2-open" style="color: #b3c8cf;"></i>
                                        <a href="{{ asset('assets/pdf/pengumuman/' . $item->pdf) }}" target="_blank"
                                            class="ms-2 text-decoration-none"
                                            style="color: #394047; font-weight: bold;">
                                            {{ $item->judul }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Berita -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Tentang Ma'had</h2>
            <div><span>Visi</span> & <span class="description-title">Misi</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/tentang/' . $tentang->gambar) }}" class="img-fluid w-100 h-100"
                        alt="">
                    <a href="{{ $tentang->link_vidio }}" class="glightbox pulsating-play-btn"></a>
                </div>

                <div class="col-lg-7  content ps-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <h3>Visi Ma'had</h3>
                    <p>
                        <?= htmlspecialchars_decode($tentang['visi_mahad']) ?>
                    </p>
                    <ul class="mt-5">
                        <li>
                            <h3>Misi Ma'had</h3>
                        </li>
                        <?= htmlspecialchars_decode($tentang['misi_mahad']) ?>


                    </ul>
                </div>

            </div>

        </div>

    </section>
    <!-- /About Section -->


    {{-- Section Sejarah --}}
    <section id="sejarah" class="about section">

        <div class="container section-title" data-aos="fade-up">
            <div><span>Sejarah</span> <span class="description-title">Ma'had</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-7  content ps-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <h3>{{ $sejarah->judul_deskripsi }}</h3>
                    <p>
                        <?= htmlspecialchars_decode($sejarah['deskripsi']) ?>
                    </p>
                    <ul class="mt-3">
                        <li>
                            <h3>{{ $sejarah->judul_timeline }}</h3>
                        </li>

                        <p><?= htmlspecialchars_decode($sejarah['timeline']) ?></p>

                    </ul>
                </div>
                <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/sejarah/' . $sejarah->gambar) }}" class="img-fluid w-100 h-100"
                        alt="">
                    <a href="{{ $sejarah->link_video }}" class="glightbox pulsating-play-btn"></a>
                </div>

            </div>

        </div>

    </section>

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">
        <div class="container section-title" data-aos="fade-up">
            <div><span>Populasi</span> <span class="description-title">Akademis</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-center"> <!-- Add justify-content-center here -->
                <div class="col-lg-3 col-md-3 col-6 d-flex justify-content-center">
                    <!-- Add col-6 and d-flex justify-content-center -->
                    <div class="stats-item text-center"> <!-- Add text-center -->
                        <i class="bi bi-calendar"></i>
                        <span data-purecounter-start="0" data-purecounter-end=" {{ $tentang->tahun_ajaran }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><span>Tahun: </span><strong>Ajaran</strong></p>
                    </div>
                </div><!-- End Stats Item -->
            </div>

            <div class="row justify-content-center"> <!-- Add justify-content-center here -->
                <div class="col-lg-3 col-md-3 col-6 d-flex justify-content-center">
                    <!-- Add col-6 and d-flex justify-content-center -->
                    <div class="stats-item text-center"> <!-- Add text-center -->
                        <i class="bi bi-person"></i>
                        <span data-purecounter-start="0" data-purecounter-end=" {{ $tentang->jumlah_ustad }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><span>Total: </span><strong>Asatidzah</strong></p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-3 col-6 d-flex justify-content-center">
                    <!-- Add col-6 and d-flex justify-content-center -->
                    <div class="stats-item text-center"> <!-- Add text-center -->
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $tentang->jumlah_santri }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><span>Total: </span><strong>Santri</strong></p>
                    </div>
                </div><!-- End Stats Item -->
            </div>
        </div>
    </section><!-- /Stats Section -->



    <!-- Services Section -->
    <section id="prodi" class="prodi section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Prodi</h2>
            <div><span>Prodi</span> <span class="description-title">Pendidikan</span></div>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4 justify-content-center text-center">
                <div class="col-12 col-lg-4 col-md-6 service-item d-flex flex-column align-items-center kesatu"
                    data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="icon flex-shrink-0"><i class="bi bi-backpack2 khusus"></i></div>
                        <h4 class="title">Prodi Takhassush</h4>
                        <a href="{{ url('prodi') }}?tab=Takhassush"
                            class="readmore stretched-link"><span>Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-12 col-lg-4 col-md-6 service-item d-flex flex-column align-items-center kedua"
                    data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="icon flex-shrink-0"><i class="bi bi-backpack3 reguler"></i></div>
                        <h4 class="title">Prodi Reguler</h4>
                        <a href="{{ url('prodi') }}?tab=Reguler"
                            class="readmore stretched-link"><span>Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Service Item -->
            </div>
        </div>
    </section>
    <!-- /Services Section -->



    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('assets/img/hero-carousel/1.jpg') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>{{ $psb->judul }}</h3>
                        <p><?= htmlspecialchars_decode($psb['keterangan']) ?></p>
                        <a class="cta-btn" href="psb">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->



    <!-- portfolio Section -->
    <!-- portfolio Section -->
    <!-- Fasilitas Section -->
    <section id="fasilitas" class="portfolio section" style="padding-bottom: 0px">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fasilitas</h2>
            <div><span>Tersedia Berbagai</span> <span class="description-title">Fasilitas</span></div>
        </div>

        <div class="container-fluid">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <!-- Filter Section -->
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Semua</li>
                    @foreach ($fasilitas->unique('judul') as $fasilitass)
                        <li data-filter=".filter-{{ strtolower(str_replace(' ', '-', $fasilitass->judul)) }}">
                            {{ $fasilitass->judul }}
                        </li>
                    @endforeach
                </ul>

                <!-- Fasilitas Container -->
                <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($fasilitas as $index => $fasilitass)
                        <div
                            class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(str_replace(' ', '-', $fasilitass->judul)) }}">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('assets/img/fasilitas/' . $fasilitass->gambar) }}"
                                    class="img-fluid" alt="{{ $fasilitass->judul }}">
                                <div class="portfolio-info">
                                    <a class="preview-link" data-bs-toggle="modal"
                                        data-bs-target="#modal-{{ $index }}">
                                        <i class="bi bi-zoom-in"></i>
                                    </a>
                                    <p>{{ htmlspecialchars_decode($fasilitass->judul) }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Modal dengan ID unik berdasarkan $index -->
                        <div class="modal fade" id="modal-{{ $index }}" tabindex="-1"
                            aria-labelledby="modalLabel-{{ $index }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLabel-{{ $index }}">
                                            {{ $fasilitass->judul }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="{{ asset('assets/img/fasilitas/' . $fasilitass->gambar) }}"
                                                    class="img-fluid justify-content-center align-item-center"
                                                    alt="{{ $fasilitass->judul }}">
                                            </div>
                                            <div class="col-md-8">

                                                <p><?= htmlspecialchars_decode($fasilitass['deskripsi']) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Kegiatan Section -->
    <section id="kegiatan" class="portfolio section" style="padding-bottom: 0px">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kegiatan</h2>
            <div><span>Terdapat Beberapa</span> <span class="description-title">Kegiatan</span></div>
        </div>

        <div class="container-fluid">
            <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($kegiatan as $index => $kegiatans)
                    <div
                        class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ strtolower(str_replace(' ', '-', $kegiatans->judul)) }}">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/kegiatan/' . $kegiatans->gambar) }}" class="img-fluid"
                                alt="{{ $kegiatans->judul }}">
                            <div class="portfolio-info">
                                <a class="preview-link" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $index }}">
                                    <i class="bi bi-zoom-in"></i>
                                </a>
                                <p>{{ htmlspecialchars_decode($kegiatans->judul) }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Modal dengan ID unik berdasarkan $index -->
                    <div class="modal fade" id="modal-{{ $index }}" tabindex="-1"
                        aria-labelledby="modalLabel-{{ $index }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalLabel-{{ $index }}">
                                        {{ $kegiatans->judul }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <img src="{{ asset('assets/img/kegiatan/' . $kegiatans->gambar) }}"
                                                class="img-fluid justify-content-center align-item-center"
                                                alt="{{ $kegiatans->judul }}">
                                        </div>
                                        <div class="col-md-8">

                                            <p><?= htmlspecialchars_decode($kegiatans['deskripsi']) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Prestasi</h2>
            <div><span>Prestasi</span> <span class="description-title">Santri</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">
                @foreach ($prestasi as $index => $prestasis)
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0">
                            <img src="{{ asset('assets/img/prestasi/' . $prestasis->gambar) }}" class="img-fluid"
                                alt="">
                        </div>
                        <div>
                            <h4 class="title">{{ $prestasis->judul }}</h4>
                            <p class="description"><?= htmlspecialchars_decode($prestasis['deskripsi']) ?></p>
                            <!-- Button trigger modal -->
                            <a class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Selengkapnya<i class="bi bi-arrow-right" style="text-color: var(--accent-color);"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $prestasis->judul }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-4">

                                            <img src="{{ asset('assets/img/prestasi/' . $prestasis->gambar) }}"
                                                class="img-fluid justify-content-center align-item-center"
                                                alt="">
                                        </div>
                                        <div class="col-md-8">

                                            <p><?= htmlspecialchars_decode($prestasis['deskripsi']) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Service Item -->

            </div>

        </div>

    </section>
    <!-- Services Section -->

    <section id="yayasan" class="about section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Yayasan</h2>
            <div><span>Yayasan</span> <span class="description-title">Abu Ad Darda' Ash Shohabiy</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8 content ps-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <h4>{{ $yayasan->judul_deskripsi }}</h4>
                    <p>
                        <?= htmlspecialchars_decode($yayasan['deskripsi']) ?>
                    </p>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4 mt-4 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/yayasan/' . $yayasan->gambar1) }}" class="img-fluid w-100 h-100"
                        alt="">
                </div>
                <div class="col-lg-4 mt-4 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/yayasan/' . $yayasan->gambar2) }}" class="img-fluid w-100 h-100"
                        alt="">
                </div>
                <div class="col-lg-4 mt-4 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/yayasan/' . $yayasan->gambar3) }}" class="img-fluid w-100 h-100"
                        alt="">
                </div>
            </div>

        </div>

    </section>
    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <!-- Footer About Section -->
                <div class="col-lg-7 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Kontak Ma'had Abu Ad Darda</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>{{ $HeaderFooter->nama_jalan }}</p>
                        <p>{{ $HeaderFooter->kelurahan_kecamatan_kota }}</p>
                        <p class="mt-3"><strong>Telephone:</strong> {{ $HeaderFooter->no_hp }}</p>
                        <p><strong>Email:</strong> <span>{{ $HeaderFooter->email }}</span></p>
                    </div>

                    <div class="social-links d-flex mt-4">
                        <a href="{{ $HeaderFooter->link_facebook }}" target="blank"
                            style="border: 3px solid #ffffff; border-radius: 50%; padding: 10px; margin-right: 10px;">
                            <i class="bi bi-facebook" style="font-size: 20px; color: #4267B2;"></i>
                            <!-- Warna Facebook -->
                        </a>
                        <a href="{{ $HeaderFooter->link_instagram }}" target="blank"
                            style="border: 3px solid #ffffff; border-radius: 50%; padding: 10px; margin-right: 10px;">
                            <i class="bi bi-instagram" style="font-size: 20px; color: #C13584;"></i>
                            <!-- Warna Instagram -->
                        </a>
                        <a href="{{ $HeaderFooter->youtube }}" target="blank"
                            style="border: 3px solid #ffffff; border-radius: 50%; padding: 10px; margin-right: 10px;">
                            <i class="bi bi-youtube" style="font-size: 20px; color: #FF0000;"></i>
                            <!-- Warna YouTube -->
                        </a>
                    </div>

                </div>

                <!-- Footer Map Section -->
                <div class="col-lg-5 col-md-6 footer-links">
                    <a href="https://maps.app.goo.gl/NBALCBpijXnpDF2H6" class="logo d-flex align-items-center"
                        target="_blank">
                        <h4 class="sitename">Map Ma'had Abu Ad Darda</h4>
                    </a>
                    <iframe class="maps" src="{{ $HeaderFooter->link_maps }}" width="100%" height="250"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <footer class="container d-flex justify-content-center align-items-center mt-4 copyright">
            <div class="text-center textcopy">
                <p class="mb-0 textcopy2">© <span>Copyright</span> <strong class="px-1 sitename">Abu Darda'</strong>
                    <span>All Rights Reserved</span>
                </p>
            </div>
        </footer>
    </footer>
</x-layout-official>
