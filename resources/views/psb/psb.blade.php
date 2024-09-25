<x-layout-official>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" alt="" class="w-100">

                <div class="carousel-container2 d-flex flex-column justify-content-center align-items-center text-center mb-0"
                    style="height: 100vh; top: 0;">
                    <h2 class="mb-4">{{ $Homepsb->judul }}</h2>

                    <!-- Button Daftar Sekarang -->
                    <a class="cta-btn mb-4" href="{{ url('auth/register') }}"
                        class="{{ request()->is('pendaftaran/loginPendaftaran') ? 'active' : 'collapsed' }}">Daftar
                        Sekarang</a>

                    <!-- Modal Trigger Buttons (Deskripsi, Biaya, Timeline) -->
                    <div class="row justify-content-center mt-2">
                        <!-- Modal Button 1 (Deskripsi) -->
                        <div class="col-lg-3 col-md-6 mb-2">
                            <button class="btn py-3 px-2 btn-outline-light " type="button" data-bs-toggle="modal" style="width: 130px" data-bs-target="#modalKeterangan1">
                                Deskripsi
                            </button>
                        </div>
                        <!-- Modal Button 2 (Biaya) -->
                        <div class="col-lg-3 col-md-6 mb-2">
                            <button class="btn py-3 px-2 btn-outline-light " type="button" data-bs-toggle="modal" style="width: 130px" data-bs-target="#modalKeterangan2">
                                Biaya
                            </button>
                        </div>
                        <!-- Modal Button 3 (Timeline) -->
                        <div class="col-lg-3 col-md-6 mb-2">
                            <button class="btn py-3 px-2 btn-outline-light " type="button" data-bs-toggle="modal" style="width: 130px" data-bs-target="#modalKeterangan3">
                                Timeline
                            </button>
                        </div>
                        <!-- New Button (Unduh Brosur) -->
                        <div class="col-lg-3 col-md-6 mb-2">
                            <a href="{{ asset('assets/brosur.pdf') }}" class="btn py-3 px-2 btn-outline-light" style="width: 130px" download>Unduh Brosur</a>
                        </div>
                    </div>
                </div><!-- End Carousel Container -->
            </div><!-- End Carousel Item -->
        </div>

        <!-- Modal 1 -->
        <div class="modal fade" id="modalKeterangan1" tabindex="-1" aria-labelledby="modalKeterangan1Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalKeterangan1Label" style="color: black;">Keterangan 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                        <?= htmlspecialchars_decode($Homepsb['keterangan']) ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="modalKeterangan2" tabindex="-1" aria-labelledby="modalKeterangan2Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalKeterangan2Label" style="color: black;">Keterangan 2</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                        <?= htmlspecialchars_decode($Homepsb['keterangan']) ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="modal fade" id="modalKeterangan3" tabindex="-1" aria-labelledby="modalKeterangan3Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalKeterangan3Label" style="color: black;">Keterangan 3</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                        <?= htmlspecialchars_decode($Homepsb['keterangan']) ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

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
                    <a href="https://maps.app.goo.gl/NBALCBpijXnpDF2H6" class="logo d-flex align-items-center" target="_blank">
                        <h4 class="sitename">Map Ma'had Abu Ad Darda</h4>
                    </a>
                    <iframe class="maps" src="{{ $HeaderFooter->link_maps }}" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <footer class="container d-flex justify-content-center align-items-center mt-4 copyright">
            <div class="text-center textcopy">
                <p class="mb-0 textcopy2">© <span>Copyright</span> <strong class="px-1 sitename">Abu Darda'</strong> <span>All Rights Reserved</span></p>
            </div>
        </footer>
    </footer>
</x-layout-official>
