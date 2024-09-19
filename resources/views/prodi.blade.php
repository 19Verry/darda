<x-layout-official>
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Prodi Abu Ad Darda</h1>
            <div class="d-flex justify-content-center">
                <ul class="nav nav-tab">
                    <li class="p-2 active">
                        <a class="btn px-4 btn-outline-light btn-lg active" data-bs-toggle="tab"
                            href="#Takhassush">Takhassush</a>
                    </li>
                    <li class="p-2">
                        <a class="btn px-5 btn-outline-light btn-lg" data-bs-toggle="tab" href="#Reguler">Reguler</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of .page-title -->

    <div class="tab-content">
        <!-- Takhassush Tab Content -->
        <div class="tab-pane fade show active" id="Takhassush">
            <section id="portfolio-details" class="portfolio-details section">
                <div class="row justify-content-between px-5">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description">
                            <h2>Prodi Takhassush</h2>
                            <h3>{{ $takhassush->kop }}</h3>
                            <?= htmlspecialchars_decode($takhassush['deskripsi']) ?>

                            <!-- Slide Show -->
                            <div id="testimonialCarousel" class="carousel slide carousel-fade py-2  p-4"
                                data-bs-ride="carousel">
                                <div class="carousel-inner" data-bs-interval="3000">
                                    <div class="carousel-item active">
                                        <div class="testimonial-item py-2">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Setelah lulus dari Program Studi Takhassush, saya merasa lebih
                                                    siap menghadapi dunia dengan landasan ilmu agama yang kuat.
                                                    Pengalaman belajar di sini telah membekali saya dengan pengetahuan
                                                    mendalam dan keterampilan yang bermanfaat, yang membantu saya dalam
                                                    kehidupan pribadi dan profesional.</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <img src="{{ asset('assets/img/prodi/profile.png') }}"
                                                class="testimonial-img" alt="">
                                            <h3>Fulan</h3>
                                            <h4>Alumni Gen 2</h4>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="testimonial-item py-2">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Semangat Adek-AdekKU Love You</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <img src="{{ asset('assets/img/prodi/profile.png') }}"
                                                class="testimonial-img" alt="">
                                            <h3>Syahrul</h3>
                                            <h4>Alumni Gen 1</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slide Show -->
                        </div>
                    </div>

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <h3>Informasi Prodi</h3>
                            <ul>
                                <li><strong>Pendaftaran</strong>{{ $takhassush->pendaftaran}}</li>
                                <li><strong>Uang Pangkal</strong>{{ $takhassush->uang_pangkal}}</li>
                                <li><strong>Uang Pakaian</strong>{{ $takhassush->uang_pakaian}}</li>
                                <li><strong>Uang Bulanan</strong>{{ $takhassush->uang_bulanan}}</li>
                                <li><strong>Uang Buku</strong>{{ $takhassush->uang_buku}}</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!-- End of Takhassush Tab Content -->

        <!-- Reguler Tab Content -->
        <div class="tab-pane fade" id="Reguler">
            <section id="portfolio-details" class="portfolio-details section">
                <div class="row justify-content-between px-5">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description">
                            <h2>Prodi Reguler</h2>
                            <h3>{{ $reguler->kop}}</h3>
                            <?= htmlspecialchars_decode($reguler['deskripsi']) ?>
                            <!-- Slide Show -->
                            <div id="testimonialCarousel" class="carousel slide carousel-fade  py-2  p-4"
                                data-bs-ride="carousel">
                                <div class="carousel-inner" data-bs-interval="3000">
                                    <div class="carousel-item active">
                                        <div class="testimonial-item py-2">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Pendidikan Berlandasan Iman Itu Penting</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <img src="{{ asset('assets/img/prodi/profile.png') }}"
                                                class="testimonial-img" alt="">
                                            <h3>Syaban</h3>
                                            <h4>Alumni Gen 5</h4>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="testimonial-item py-2">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                <span>Semangat Adek-AdekKU Love You</span>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <img src="{{ asset('assets/img/prodi/profile.png') }}"
                                                class="testimonial-img" alt="">
                                            <h3>Khabib</h3>
                                            <h4>Alumni Gen 3</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slide Show -->
                        </div>
                    </div>

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <h3>Informasi Prodi</h3>
                            <ul>
                                <li><strong>Pendaftaran</strong>{{ $reguler->pendaftaran}}</li>
                                <li><strong>Uang Pangkal</strong>{{ $reguler->uang_pangkal}}</li>
                                <li><strong>Uang Pakaian</strong>{{ $reguler->uang_pakaian}}</li>
                                <li><strong>Uang Bulanan</strong>{{ $reguler->uang_bulanan}}</li>
                                <li><strong>Uang Buku</strong>{{ $reguler->uang_buku}}</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!-- End of Reguler Tab Content -->
    </div>
    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <!-- Footer About Section -->
                <div class="col-lg-7 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Kontak Ma'had Abu Ad Darda</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. Merak Sakti</p>
                        <p>Kelurahan Simpang Baru, Kecamatan Tampan, Pekanbaru</p>
                        <p class="mt-3"><strong>Telephone:</strong> +62 811 752 6232</p>
                        <p class="mt-3"><strong>Senin - Jumat:</strong> 08:00 - 17:00 WIB</p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
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
                    <iframe class="maps"
                        src="{{ $HeaderFooter->link_maps }}"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
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
