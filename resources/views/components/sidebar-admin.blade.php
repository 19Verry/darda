<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin') ? 'active' : 'collapsed' }}" href="{{ url('admin') }}">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/header-footer') ? 'active' : 'collapsed' }}"
                href="{{ url('admin/header-footer') }}">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Header & Footer</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/home/slideshow') || request()->is('admin/home/tentang-masyarakat') || request()->is('admin/home/admin/home/psb') || request()->is('admin/home/fasilitas') || request()->is('admin/home/kegiatan') || request()->is('admin/home/prestasi') || request()->is('admin/home/prodi/reguler') || request()->is('admin/home/prodi/takhassush') ? '' : 'collapsed' }}"
                data-bs-target="#home-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-house-door"></i><span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="home-nav"
                class="nav-content collapse {{ request()->is('admin/home/slideshow') || request()->is('admin/home/tentang-masyarakat') || request()->is('admin/home/psb') || request()->is('admin/home/fasilitas') || request()->is('admin/home/kegiatan') || request()->is('admin/home/prestasi') || request()->is('admin/home/prodi/reguler') || request()->is('admin/home/prodi/takhassush') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/home/slideshow') }}"
                        class="nav-link {{ request()->is('admin/home/slideshow') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Slideshow</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/home/tentang-masyarakat') }}"
                        class="nav-link {{ request()->is('admin/home/tentang-masyarakat') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Tentang & Masyarakat</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ request()->is('admin/home/prodi/reguler') || request()->is('admin/home/prodi/takhassush') ? '' : 'collapsed' }}"
                        data-bs-target="#prodi-submenu" data-bs-toggle="collapse" href="#">
                        <span>Prodi</span><i class="bi bi-chevron-down ms-auto me-2" style="font-size: 12px;"></i>
                    </a>
                    <ul id="prodi-submenu"
                        class="nav-content collapse {{ request()->is('admin/home/prodi/reguler') || request()->is('admin/home/prodi/takhassush') ? 'show' : '' }}"
                        data-bs-parent="#components-nav">
                        <li style="padding-left: 20px;">
                            <a href="{{ url('admin/home/prodi/reguler') }}"
                                class="nav-link {{ request()->is('admin/home/prodi/reguler') ? 'active' : 'collapsed' }}">
                                <i class="bi bi-circle"></i><span>Reguler</span>
                            </a>
                        </li>
                        <li style="padding-left: 20px;">
                            <a href="{{ url('admin/home/prodi/takhassush') }}"
                                class="nav-link {{ request()->is('admin/home/prodi/takhassush') ? 'active' : 'collapsed' }}">
                                <i class="bi bi-circle"></i><span>Takhassush
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('admin/home/psb') }}"
                        class="nav-link {{ request()->is('admin/home/psb') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>PSB</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/home/fasilitas') }}"
                        class="nav-link {{ request()->is('admin/home/fasilitas') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Fasilitas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/home/kegiatan') }}"
                        class="nav-link {{ request()->is('admin/home/kegiatan') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Kegiatan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/home/prestasi') }}"
                        class="nav-link {{ request()->is('admin/home/prestasi') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Prestasi</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/program/smp') || request()->is('admin/program/sma') ? '' : 'collapsed' }}"
                data-bs-target="#program-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-box-seam"></i><span>Program</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="program-nav"
                class="nav-content collapse {{ request()->is('admin/program/smp') || request()->is('admin/program/sma') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/program/smp') }}"
                        class="nav-link {{ request()->is('admin/program/smp') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>SMP</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/program/sma') }}"
                        class="nav-link {{ request()->is('admin/program/sma') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>SMA</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/bidang/kurikulum/smp') || request()->is('admin/bidang/kurikulum/sma') || request()->is('admin/bidang/tahfidz') || request()->is('admin/bidang/kesantrian') || request()->is('admin/bidang/akhlak') || request()->is('admin/bidang/bahasa') ? '' : 'collapsed' }}"
                data-bs-target="#bidang-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-folder"></i><span>Bidang</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="bidang-nav"
                class="nav-content collapse {{ request()->is('admin/bidang/kurikulum/smp') || request()->is('admin/bidang/kurikulum/sma') || request()->is('admin/bidang/tahfidz') || request()->is('admin/bidang/kesantrian') || request()->is('admin/bidang/akhlak') || request()->is('admin/bidang/bahasa') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a class="nav-link {{ request()->is('admin/bidang/kurikulum/smp') || request()->is('admin/bidang/kurikulum/sma') ? '' : 'collapsed' }}"
                        data-bs-target="#kurikulum-submenu" data-bs-toggle="collapse" href="#">
                        <span>Kurikulum</span><i class="bi bi-chevron-down ms-auto me-2" style="font-size: 12px;"></i>
                    </a>
                    <ul id="kurikulum-submenu"
                        class="nav-content collapse {{ request()->is('admin/bidang/kurikulum/smp') || request()->is('admin/bidang/kurikulum/sma') ? 'show' : '' }}"
                        data-bs-parent="#components-nav">
                        <li style="padding-left: 20px;">
                            <a href="{{ url('admin/bidang/kurikulum/smp') }}"
                                class="nav-link {{ request()->is('admin/bidang/kurikulum/smp') ? 'active' : 'collapsed' }}">
                                <i class="bi bi-circle"></i><span>SMP</span>
                            </a>
                        </li>
                        <li style="padding-left: 20px;">
                            <a href="{{ url('admin/bidang/kurikulum/sma') }}"
                                class="nav-link {{ request()->is('admin/bidang/kurikulum/sma') ? 'active' : 'collapsed' }}">
                                <i class="bi bi-circle"></i><span>SMA</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('admin/bidang/tahfidz') }}"
                        class="nav-link {{ request()->is('admin/bidang/tahfidz') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Tahfidz</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bidang/kesantrian') }}"
                        class="nav-link {{ request()->is('admin/bidang/kesantrian') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Kesantrian</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bidang/akhlak') }}"
                        class="nav-link {{ request()->is('admin/bidang/akhlak') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Akhlak</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/bidang/bahasa') }}"
                        class="nav-link {{ request()->is('admin/bidang/bahasa') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Bahasa</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/user') }}">
                <i class="bi bi-people"></i>
                <span>Kelola Akun</span>
            </a>
        </li><!-- End Password Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('auth/loginadmin') }}">
                <i class="bi bi-door-open"></i>
                <span>Logout Akun</span>
            </a>
        </li><!-- End Password Nav -->

    </ul>

</aside><!-- End Sidebar-->
