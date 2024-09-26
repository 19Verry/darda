<x-layout-admin>
    <div class="pagetitle">
        <h1>Selamat Datang, Admin!</h1>
        <p class="text-black">Kami senang Anda kembali.
    </div><!-- End Page Title -->

    <!-- Updated hover effect CSS -->
    <!-- CSS -->
    <style>
        /* Define custom properties for colors */
        :root {
            --default-color: #444444;
            /* Default color */
            --nav-hover-color: #b3c8cf;
            /* Hover color */
        }

        /* Card icon default and hover styles */
        .card-icon {
            background-color: var(--default-color);
            /* Use default color */
            transition: background-color 0.3s ease;
            /* Smooth transition */
        }

        /* Change background color on hover */
        .card:hover .card-icon {
            background-color: var(--nav-hover-color);
            /* Use hover color */
        }

        /* Link (a) default color and hover effect */
        a {
            color: var(--default-color);
            /* Default color for links */
            transition: color 0.3s ease;
            /* Smooth transition */
        }

        a:hover {
            color: var(--nav-hover-color);
            /* Change color on hover */
        }

        /* Optional hover effect for the card itself */
        .card:hover {
            transform: scale(1.05);
            /* Smoothly enlarges the card on hover */
            transition: transform 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            /* Adds a shadow effect */
        }
    </style>
    <section class="section dashboard">
        {{-- Row 1 --}}
        <div class="row">
            <!-- Card -->
            @canany(['mudir', 'tu'])
                <div class="col-lg-6 col-md-6">
                    <div class="card info-card sales-card shadow-sm border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kelola Pengumuman</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <!-- Icon Area -->
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-megaphone fs-3"></i> <!-- Icon in white and larger size -->
                                </div>
                                <!-- Text Area -->
                                <div class="ps-3">
                                    <a href="admin/home/pengumuman" class="text-decoration-none">
                                        <p class="mb-1">Lihat <i class="bi bi-arrow-right ms-1"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card -->
            @endcanany
            @canany(['mudir', 'tu'])
                <div class="col-lg-6 col-md-6">
                    <div class="card info-card sales-card shadow-sm border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kelola Kegiatan</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <!-- Icon Area -->
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-calendar fs-3"></i>
                                    <!-- Icon in white and larger size -->
                                </div>
                                <!-- Text Area -->
                                <div class="ps-3">
                                    <a href="admin/home/kegiatan" class="text-decoration-none">
                                        <p class="mb-1">Lihat <i class="bi bi-arrow-right ms-1"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card -->
            @endcanany
            @canany(['mudir', 'tu'])
                <div class="col-lg-6 col-md-6">
                    <div class="card info-card sales-card shadow-sm border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kelola Prestasi</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <!-- Icon Area -->
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-trophy fs-3"></i>
                                    <!-- Icon in white and larger size -->
                                </div>
                                <!-- Text Area -->
                                <div class="ps-3">
                                    <a href="admin/home/prestasi" class="text-decoration-none">
                                        <p class="mb-1">Lihat <i class="bi bi-arrow-right ms-1"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card -->
            @endcanany
            @canany(['mudir', 'tu'])
                <div class="col-lg-6 col-md-6">
                    <div class="card info-card sales-card shadow-sm border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kelola Slideshow</h5>
                            <div class="d-flex align-items-center justify-content-center">
                                <!-- Icon Area -->
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 60px; height: 60px;">
                                    <i class="bi bi-images fs-3"></i>
                                    <!-- Icon in white and larger size -->
                                </div>
                                <!-- Text Area -->
                                <div class="ps-3">
                                    <a href="/admin/home/slideshow" class="text-decoration-none">
                                        <p class="mb-1">Lihat <i class="bi bi-arrow-right ms-1"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card -->
            @endcanany
        </div><!-- End Row -->

    </section>
</x-layout-admin>
