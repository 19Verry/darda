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
                        <li>
                            <p><?= htmlspecialchars_decode($sejarah['timeline']) ?></p>
                        </li>
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
            <div><span>Jumlah</span> <span class="description-title">Asatidzah</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center"> <!-- Add justify-content-center here -->
                <div class="col-lg-3 col-md-3 col-6 d-flex justify-content-center">
                    <!-- Add col-6 and d-flex justify-content-center -->
                    <div class="stats-item text-center"> <!-- Add text-center -->
                        <i class="bi bi-person"></i>
                        <span data-purecounter-start="0" data-purecounter-end=" {{ $tentang->jumlah_ustad }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><span>Total: </span><strong>Ustad</strong></p>
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

            <div class="row gy-4 justify-content-center">

                <div class="col-lg-4 col-md-6 service-item d-flex kesatu" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="icon flex-shrink-0"><i class="bi bi-star khusus"></i></div>
                        <h4 class="title">Prodi Takhassush</h4>
                        <a href="{{ url('prodi') }}?tab=Takhassush" class="readmore stretched-link"><span>Learn
                                More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex kedua" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar3 reguler"></i></div>
                        <h4 class="title">Prodi Reguler</h4>
                        <a href="{{ url('prodi') }}?tab=Reguler" class="readmore stretched-link"><span>Learn
                                More</span><i class="bi bi-arrow-right"></i></a>
                    </div>

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
    <section id="fasilitas" class="portfolio section" style="padding-bottom: 0px">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fasilitas</h2>
            <div><span>Tersedia Berbagai</span> <span class="description-title">Fasilitas</span></div>
        </div><!-- End Section Title -->

        <div class="container-fluid">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-masjid">Masjid</li>
                    <li data-filter=".filter-kelas">Ruang Kelas</li>
                    <li data-filter=".filter-laundry">Laundry</li>
                    <li data-filter=".filter-security">Security</li>
                    <li data-filter=".filter-asrama">Kamar Asrama</li>
                    <li data-filter=".filter-uks">UKS</li>
                    <li data-filter=".filter-kantin">Kantin</li>
                </ul><!-- End Fasilitas Filters -->

                <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($fasilitas as $index => $fasilitass)
                        <div
                            class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $fasilitass->nama }}">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('assets/img/fasilitas/' . $fasilitass->gambar) }}"
                                    class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <a href="{{ asset('assets/img/fasilitas/' . $fasilitass->gambar) }}"
                                        data-gallery="portfolio-gallery-masjid" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Fasilitas Item -->
                    @endforeach

                </div><!-- End Fasilitas Container -->

            </div>

        </div>

    </section><!-- /Fasilitas Section -->

    <!-- team Section -->
    <section id="kegiatan" class="team section" style="padding-bottom: 0px">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kegiatan</h2>
            <div><span>Terdapat Beberapa</span> <span class="description-title">Kegiatan</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 justify-content-center">
                @foreach ($kegiatan as $index => $kegiatans)
                    <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset('assets/img/kegiatan/' . $kegiatans->gambar) }}" class="img-fluid"
                                alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>{{ $kegiatans->nama }}</h4>
                                    <span><?= htmlspecialchars_decode($kegiatans['deskripsi']) ?></span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End kegiatan list -->
                @endforeach

            </div>

        </div>

    </section>
    <!-- /Kegiatan Section -->

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
                        <div class="icon flex-shrink-0"><img
                                src="{{ asset('assets/img/prestasi/' . $prestasis->gambar) }}" class="img-fluid"
                                alt=""></div>
                        <div>
                            <h4 class="title">{{ $prestasis->judul }}</h4>
                            <p class="description"><?= htmlspecialchars_decode($prestasis['deskripsi']) ?></p>

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
                    <h4>Mengenai Yayasan</h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium rem est pariatur sunt omnis
                        accusantium beatae maxime enim dignissimos rerum illo, repudiandae deserunt, quae illum nihil
                        laboriosam? Mollitia, amet rem voluptatum numquam vitae ipsum ex ipsa voluptatem exercitationem
                        velit voluptas, eveniet odio deserunt fuga dolores corrupti optio obcaecati nostrum repellendus?
                    </p>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4 mt-4 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/tentang/' . $tentang->gambar) }}" class="img-fluid w-100 h-100"
                        alt="">
                </div>
                <div class="col-lg-4 mt-4 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/tentang/' . $tentang->gambar) }}" class="img-fluid w-100 h-100"
                        alt="">
                </div>
                <div class="col-lg-4 mt-4 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/tentang/' . $tentang->gambar) }}" class="img-fluid w-100 h-100"
                        alt="">
                </div>
            </div>

        </div>

    </section>

</x-layout-official>
