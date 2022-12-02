<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <img src="{{ url('/img/Logo2.png') }}" alt="" width="220px" height="100px">
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="#hero">
                        Home
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#about">
                        Tentang
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#services">
                        Layanan
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#contact">
                        Kontak
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('/login') }}">
                        Login
                        <i class="bi bi-box-arrow-in-right"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('/login/vendor') }}">
                        Masuk Vendor
                        <i class="bi bi-box-arrow-in-right"></i>
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
