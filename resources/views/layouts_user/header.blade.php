<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">

            <img src="../../../img/Logo2.png" alt="" width="220px" height="100px">

        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link {{ Request::is('/') ? 'active' :'' }}" href="/user/home">Home</a></li>
                <li><a class="nav-link {{ Request::is('tentang') ? 'active' :'' }}" href="/user/tentang">Tentang</a></li>
                <li><a class="nav-link {{ Request::is('layanan') ? 'active' :'' }}" href="/user/layanan">Layanan</a></li>
                <li><a class="nav-link {{ Request::is('kontak') ? 'active' :'' }}" href="/user/kontak">Kontak</a></li>
                <li><a class="nav-link {{ Request::is('login') ? 'active' :'' }}" href="/login"></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/user/profil/profil">Profile</a></li>
                      <li><a class="dropdown-item" href="/user/pemesanan/history/on_progress">Pesanan Saya</a></li>
                      <li><a class="dropdown-item" href="/user/pemesanan/history/last_progress">History</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="{{url('/logout')}}" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                      </li>
                    </ul>
                </li>

                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ url('/logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>