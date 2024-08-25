<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ request()->is('kantin') ? 'active' : 'collapsed' }}" href="{{ url('kantin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">History</li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('topup') || request()->is('tarik') ? '' : 'collapsed' }}"
                data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-bookmark"></i><span>History Saldo</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav"
                class="nav-content collapse {{ request()->is('topup') || request()->is('tarik') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('topup') }}"
                        class="nav-link {{ request()->is('topup') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Topup</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('tarik') }}"
                        class="nav-link {{ request()->is('tarik') ? 'active' : 'collapsed' }}">
                        <i class="bi bi-circle"></i><span>Tarik</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Saldo Nav -->

        <li class="nav-item">
            <a class="nav-link {{ request()->is('transaksi') ? 'active' : 'collapsed' }}" href="{{ url('transaksi') }}">
                <i class="bi bi-cash-stack"></i>
                <span>History Transaksi</span>
            </a>
        </li><!-- End Transaksi Nav -->

        <li class="nav-heading">Profile</li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('ubahpassword') ? 'active' : 'collapsed' }}"
                href="{{ url('ubahpassword') }}">
                <i class="bi bi-pen"></i>
                <span>Ubah Password</span>
            </a>
        </li><!-- End Password Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('loginkantin') }}">
                <i class="bi bi-door-open"></i>
                <span>Logout Akun</span>
            </a>
        </li><!-- End Password Nav -->

    </ul>

</aside><!-- End Sidebar-->
