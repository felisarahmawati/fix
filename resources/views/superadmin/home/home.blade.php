@extends("layouts_super.main")

@section("content")

<section class="home-section">

    <body>
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <!-- Search -->
                <div class="search" data-aos="fade-left" data-aos-duration="1000">
                    <label>
                        <input type="text" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>
            <div class="">

                <!-- ======= Hero Section ======= -->
                <section id="hero" class="d-flex align-items-center card">

                    <div class="container ">
                        <div class="row p-3">
                            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                                <h1>Bingung Mau nitip barang dimana?</h1>

                                <h2>Titipsini aja</h2>

                                <h2>Semua bisa dititipkan termasuk barang, rumah
                                    atau kendaraan.</h2>
                                    <div>
                                        <a href="#services" class="btn-get-started scrollto">Titip Sekarang!</a>
                                    </div>

                                    <div class="icon" class="back-in-time" style="margin-top: 30px;">
                                        <img src="../assets/img/reload.png" style="width: 35px; height: 30px" >
                                        <span style="font-size: large;"> Melayani 24 Jam</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                                    <img src="../assets/img/illust.png" class="img-fluid animated" style="width: 400px; height: 400px">
                                </div>
                            </div>
                        </div>

                    </section><!-- End Hero -->

                    <main id="main">

                        <!-- ======= About Section ======= -->
                        {{-- <section id="about" class="about">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" width="100%">
                                        <img src="../assets/img/about-p.png" class="img-fluid"  style="width: 300px; height: 250px">
                                    </div>
                                    <div class="col-lg-6 pt-5 pt-lg-0">
                                        <h3 data-aos="fade-up">Tentang Kami</h3>
                                        <p data-aos="fade-up" data-aos-delay="100">
                                            Layanan penitipan pertama di Indonesia yang
                                            terdaftar dan telah dipercaya kredibilitasnya</p>
                                            <p data-aos="fade-up" data-aos-delay="100">
                                                Kami menyediakan jasa penitipan barang bagi anda yang mau menitipkan barangnya.
                                                Selain itu juga kami menyediakan jasa penitipan rumah dan kendaraan anda. Tersedia di 3 Kota
                                                Besar.</p>
                                            </div>
                                        </div>
                                    </div>
                                </section> --}}
                                <!-- End About Section -->



                            </main><!-- End #main -->
                        </div>
                        <div class="details3">
                            <div class="recentOrders3">
                                <div class="cardHeader3">
                                    <h2>Data Home</h2>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td>Judul</td>
                                            <td>Sub Judul</td>
                                            <td>Deskripsi</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Titip Sini.com</td>
                                            <td>Titip Sekarang</td>
                                            <td>Semua bisa dititipkan termasuk barang, rumah
                                                atau kendaraan.</td>

                                                <td class="td" style="size: 30px;">
                                                    <button class="btnedit">
                                                        <i class='bx bx-edit'></i>
                                                    </button>

                                                    <button class="btndelete">
                                                        <i class='bx bx-trash'></i>
                                                    </button>


                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header hader">
                                        <h2 class="modal-title" id="exampleModalLabel">Data Vendor</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <label class="label">Vendor ID</label>
                                        <input type="text" class="form-control" id="id" placeholder="2374627">
                                        <label class="label">Nama Vendor</label>
                                        <input type="text" class="form-control" id="namavendor" placeholder="PT. Sinamar">
                                        <label class="label">Nama Pemilik</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Ahmad Arif">
                                        <label class="label">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Username">
                                        <label class="label">Saldo</label>
                                        <input type="text" class="form-control" id="saldo" placeholder="Rp 10,000,000">

                                        <div class="kk">
                                            <h4>Scan KK & KTP</h4>
                                            <img src="{{ asset('assets/img/kaka.png') }}">
                                            <img src="{{ asset('assets/img/kttp.png') }}" style="margin-left: 20px;">
                                        </div>
                                    </div>
                                    <div class="modal-footer d-md-block">
                                        <button type="button" class="btn-sm btn-primary">Edit</button>
                                        <button type="button" class="btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script src="assets/vendor/aos/aos.js"></script>
                        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
                        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                        <script src="assets/vendor/php-email-form/validate.js"></script>
                        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
                        <script src="assets/js/main.js"></script>

                    </body>
                </section>
            @endsection
