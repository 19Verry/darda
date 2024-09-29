<x-layout-official>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" alt="" class="w-100">

                <div class="carousel-container2 d-flex flex-column justify-content-center align-items-center text-center mb-0"
                    style="height: 100vh; top: 0;">
                    <h2 class="mb-4">{{ $Homepsb->judul }}</h2>

                    @auth
                        @if (auth()->user()->role === 'calonsantri')
                            <!-- Button Daftar Sekarang -->
                            <a class="cta-btn mb-4" href="{{ url('/formpsb') }}"
                                class="">Daftar
                                Sekarang</a>
                        @endif
                    @endauth

                    @auth
                        @if (is_null(auth()->user()->role))
                            <!-- Button Daftar Sekarang -->
                            <a class="cta-btn mb-4" href="{{ url('login') }}"
                                class="">Daftar
                                Sekarang</a>
                        @endif
                    @endauth


                    <!-- Modal Trigger Buttons (Deskripsi, Biaya, Timeline) -->
                    <div class="row justify-content-center mt-2">
                        <!-- Modal Button 1 (Deskripsi) -->
                        <div class="col-lg-3 col-md-6 mb-2">
                            <button class="btn py-3 px-2 btn-outline-light " type="button" data-bs-toggle="modal"
                                style="width: 130px" data-bs-target="#modalKeterangan1">
                                Deskripsi
                            </button>
                        </div>
                        <!-- Modal Button 2 (Biaya) -->
                        <div class="col-lg-3 col-md-6 mb-2">
                            <button class="btn py-3 px-2 btn-outline-light " type="button" data-bs-toggle="modal"
                                style="width: 130px" data-bs-target="#modalKeterangan2">
                                Biaya
                            </button>
                        </div>
                        <!-- Modal Button 3 (Timeline) -->
                        <div class="col-lg-3 col-md-6 mb-2">
                            <button class="btn py-3 px-2 btn-outline-light " type="button" data-bs-toggle="modal"
                                style="width: 130px" data-bs-target="#modalKeterangan3">
                                Timeline
                            </button>
                        </div>
                        <!-- New Button (Unduh Brosur) -->
                        <div class="col-lg-3 col-md-6 mb-2">
                            <a href="{{ asset('assets/brosur.pdf') }}" class="btn py-3 px-2 btn-outline-light"
                                style="width: 130px" download>Unduh Brosur</a>
                        </div>
                    </div>
                </div><!-- End Carousel Container -->
            </div><!-- End Carousel Item -->
        </div>

       <section id="yayasan" class="about section" style="background-color: #ffffff;"> <!-- Added white background -->

    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2 style="font-size: 2.5rem; font-weight: 700; color: #333;">Yayasan</h2> <!-- Adjusted font size and weight -->
        <div>
            <span style="font-size: 1.2rem; font-weight: 600; color: #555;">Yayasan</span> 
            <span class="description-title" style="font-size: 1.5rem; font-weight: 500; color: #777;">Abu Ad Darda' Ash Shohabiy</span>
        </div>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8 content ps-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <h4 style="font-size: 1.8rem; font-weight: 600; color: #333;">Apa itu Abu Darda?</h4> <!-- Adjusted font size and weight -->
                <p style="font-size: 1rem; line-height: 1.6; color: #444;">Yayasan Abu Darda Pekanbaru adalah lembaga yang didirikan dengan tujuan untuk memajukan pendidikan Islam yang berlandaskan pada Al-Qur'an dan Sunnah Nabi ﷺ. Yayasan ini menaungi berbagai program pendidikan, termasuk Pesantren Tahfidz Al-Qur'an khusus untuk santri laki-laki, dengan fokus pada pembinaan akhlak, peningkatan hafalan Al-Qur'an, dan pengamalan ajaran Islam yang murni.</p>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4 mt-4 position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <img src="https://mahadabuaddarda.pocari.id/assets/img/yayasan/1727409515.png" class="img-fluid w-100 h-100" alt="">
            </div>
            <div class="col-lg-4 mt-4 position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <img src="https://mahadabuaddarda.pocari.id/assets/img/yayasan/1727409526.png" class="img-fluid w-100 h-100" alt="">
            </div>
            <div class="col-lg-4 mt-4 position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <img src="https://mahadabuaddarda.pocari.id/assets/img/yayasan/1727409542.png" class="img-fluid w-100 h-100" alt="">
            </div>
        </div>

    </div>

</section>


    </section>
    <!-- /Hero Section -->

    <!-- Footer Section -->
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
                        <a href="{{ $HeaderFooter->link_facebook }}" target="blank">
                            <i class="bi bi-facebook" style="color: #4267B2;"></i> <!-- Warna Facebook -->
                        </a>
                        <a href="{{ $HeaderFooter->link_instagram }}" target="blank">
                            <i class="bi bi-instagram" style="color: #C13584;"></i> <!-- Warna Instagram -->
                        </a>
                        <a href="{{ $HeaderFooter->youtube }}" target="blank">
                            <i class="bi bi-youtube" style="color: #FF0000;"></i> <!-- Warna YouTube -->
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
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
