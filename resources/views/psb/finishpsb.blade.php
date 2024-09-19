<x-layout-official>
    <!-- hero -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active">
            <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" alt="">

            <div class="carousel-container2 d-flex flex-column justify-content-center align-items-center text-center" style="height: 100vh;top: 0px;">
                <h2>Penerimaan Santri Baru<br>Gelombang 2<br></h2>

                <p>Pendaftaran Berhasil, Silahkan Tunggu Kabar Selanjutnya.</p>
                <a class="cta-btn" href="{{ url('auth/register') }}"  class="{{ request()->is('pendaftaran/loginPendaftaran') ? 'active' : 'collapsed' }}">Ubah Data Diri</a>
            </div><!-- End Carousel Container -->
        </div><!-- End Carousel Item -->
        </div>
    </section>
    <!-- /Hero Section -->
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

