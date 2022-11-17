<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo-details">
            <div class="profile-content">
                <img class="p-1 mt-1 ms-3" style="width: 35%; height: 35%;" src="{{ asset('../../img/Logo2.png') }}"
                    alt="Profile">
            </div>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/vendor/homelagi">Home</a></li>
                <li><a class="nav-link scrollto" href="/orderan_baru">Orderan</a></li>
                <li class="nav-item dropdown">
                    <a  href="/Vendor/Kelola-Kendaraan/kelola_kendaraan" >
                      Kelola
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/login/login" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/vendor/profilevendor/profile_vendor">Profile</a></li>
                      <li><a class="dropdown-item" href="/riwayat_penarikan">History</a></li>
                      {{-- <li><hr class="dropdown-divider"></li> --}}
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <a class="dropdown-item" href="{{url('/logout')}}" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                      </li>
                    </ul>
                </li>
                <button type="button" class="btn btn-white" id="liveToastBtn">Notifikasi</button>

                        <div class="toast-container position-fixed bottom-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <img src="../assets/img/centanghijauuu.png" class="img-fluid rounded" alt="..." style="width: 5%; height:5%;">
                                    <strong class="me-auto p-10">Notifikasi</strong>
                                    <small>11 mins ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    <p>Kamu mendapatkan pesanan baru</p>
                                    <p>Today at 08.00</p>
                                    <p class="text-end" style="font-size: 15px">Lihat Pesanan</p>
                                </div>
                            </div>
                        </div>

                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
