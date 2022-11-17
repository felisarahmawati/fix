@extends('layouts_user.main')

@section('container')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
        <div class="container mt-2 mb-2">
            <div class="row row-layanan">
                <div class="col-lg-6 mt-5">
                    <figure class="figure">
                        <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 450px">
                        <figcaption class="figure-caption d-flex justify-content-evenly">
                            <a href="#">
                                <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 70px">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 70px">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 70px">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 70px">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 70px">
                            </a>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-7">
                            <p class="mb-2 text-success" style="font-size: 23px; margin-bottom: 10px">
                                <a class="btn-white" href="/user/profiilevendor/profilevendor" role="button"><b>Motor | Wijaya - titipsini</b></a>
                            </p>
                        </div>

                        <div class="col-5 text-end" style="padding-right: 5px;">
                            <p style="background: #00B56A; padding: 6px; border-radius: 10px; margin: 0;
                            text-align: center; color: #ffffff; font-size: 15px; width:60%">
                            Tersedia</p>
                        </div>
                    </div>

                    <p class="text-success" style="font-size: 18px; margin-bottom: 10px">
                        <b>IDR 70.000 - 200.000 / HARI</b>
                    </p>

                    <div class="rate text-warning">
                        <p>3,5
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i> (70)
                        </p>
                    </div>

                    <p class="text-secondary" style="font-size: 14px">
                        <b>
                            Layanan penitipan kendaraan
                        </b>
                    </p>

                    <div class="row">
                        <div class="col-7">
                            <p class="text-success" style="font-size: 25px; margin-bottom: 10px">
                                <b>Buat pesanan</b>
                            </p>
                        </div>

                        <div class="col-6">
                            <p>Quantity</p>
                        </div>

                        <div class="col-12">
                            <div class="box text-dark">
                                <div class="wrapper" style="width: 250px">
                                    <span class="minus">-</span>
                                    <span class="num">01</span>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-3">
                            <p for="tanggalmasuk" class="form-label">Tanggal Masuk</p>
                            <input type="date" class="form-control" id="tanggal">
                        </div>

                        <div class="col-sm-6 mb-2 mt-3">
                            <label for="tanggalkeluar" class="form-label">Tanggal Keluar</label>
                            <input type="date" class="form-control" id="tanggal">
                        </div>

                        <div class="col-sm-12 mt-2">
                            <label for="Note">Catatan</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-white"><i class="bi bi-bookmark-plus"></i></span>
                                    <input type="text" class="form-control bg-white" placeholder="eg.skooter" name="skooter">
                                </div>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#wishlist">
                                Wishlist
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="wishlist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card-body text-center">
                                                <img src="{{ asset('assets/img/centanghijauuu.png') }}" alt="centangHijau" width="75x" height="75x">
                                                <h5 class="berhasil" style="padding-top: 5px; color: grey">Layanan mu sudah masuk wishlist</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a class="btn btn-outline-success" href="{{ url('/user/pemesanan/pemesanan') }}" role="button">Langsung order</a>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <p class="text-success" style="font-size: 18px; margin-bottom: 10px">
                        <b>Deskripsi layanan</b>
                    </p>
                </div>

                <div class="col-12 text-muted">
                    <p>
                        Wijaya - titipsini menyediakan layanan penitipan kendaraan
                        kecil hingga kendaraan besar, dengan kapasitas lahan 250m x
                        250m. Mampu menampung kendaraan hingga 20 kendaraan kecil
                        dan besar. Wijaya - titipsini juga menyediakan layanan konsul untuk
                        semua jenis kendaraan
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
