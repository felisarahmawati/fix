<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>titipsini.com</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- tess -->

        <!-- Favicons -->


        <link href="assets/img/ic2.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ url('/assets') }}/vendor/aos/aos.css" rel="stylesheet">
        <link href="{{ url('/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ url('/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="{{ url('/assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="{{ url('/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="{{ url('/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/bootstrap.css">
        <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
        <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
        <link rel="stylesheet" href="{{ url('/dist') }}/assets/icons/fontawesome/styles.min.css">
        <script type="text/javascript" src="{{ url('/dist') }}/lib/js/tether.min.js"></script>
        <script type="text/javascript" src="{{ url('/dist') }}/lib/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ url('/dist') }}/lib/js/jquery.min.js"></script>
        <script type="text/javascript" src="{{ url('/dist') }}/assets/js/app.min.js"></script>

        <!-- Template Main CSS File -->
        <link href="{{ url('/assets') }}/css/style.css" rel="stylesheet">


    </head>


<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">

                <img src="{{ url('/img/Logo2.png') }}" alt="" width="220px" height="100px">

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link scrollto active" href="/login">Masuk<i class="bi bi-box-arrow-in-right"></i></a></li>
                    {{-- <li><a class="nav-link scrollto" href="/register">Daftar<i class="bi bi-box-arrow-right"></i></a></li> --}}

                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
<br><br><br>
    <div class="page-container">
        <!-- PAGE CONTENT -->
        <div class="content h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="register card auth-box mx-auto">
                        <div class="card-block mt-2">
                            @if (session('Proses'))
                                <div class="alert alert-danger">
                                    {{ session('Proses')}}
                                </div>
                                @endif
                                <h6 class="card-title fw-bold">Lengkapi Data Diri</h6><hr>
                                <div class="row row-layanan">
                                    <form action="" method="POST" class="row">
                                        {{ csrf_field() }}
                                        <div class="col-md-6">
                                            <label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="inputNamaLengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputNIK" class="form-label">NIK</label>
                                            <input type="number" class="form-control" id="inputNIK" name="no_ktp" placeholder="Masukkan nik">
                                        </div>

                                        <div class="col-md-6 mt-2">
                                            <label for="inputTempat" class="form-label">Tempat lahir</label>
                                            <input type="text" class="form-control" id="inputTempat" name="tmpt_lahir" placeholder="Masukkan tempat lahir">
                                        </div>

                                        <div class="col-md-6 mt-2">
                                            <p for="tanggalmasuk" class="form-label">Tanggal Lahir</p>
                                            <input type="date" class="form-control" name="tgl_lahir" id="tanggal">
                                        </div>

                                        <div class="col-12 mt-2">
                                            <label for="inputAlamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="inputAlamat" placeholder="Alamat lengkap">
                                        </div>

                                        <div class="col-12 mt-2">
                                            <label for="inputLink" class="form-label">Lokasi</label>
                                            <input type="text" class="form-control" id="inputLink" name="lokasi" placeholder="Masukkan link google maps">
                                        </div>

                                        <h6 class="card-title fw-bold mt-4">Lampirkan Dokumen Pendukung</h6><hr>
                                        <div class="col-12 mt-2">
                                            <label for="inputLink" class="form-label">Scan KTP & KK</label>
                                            <input type="text" class="form-control" id="inputLink" name="ktp_kk" placeholder="Masukkan link google drive">
                                        </div>

                                        <div class="d-grid gap-2 col-2 mx-auto mt-2">
                                            <button class="btn btn-success" type="submit">DAFTAR</button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PAGE CONTENT -->
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ url('/assets') }}/vendor/aos/aos.js"></script>
<script src="{{ url('/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('/assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ url('/assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ url('/assets') }}/vendor/php-email-form/validate.js"></script>
<script src="{{ url('/assets') }}/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="{{ url('/assets') }}/js/main.js"></script>
</body>
</html>
