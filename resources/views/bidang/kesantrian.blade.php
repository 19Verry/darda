<x-layout-official>
    <div class="page-title dark-background" style="padding-bottom: 50px">
        <div class="container position-relative">
            <h1>Bidang Kesantrian</h1>
        </div>
    </div>
    <!-- End of .page-title -->

    <div class="tab-content">
        <!-- Takhassush Tab Content -->
        <div class="tab-pane fade show active" id="Takhassush">
            <section id="portfolio-details" class="portfolio-details section">
                <div class="row justify-content-between px-5">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="portfolio-description" style="text-align: justify;">
                            <h3>Kesantrian</h3>
                            <?= htmlspecialchars_decode($kesantrian['deskripsi']) ?>
                        </div>
                    </div>

                    <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-info">
                            <h3>Informasi Bidang</h3>
                            <ul>
                                <li><strong>Kepala Bidang</strong>{{ $kesantrian->kepala_kesantrian }}</li>
                                <li><strong>Masa Jabatan</strong>{{ $kesantrian->masa_jabatan }}</li>

                            </ul>
                        </div>

                        <div class="portfolio-info">
                            <ul>
                                <li>
                                    @if($kesantrian->gambar)
                                    <img src="{{ asset('assets/img/kesantrian/' . $kesantrian->gambar) }}" alt="Gambar" class="img-fluid" style="width: 100%; height: 100%;">

                                    @else
                                    <p>Gambar tidak tersedia</p>
                                    @endif
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </section>
        </div>
        <!-- End of Takhassush Tab Content -->

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
                        <p>{{$HeaderFooter->nama_jalan}}</p>
                        <p>{{$HeaderFooter->kelurahan_kecamatan_kota}}</p>
                        <p class="mt-3"><strong>Telephone:</strong> {{$HeaderFooter->no_hp}}</p>
                        <p><strong>Email:</strong> <span>{{$HeaderFooter->email}}</span></p>
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
