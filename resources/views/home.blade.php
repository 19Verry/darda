<x-layout-official>
    <!-- hero -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/1.jpg') }}" alt="">
                <div class="carousel-container">
                    <h2>Welcome to Hidayah<br></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                    {{-- <a href="#about" class="btn-get-started">Read More</a> --}}
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/2.jpg') }}" alt="">
                <div class="carousel-container">
                    <h2>At vero eos et accusamus</h2>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                        Temporibus autem quibusdam et aut officiis debitis aut.</p>
                    {{-- <a href="#about" class="btn-get-started">Read More</a> --}}
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" alt="">
                <div class="carousel-container">
                    <h2>Temporibus autem quibusdam</h2>
                    <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                        omnis iste natus error sit voluptatem accusantium.</p>
                    {{-- <a href="#about" class="btn-get-started">Read More</a> --}}
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('assets/img/hero-carousel/4.jpg') }}" alt="">
                <div class="carousel-container">
                    <h2>Temporibus autem quibusdam</h2>
                    <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                        omnis iste natus error sit voluptatem accusantium.</p>
                    {{-- <a href="#about" class="btn-get-started">Read More</a> --}}
                </div>
            </div><!-- End Carousel Item -->

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
            <h2>Tentang</h2>
            <div><span>Visi</span> & <span class="description-title">Misi</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/vidio.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    <a href="https://youtu.be/_ZPymZavB-A?si=nduGw_8TaFjnsTTK" class="glightbox pulsating-play-btn"></a>
                </div>

                <div class="col-lg-7  content ps-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <h3>Visi Ma'had</h3>
                    <p>
                        Ma'had Tahfidz Abu AdDarda Pekanbaru bertujuan untuk mewujudkan para hafizh yang berkualitas dan
                        berakhlaq mulia serta memahami ilmu Syar'i berdasarkan Al-Qur'an dan Sunnah sesuai pemahaman
                        generasi terbaik.
                    </p>
                    <ul class="mt-5">
                        <li>
                            <h3>Misi Ma'had</h3>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Mencetak generasi penghafal Al Qur'an</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Menanamkan aqidah yang benar</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Mencetak generasi penghafal hadists</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Mencetak generasi yang menguasai bahasa arab secara aktif</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Melahirkan generasi yang mampu membaca dan memahami kitab-kitab para ulama</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Mencetak generasi yang berbakti kepada orang tua</p>
                        </li>
                        <li>
                            <i class="bi">.</i>
                            <p>Menanamkan nilai-nilai akhlaq yang mulia dan berjiwa sosial</p>
                        </li>

                    </ul>
                </div>

            </div>

        </div>

    </section>
    <!-- /About Section -->



    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">
        <div class="container section-title" data-aos="fade-up">
            <div><span>Jumlah</span> <span class="description-title">Masyarakat</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="stats-item kiri">
                        <i class="bi bi-person"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><span>Total: </span><strong>Ustad</strong>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-3">
                    <div class="stats-item kanan">
                        <i class="bi bi-person-fill"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><span>Total: </span><strong>Ustadzah</strong>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-3">
                    <div class="stats-item kiri">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><span>Total: </span><strong>Santri</strong>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-3">
                    <div class="stats-item kanan">
                        <i class="bi bi-people-fill"></i>
                        <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><span>Total: </span><strong>Santriwati</strong></p>
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
                        <h3>Penerimaan Santri Baru</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
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
                    <li data-filter=".filter-branding">Laundry</li>
                    <li data-filter=".filter-books">Security</li>
                    <li data-filter=".filter-asrama">Kamar Asrama</li>
                    <li data-filter=".filter-books">UKS</li>
                    <li data-filter=".filter-books">Kantin</li>
                </ul><!-- End Fasilitas Filters -->

                <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-masjid">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/masjid1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/masjid1.jpg') }}"
                                    data-gallery="portfolio-gallery-masjid" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>

                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-kelas">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/kelas1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/kelas1.jpg') }}"
                                    data-gallery="portfolio-gallery-kelas" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-masjid">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/masjid2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/masjid2.jpg') }}"
                                    data-gallery="portfolio-gallery-masjid" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-asrama">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/asrama1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/asrama1.jpg') }}"
                                    data-gallery="portfolio-gallery-asrama" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-kelas">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/kelas2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/kelas2.jpg') }}"
                                    data-gallery="portfolio-gallery-kelas" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-masjid">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/masjid3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/masjid3.jpg') }}"
                                    data-gallery="portfolio-gallery-masjid" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-kelas">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/kelas3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/kelas3.jpg') }}"
                                    data-gallery="portfolio-gallery-kelas" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-asrama">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/asrama3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/asrama3.jpg') }}"
                                    data-gallery="portfolio-gallery-asrama" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-masjid">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/masjid4.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/masjid4.jpg') }}"
                                    data-gallery="portfolio-gallery-masjid" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-masjid">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/kelas5.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/kelas5.jpg') }}"
                                    data-gallery="portfolio-gallery-masjid" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-asrama">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/asrama4.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/asrama4.jpg') }}"
                                    data-gallery="portfolio-gallery-asrama" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-masjid">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/img/fasilitas/masjid6.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/img/fasilitas/masjid6.jpg') }}"
                                    data-gallery="portfolio-gallery-masjid" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Fasilitas Item -->

                </div><!-- End Fasilitas Container -->

            </div>

        </div>

    </section><!-- /Fasilitas Section -->



    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Testimonials</h2>
  <div><span>Check Our</span> <span class="description-title">Testimonials</span></div>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <div class="testimonial-item">
        <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
        <h3>Saul Goodman</h3>
        <h4>Ceo &amp; Founder</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
      <div class="testimonial-item">
        <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
        <h3>Sara Wilsson</h3>
        <h4>Designer</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
      <div class="testimonial-item">
        <img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
        <h3>Jena Karlis</h3>
        <h4>Store Owner</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
      <div class="testimonial-item">
        <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
        <h3>Matt Brandon</h3>
        <h4>Freelancer</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
      <div class="testimonial-item">
        <img src="{{asset('assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
        <h3>John Larson</h3>
        <h4>Entrepreneur</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
      <div class="testimonial-item">
        <img src="{{asset('assets/img/testimonials/testimonials-6.jpg')}}" class="testimonial-img" alt="">
        <h3>Emily Harison</h3>
        <h4>Store Owner</h4>
        <div class="stars">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          <span>Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.</span>
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div><!-- End testimonial item -->

  </div>

