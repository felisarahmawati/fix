@extends('layouts_user.main')

@section('container')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">

            <div class="container mt-2 mb-2">
                <div class="row row-layanan">
                    <div class="col-lg-5 mt-5">
                        <figure class="figure">
                            <img src="{{ asset('assets/img/ba.jpeg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 450px">
                            <figcaption class="figure-caption d-flex justify-content-evenly">
                                <a href="#">
                                    <img src="{{ asset('assets/img/ba.jpeg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 80px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/ba.jpeg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 80px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/ba.jpeg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 80px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/ba.jpeg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 80px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/img/ba.jpeg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 80px">
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <div class="nama-vendor">
                            <p class="fw-bold">Gudang Leon</p>
                        </div>
                        <div class="hstack gap-2">
                            <div class="text-muted justify-content-start">1,4 Km</div>
                            <div class="vr"></div>
                            <div class="fw-bold text-success">Tersedia</div>
                          </div>
                        <div class="harga mt-2">
                            <p class="text-success fw-bold">Rp 10.000/kg</p>
                        </div>
                        <hr>
                        <hr>

                        <div class="row">
                            <div class="detail">
                                <p class="text-success fw-bold">Detail Layanan</p>
                            </div>

                            <div class="list-detail row">
                                <dd class="col-sm-3 text-muted" style="font-size: 13px">Kategori</dd>
                                <dd class="col-sm-9 text-success" style="font-size: 13px">Layanan Barang</dd>
                                <dd class="col-sm-3 text-muted" style="font-size: 13px">Alamat</dd>
                                <dd class="col-sm-9 text-success" style="font-size: 13px"><span class="d-inline-block text-truncate text-muted" style="max-width: 250px;">
                                    Jl.sukaria No.62A, RT.15/RW.19, Nanggulan, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282
                                  </span></dd>
                            </div>

                            <div class="deskripsi">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </p>
                                <ul class="list-unstyled">
                                    <li>Spesifikasi layanan:
                                      <ul>
                                        <li>Barang terjaga setiap hari</li>
                                        <li>Kontrol setiap pagi</li>
                                        <li>Barang dibersihkan boong</li>
                                        <li>Keamanan terjaga</li>
                                        <li>Konsultasi & Support</li>
                                      </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="fw-bold">Atur Pemesanan</h6>
                                    <div class="col-6 mt-3">
                                        <p style="font-size: 14px">Quantity</p>
                                    </div>
                                    <div class="col-12">
                                        <div class="box text-dark">
                                            <div class="wrapper" style="width: 200px">
                                                <span class="minus">-</span>
                                                <span class="num">01</span>
                                                <span class="plus">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Tanggal Masuk</p>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label for="tanggalkeluar" class="form-label" style="font-size: 14px">Tanggal Keluar</label>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <label for="Note" style="font-size: 14px">Catatan</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-white"><i class="bi bi-bookmark-plus"></i></span>
                                            <input type="text" class="form-control bg-white" placeholder="eg.skooter" name="skooter">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-12 mx-auto">
                                        <a class="btn btn-outline-success btn-sm" href="/user/pemesanan/pemesananBarang" role="button">Pesan</a>
                                    </div>
                                    <div class="kolom mt-3 text-center text-muted">
                                        <a class="btn btn-light" href="/user/pemesanan/wishlist" role="button"><i class="bi bi-heart-fill"></i> Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
