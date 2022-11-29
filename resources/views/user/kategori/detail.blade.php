@extends('layouts_user.main')

@section('container')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">

            <div class="container mt-2 mb-2">
                <div class="row row-layanan">
                    <div class="col-lg-5 mt-5">
                        <figure class="figure">
                            <img src="{{ asset('assets/img/z.png') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 450px">
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <div class="nama-vendor">
                            <p class="fw-bold">Leon Penitipan | Golongan 1</p>
                        </div>
                        <div class="hstack gap-2">
                            <div class="text-muted justify-content-start">1,4 Km</div>
                            <div class="vr"></div>
                            <div class="fw-bold text-success">Tersedia</div>
                        </div>
                        <div class="harga mt-2">
                            <p class="text-success fw-bold">Rp 35.000/hari</p>
                        </div>
                        <hr>
                        <hr>

                        <div class="row">
                            <div class="detail">
                                <p class="text-success fw-bold">Detail Layanan</p>
                            </div>

                            <div class="list-detail row">
                                <dd class="col-sm-3 text-muted" style="font-size: 13px">Kategori</dd>
                                <dd class="col-sm-9 text-success" style="font-size: 13px">Layanan Kendaraan Roda 2</dd>
                                <dd class="col-sm-3 text-muted" style="font-size: 13px">Alamat</dd>
                                <dd class="col-sm-9 text-success" style="font-size: 13px"><span class="d-inline-block text-truncate text-muted" style="max-width: 250px;">
                                    Jl. Perkutut Gg. Rumah Pengadilan No.1, Demangan, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55221
                                  </span></dd>
                            </div>

                            <div class="deskripsi">
                                <p>Layanan penitipan kendaraan roda 2 dari Pepi Penitipan dengan
                                </p>
                                <ul class="list-unstyled">
                                    <li>Spesifikasi layanan:
                                      <ul>
                                        <li>Free cuci kendaraan</li>
                                        <li>Kendaraan dibersihkan setiap pagi</li>
                                        <li>Kontrol mesin</li>
                                        <li>Keamanan terjaga</li>
                                        <li>Konsultasi & support</li>
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
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-12 mx-auto mt-3">
                                        <a class="btn btn-outline-success btn-sm" href="/user/pemesanan/baru" role="button">Pesan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