</div>

</section> --}}
    <!-- /Testimonials Section -->



    <!-- team Section -->
    <section id="kegiatan" class="team section" style="padding-bottom: 0px">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kegiatan</h2>
            <div><span>Terdapat Beberapa</span> <span class="description-title">Kegiatan</span></div>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 justify-content-center">

                <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="{{ asset('assets/img/kegiatan/tahsin.jpg') }}" class="img-fluid w-100"
                            alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Tahsin</h4>
                                <span>Al Qur'an</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End kegiatan list -->

                <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}" class="img-fluid w-100"
                            alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Kajian</h4>
                                <span>Islami</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End kegiatan list -->

                <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="{{ asset('assets/img/kegiatan/bukber.jpg') }}" class="img-fluid w-100"
                            alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Buka Puasa Bersama</h4>
                                <span>Ramadhan / Senin & Kamis</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End kegiatan list -->

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

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}"
                            alt="" width="100px" height="100px"></div>
                    <div>
                        <h4 class="title">Juara 1 Lomba Tahfidz</h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>

                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}"
                            alt="" width="100px" height="100px"></div>
                    <div>
                        <h4 class="title">Lorem Ipsum</h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>

                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}"
                            alt="" width="100px" height="100px"></div>
                    <div>
                        <h4 class="title">Dolor Sitema</h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>

                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}"
                            alt="" width="100px" height="100px"></div>
                    <div>
                        <h4 class="title">Dolor Sitema</h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>

                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}"
                            alt="" width="100px" height="100px"></div>
                    <div>
                        <h4 class="title">Lorem Ipsum</h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>

                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}"
                            alt="" width="100px" height="100px"></div>
                    <div>
                        <h4 class="title">Dolor Sitema</h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>

                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}"
                            alt="" width="100px" height="100px"></div>
                    <div>
                        <h4 class="title">Dolor Sitema</h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>

                    </div>
                </div>
                <!-- End Service Item -->
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}"
                            alt="" width="100px" height="100px"></div>
                    <div>
                        <h4 class="title">Lorem Ipsum</h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>

                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><img src="{{ asset('assets/img/kegiatan/kajian.jpg') }}"
                            alt="" width="100px" height="100px"></div>
                    <div>
                        <h4 class="title">Dolor Sitema</h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>

                    </div>
                </div><!-- End Service Item -->
            </div>

        </div>


        </div>

        </div>

    </section>
    <!-- Services Section -->

    <!-- /Services Section -->



    <!-- Contact Section -->
    {{-- <section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contact</h2>
  <div><span>Need Help?</span> <span class="description-title">Contact Us</span></div>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="200">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="300">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
            <p>+1 6678 254445 41</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="400">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>info@example.com</p>
            <p>contact@example.com</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="500">
            <i class="bi bi-clock"></i>
            <h3>Open Hours</h3>
            <p>Monday - Friday</p>
            <p>9:00AM - 05:00PM</p>
          </div>
        </div><!-- End Info Item -->

      </div>

    </div>

    <div class="col-lg-6">
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
          </div>

          <div class="col-12">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
          </div>

          <div class="col-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
          </div>

          <div class="col-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
          </div>

        </div>
      </form>
    </div><!-- End Contact Form -->

  </div>

</div>

</section> --}}
    <!-- /Contact Section -->
</x-layout-official>
