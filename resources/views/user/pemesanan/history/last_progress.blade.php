@extends('layouts_user.main')
@section('container')

<section id="history" class="history section-bg" style="padding-top: 100px;" data-aos-delay="50">
    <div class="container mt-2 mb-2" data-aos="fade-up">
        <div class="row row-layanan">
            <ul class="nav nav-pills nav-fill mb-3">
                <li class="nav-item">
                  <a class="nav-link text-dark" aria-current="page" href="/user/pemesanan/history/on_progress">Layanan Berlangsung</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" aria-current="page" href="/user/pemesanan/history/last_progress">Layanan Selesai</a>
                </li>
            </ul>
        </div>

        <div class="row row-layanan mt-2">
            <div class="mt-3">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <div class="mt-2" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-3 p-4">
                                <img src="{{ asset('assets/img/mtor4.jpg') }}" class="img-fluid rounded-start" alt="..." style="width: 100%; margin-left: 10px">
                            </div>
                            <div class=" col-md-9">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="Pesanan fs-5"><b>Pepi Penitipan</b></p>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="Pesanan text-success" style="font-size: 15px"><b>25-10-22 10:40:29</b></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="tglTransaksi" style="font-size: 14px">
                                                Qty : <b>1x</b> |
                                                Penitipan : <b>4 hari</b> |
                                                Total pembayaran : <b>Rp 140.000.851</b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="button" class="btn btn-success btn-sm">Layanan Selesai</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <a class="btn btn-light btn-sm text-success fw-bold" data-bs-toggle="modal" data-bs-target="#detailTransaksi" role="button">Lihat detail transaksi<i class="bi bi-chevron-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal detail transaksi -->
    <div class="modal fade" id="detailTransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('assets/img/titip.png') }}" class="figure-img img-fluid rounded detail-transaksi" alt="logo" style="margin-left: 38%; width:100px">
                    <p class="text-success text-center fw-bold fs-4">Titipsini.com</p>
                    <div class="row">
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-success rounded-pill" disabled><i class="bi bi-check-circle-fill p-2 text-success"></i>Pembayaran Berhasil</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="list-detail row mb-3 mt-4">
                            <dd class="col-sm-5 text-muted">Id Transaksi</dd>
                            <dd class="col-sm-7 text-muted">Order M-012912811288</dd>
                            <dd class="col-sm-5 text-muted">Waktu</dd>
                            <dd class="col-sm-7 text-muted">25-10-22 10:40:29</dd>
                            <dd class="col-sm-5 text-muted">Metode Pembayaran</dd>
                            <dd class="col-sm-7 text-muted">Transfer Bank BRI</dd>
                        </div>
                        <hr>
                        <div class="col-4 fw-bold">
                            <p>Pepi Penitipan</p>
                        </div>
                        <div class="col-2 fw-bold">
                            <p>x1</p>
                        </div>
                        <div class="col-2 fw-bold">
                            <p>4 hari</p>
                        </div>
                        <div class="col-4 fw-bold text-end">
                            <p>Rp 35.000</p>
                        </div>
                        <hr>
                        <div class="col-6 mt-3 text-muted">
                            <p>Sub Total</p>
                        </div>
                        <div class="col-6 text-end mt-3 text-muted">
                            <p>Rp 140.000</p>
                        </div>
                        <div class="col-6 text-muted">
                            <p>Kode Unik</p>
                        </div>
                        <div class="col-6 text-muted text-end">
                            <p>Rp 851</p>
                        </div>
                        <div class="col-6 text-muted">
                            <p class="fw-bold">Total</p>
                        </div>
                        <div class="col-6 text-muted text-end">
                            <p>Rp 140.000.851</p>
                        </div>
                        <div class="d-grid gap-2 mx-auto">
                            <a class="btn btn-outline-success" href="/user/layanan" role="button">Pesan Lagi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
