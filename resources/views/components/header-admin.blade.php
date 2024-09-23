<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center" title="Halaman official ">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo Ma'had" width="55">
            <span class="d-none d-lg-block ms-1">Ma'had Abu Ad Darda</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    {{-- <img src="{{asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle"> --}}
                    <i class="bi bi-person"></i>
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header text-start">
                        <h6 class="pb-2">{{ Auth::user()->name }}</h6>
                        <hr class="dropdown-divider pb-2">
                        <span>{{ Auth::user()->email }}</span>
                    </li>
                    <li>
                        <form action="{{ url('ubah-password') }}" method="GET" class="d-inline">
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-lock"></i> Ubah Password
                            </button>
                        </form>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <!-- Tambahkan item menu lain jika diperlukan -->
                </ul><!-- End Profile Dropdown Items -->
                
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
