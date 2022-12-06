<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <img src="{{ url('/img/Logo2.png') }}" alt="" width="220px" height="100px">
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="{{ url('') }}#hero">
                        Home
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('') }}#about">
                        Tentang
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('') }}#services">
                        Layanan
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('') }}#contact">
                        Kontak
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('/login') }}">
                        Login
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ url('/login/vendor') }}">
                        Masuk Vendor
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
