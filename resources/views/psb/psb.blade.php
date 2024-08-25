<x-layout-official>
    <!-- hero -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active">
            <img src="{{ asset('assets/img/hero-carousel/3.jpg') }}" alt="">

            <div class="carousel-container2 d-flex flex-column justify-content-center align-items-center text-center" style="height: 100vh;top: 0px;">
                <h2>Penerimaan Santri Baru<br>Gelombang 2<br></h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <a class="cta-btn" href={{ url('auth/register') }} " class="{{ request()->is('pendaftaran/loginPendaftaran') ? 'active' : 'collapsed' }}">Daftar Sekarang</a>
            </div><!-- End Carousel Container -->
        </div><!-- End Carousel Item -->
        </div>
    </section>
    <!-- /Hero Section -->
</x-layout-official>

