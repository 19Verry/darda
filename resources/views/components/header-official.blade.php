<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img src="{{ asset('assets/img/logo2.png') }}" alt="Logo Ma'had" width="45">
            <h1 class="sitename">Ma'had Abu Ad Darda'</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li class="dropdown">
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : 'collapsed' }}">
                        <span>Beranda</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/#fasilitas') }}">Fasilitas</a></li>
                        <li><a href="{{ url('/#kegiatan') }}">Kegiatan</a></li>
                        <li><a href="{{ url('/#services') }}">Prestasi</a></li>
                    </ul>
                </li>

                <li><a href="{{ url('prodi') }}"
                        class="{{ request()->is('prodi') ? 'active' : 'collapsed' }}">Prodi</a></li>
                <li class="dropdown"><a href="#"
                        class="{{ request()->is('bidang/kurikulum/smp') || request()->is('bidang/kurikulum/sma') || request()->is('bidang/tahfidz') || request()->is('/bidang/tahfidz') || request()->is('bidang/kesantrian') || request()->is('bidang/akhlak') || request()->is('bidang/bahasa') ? 'active' : 'collapsed' }}"><span>Bidang</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Kurikulum</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="{{ url('/bidang/kurikulum/smp') }}">SMP</a></li>
                                <li><a href="{{ url('/bidang/kurikulum/sma') }}">SMA</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/bidang/tahfidz') }}">Tahfidz</a></li>
                        <li><a href="{{ url('/bidang/kesantrian') }}">Kesantrian</a></li>
                        <li><a href="{{ url('/bidang/akhlak') }}">Akhlak</a></li>
                        <li><a href="{{ url('/bidang/bahasa') }}">Bahasa</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('psb') }}"
                        class="{{ request()->is('psb') ? 'active' : 'collapsed' }}">Penerimaan Santri Baru</a></li>
                <li><a href="{{ url('login-kantin') }}">Kantin</a></li>
                <li>
                    <a href="{{ url('profile') }}">
                        <i class="bi bi-person fs-5"></i>
                    </a>
                </li>
                <li><a href="{{ url('auth/login-staff') }}" class="btn btn-outline-primary px-3">Login</a></li>

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>

</header>
