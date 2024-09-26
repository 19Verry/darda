<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center" title="Halaman official ">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo Ma'had" width="55">
            <span class="d-none d-lg-block ms-1">Ma'had Abu Ad Darda</span>
        </a>
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
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf <!-- Ensure you have CSRF protection -->
                            <button class="dropdown-item d-flex align-items-center btn btn-outline-danger" type="submit">
                                <i class="bi bi-door-open me-2"></i> <!-- Adds some space to the right of the icon -->
                                <span>Logout Akun</span>
                            </button>
                        </form>
                    </li>


                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
