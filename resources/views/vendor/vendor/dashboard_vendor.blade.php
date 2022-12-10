@extends('layouts_vendor.main')
@section('container')

<section class="home-section">
    <div class="main">
        <div class="topbar">
            <!-- Extend Navbar >> bermasalah khusus dashboard -->
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <!-- Search -->
            <div class="search" data-aos="fade-left" data-aos-duration="100">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
        <div class="cardBox" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 ">
                <a href="/vendor/vendor/keuangan/saldo" style="text-decoration-line: none">
                    <div class="card-body">
                        <div class="numbers">Rp 3.000.000</div>
                        <div class="cardName">Saldo</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <i class="bi bi-wallet-fill"></i>
                    </div>
                </a>
            </div>

            <div class="card border-0">
                <a href="/Vendor/order/kendaraan/orderan_baru" style="text-decoration-line: none">
                    <div class="card-body">
                        <div class="numbers">40</div>
                        <div class="cardName">Pesanan</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <i class="bi bi-cart-fill"></i>
                    </div>
                </a>
            </div>

            <div class="card border-0 ">
                <a href="/vendor/vendor/keuangan/saldo" style="text-decoration-line: none">
                    <div class="card-body">
                        <div class="numbers">10</div>
                        <div class="cardName">Penarikan</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <i class="bi bi-credit-card-fill"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-xs-10">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="cardHeader">
                                <div class="col-6" style="padding-top: 5px; padding-bottom: 8px">
                                    <h3>Status Vendor</h3>
                                </div>
                            </div>
                            <div class="cardHeader">
                                <p class="text-secondary" style="font-size:15px;"><i
                                    class="bi bi-geo-fill"></i>Umbulharjo, Yogyakarta
                                </p>
                                <div class="col-md-2 text-end pe-4">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                        <label class="switch ps-2 mt-2" for="checkbox">
                                            <b>Buka</b>
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="details3 col-md-12" data-aos="fade-up" data-aos-delay="100">
            <div class="recentOrders3">
                <div class="row col-sm-auto">
                    <div class="col-md">
                        <h5>Pesanan Baru</h5>
                    </div>
                    <div class="col-md-2" style="padding-left: 55px">
                        <a href="/vendor/vendor/order/kendaraan/orderan_baru">
                            <p class="text-dark">See All</p>
                        </a>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Jenis Layanan</td>
                            <td>Kategori</td>
                            <td>Status</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sintia Dwi</td>
                            <td>Kendaraan</td>
                            <td>Mobil</td>
                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                            <td class="col-md-2 text-end">
                                <a href="" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-info-circle p-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Dila</td>
                            <td>Barang</td>
                            <td>Barang</td>
                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                            <td class="col-md-2 text-end">
                                <a href="" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                    <i class="bi bi-info-circle p-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Angelie Shakira</td>
                            <td>PickUp</td>
                            <td>PickUp</td>
                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                            <td class="col-md-2 text-end">
                                <a href="" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                    <i class="bi bi-info-circle p-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--modal detailS-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <p>Id Transaksi</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>MT-121241241231</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Nama Pemesan</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>Angelie Shakira</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Tanggal Pemesanan</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>08/12/2022</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Alamat</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>Jl.Kusumanegara Sawahan, Bantul,Yogyakarta</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row col-sm-auto">
                        <div class="col-md">
                            <h4>Detail Layanan</h4>
                        </div>
                    </div>
                    <div class="shadow bg-body rounded">
                        <div class="mt-4" style="max-width: 100%">
                            <div class="row g-0">
                                <div class="col-md-3 p-4 justify-content-center">
                                    <img src="{{ asset('assets/img/parkirmotor.jpg') }}" class="img-fluid rounded-start" style="width: 100%; margin-left: 10px">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-2">
                                                <p class="Pesanan fs-5"><b>Pepi Penitipan</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="tglTransaksi" style="font-size: 14px">
                                                    Qty : <b>1x</b> | 
                                                    Penitipan : <b>4 hari</b> |
                                                    Subtotal layanan : <b>Rp 35.000</b> 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-sm-auto mt-3">
                        <div class="col-md">
                            <h4>Rincian Pembayaran</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Sub Total</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>Rp 140.000.851</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Biaya Penjemputan</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>Rp 10.000</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Metode Pembayaran</p>
                        </div>
                        <div class="col-6 text-end">
                            <p>Transfer Bank BRI</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#bukti">Lihat Bukti Pembayaran</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="bukti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">BUKTI PEMBAYARAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-3">
                        <div class="card-body">
                           <img src="/../assets/img/struk-transfer.jpg" alt="">
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
</section>

  
@endsection
