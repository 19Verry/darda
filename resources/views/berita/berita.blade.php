<x-layout-official>
    <!-- Berita -->
    <section id="berita" class="berita section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div><span>Berita</span> <span class="description-title">Ma'had Abu Ad Darda'</span></div>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row">
                <!-- Bagian Kiri (Berita) -->
                <div class="col-lg-8 col-md-6">
                    <div class="row">

                        @if (count($berita) > 3)
                        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                            <div class="carousel-inner">
                                @foreach ($berita->chunk(3) as $index => $chunk)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="row">
                                        @foreach ($chunk as $beritas)
                                        <div class="col-6 col-sm-4 mb-4">
                                            <div class="service-item d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="100">
                                                <img src="{{ asset('assets/img/berita/' . $beritas->gambar) }}" class="img-fluid" alt="">
                                                <h4 class="title text-start">{{ $beritas->judul }}</h4>
                                                <p class="description text-start">{!! htmlspecialchars_decode($beritas['deskripsi']) !!}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Sebelumnya</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Berikutnya</span>
                            </button>
                        </div>
                        @else
                        <div class="row">
                            @foreach ($berita as $beritas)
                            <div class="col-6 col-sm-4 mb-4">
                                <div class="service-item d-flex flex-column align-items-center" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ asset('assets/img/berita/' . $beritas->gambar) }}" class="img-fluid" alt="">
                                    <h4 class="title text-start">{{ $beritas->judul }}</h4>
                                    <p class="description text-start">{!! htmlspecialchars_decode($beritas['deskripsi']) !!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Bagian Kanan (Pengumuman) -->
                <div class="col-lg-4 col-md-6">
                    <div class="">
                        <div class="card-header">
                            <h4 style="font-weight: bold; color: #b3c8cf;;"><i class="bi bi-clipboard-fill"></i>Pengumuman</h4>
                        </div>
                        <div class="card-body">
                            <!-- Daftar Pengumuman -->
                            <ul class="list-group">
                                @foreach ($pengumuman as $pengumuman)
                                <li class="list-group-item">
                                    {{ $pengumuman->judul }}:
                                    <a href="{{ asset('assets/pdf/pengumuman/' . $pengumuman->pdf) }}" target="_blank">Lihat PDF</a>
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
