<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>titipsini.com | Finance </title>
    <link href="{{ url('assets/img/ic2.png') }}" rel="icon">
    <link href="{{ url('assets/css/admin.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/modal.css') }}" rel="stylesheet">
    <link href="{{ url('style/loginview2.css') }}" rel="stylesheet">
    <!-- Boxiocns CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="profile-content">
                <img class="p-1 mt-1 ms-3" style="width: 45px; height: 45px;" src="{{ asset('Frame 172.png') }}"
                    alt="Profile">
            </div>

            <a href="/" style="text-decoration: none;">
                <span class="logo_name">FinanceSini.com</span>
            </a>
        </div>

        <ul class="nav-links">
            <li class="list {{ Request::segment(2) == 'page' ? 'active' : '' }}">
                <a href="/finance/page">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/finance/page">Dasboard</a></li>
                </ul>
            </li>

            <li class="list {{ Request::segment(2) == 'profilefinance' ? 'active' : '' }}">
                <a href="/finance/profilefinance">
                    <i class='bx bx-user'></i>
                    <span class="link_name">Profile</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/finance/profilefinance">Profile</a></li>
                </ul>
            </li>

            <li class="list {{ Request::segment(2) == 'transaksi' ? 'active' : '' }}">
                <div class="iocn-link">
                    <a>
                        <i class='bx bx-data'></i>
                        <span class="link_name dropBtn">Transaksi</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <div class="sub-menu">
                    <div class="drop-box">
                        {{-- <a href="/finance/transaksi/transaksiuser">Data User</a> --}}
                        <a href="/finance/transaksi/transaksiuser">Data Transaksi</a>
                        <a href="#">Status Orderan</a>
                    </div>
                </div>
            </li>
            <li class="list {{ Request::segment(2) == 'DataPenarikan' ? 'active' : '' }}">
                <div class="iocn-link">
                    <a>
                        <i class="bi bi-folder"></i>
                        <span class="link_name dropBtn">Penarikan</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <div class="sub-menu">
                    <div class="drop-box">
                        <a href="/finance/DataPenarikan/penarikan">Penarikan</a>
                        <a href="/finance/DataPenarikan/history">History</a>
                    </div>
                </div>
            </li>
            <li class="list {{ Request::segment(2) == 'laporan' ? 'active' : '' }}">
                <div class="iocn-link">
                    <a>
                        <i class="bi bi-journal-text"></i>
                        <span class="link_name dropBtn">Laporan</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <div class="sub-menu">
                    <div class="drop-box">
                        <a href="/finance/laporan/laporan">Laporan</a>
                        <a href="/finance/laporan/laporansistem">Laporan sistem</a>
                        <a href="/finance/laporan/laporanfinance">Laporan finance</a>
                    </div>
                </div>
            </li>


            <li class="">
                <div class="iocn-link">
                    <a style="color:white " id="" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="bi bi-person-circle"></i>{{ Auth::user()->name }}
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>

                <div class="sub-menu">
                    <div class="drop-box">
                        <a style="font-size: 20px" href="{{('/logout')}}" data-toggle="modal" data-target="#logoutModal">
                            Logout
                        </a>
                </div>
                </div>
            </li>

        </ul>
    </div>
    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <!-- get child view data -->
    @yield('content')
    <!-- end child view -->

    <script src="{{ asset('assets/js/my_chart.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>

    <script>
        // Script for sidenav dropdown
        let arrow = document.querySelectorAll(".arrow");
        let dropdownBtn = document.querySelectorAll(".dropBtn");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu");
            })
            dropdownBtn[i].addEventListener("click", (e) => {
                let dropdownParent = e.target.parentElement.parentElement.parentElement;
                dropdownParent.classList.toggle("showMenu");
            });
        }
        // script for sidenav toggle
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
