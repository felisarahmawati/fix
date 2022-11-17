@extends('layouts.main')
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
        <div class="container mt-4 mb-4" data-aos="fade-up">
            <div class="row row-layanan">
                <ul class="nav nav-tabs">
                    <li class="nav-item col-md-6">
                      <a class="nav-link text-center text-dark fs-5"  href="/user/pemesanan/History/on">Pesanan</a>
                    </li>
                    <li class="nav-item col-md-6">
                      <a class="nav-link text-center active text-success fw-bold fs-5" aria-current="page" href="/user/pemesanan/History/last">History</a>
                    </li>
                </ul>
                <div class="mt-3">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="mt-2" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-3 p-4">
                                    <img src="{{ asset('assets/img/motor.jpg') }}" class="img-fluid rounded-start" alt="..." style="width: 100%; margin-left: 10px">
                                </div>
                                <div class=" col-md-9">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <p class="Pesanan fs-5"><b>Leon Penitipan|Golongan 1</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="tglTransaksi" style="font-size: 14px">
                                                    Tanggal Transaksi: <b>16/09/2022</b> | 
                                                    Total: <b> Rp 500.000</b> |
                                                    1 Paket A x 4 hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-check-circle-fill p-1"></i>Layanan selesai</button>
                                                <button type="button" class="btn btn-success btn-sm">Pesan Lagi</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-end mt-5">
                                            <p class="text-success" style="font-size: 14px"><b>Lihat detail transaksi</b>
                                                <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#detailTransaksi">
                                                    <i class="bi bi-three-dots text-dark p-2 mt-2"></i>
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    {{-- <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="mt-2" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-3 p-4 justify-content-center">
                                <img src="{{ asset('assets/img/motor.jpg') }}" class="img-fluid rounded-start" alt="..." style="width: 100%; margin-left: 10px">
                                </div>
                                <div class=" col-md-9">
                                <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <p class="Pesanan fs-5"><b>Pepi Apart | Paket A</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="tglTransaksi" style="font-size: 14px">
                                                    Tanggal Transaksi: <b>16/09/2022</b> | 
                                                    Total: <b> Rp 500.000</b> |
                                                    1 Paket A x 4 hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success btn-sm" disabled>Layanan selesai</button>
                                                <button type="button" class="btn btn-light btn-sm">Batalkan Layanan</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mt-2">
                                                <p class="text-muted"><small>Selesaikan Pembayaran Sebelum tanggal <b>25/10/2022 23:59 Wib</b></small></p>
                                            </div>
                                            <div class="col-12 text-end">
                                                <p class="text-success" style="font-size: 14px"><b>Lihat detail transaksi</b>
                                                <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#detailTransaksi2">
                                                    <i class="bi bi-three-dots text-dark p-2 mt-2"></i>
                                                </button>
                                                </p>
                                            </div>
                                        </div>
    
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Modal udah bayar -->
        <div class="modal fade" id="detailTransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Transaksi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('assets/img/titip.png') }}" class="figure-img img-fluid rounded detail-transaksi" alt="logo" style="margin-left: 40%; width:100px">
                        <p class="text-success text-center fw-bold fs-4">Titipsini.com</p>
                        <div class="row">
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-outline-success rounded-pill" disabled><i class="bi bi-check-circle-fill p-2 text-success"></i>Pembayaran Berhasil</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mt-3">
                                <p>Id Transaksi</p>
                            </div>
                            <div class="col-6 mt-3 text-end">
                                <p>Order M-012912811288</p>
                            </div>
                            <div class="col-6">
                                <p>Metode Pembayaran</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>Transfer Bank</p>
                            </div>
                            <div class="col-6">
                                <p>Tanggal</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>25 Oktober 2022</p>
                            </div>
                            <div class="col-6">
                                <p>Waktu</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>10:00 Wib</p>
                            </div>
                            <div class="col-6">
                                <p>Total Pembayaran</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>Rp 140.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        

    