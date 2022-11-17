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
            <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12 container">
                <div class="" style="background-color: #fff;">
                    <div class="card-body rounded-3">
                        <div class="row">
                            <div class="col-md-10 ps-5">
                                <label for="faq" class="form-label" style="font-size: 20px"><b>Status Vendor</b></label>
                                <p class="text-secondary" style="margin-left:10px; font-size:15px;"><i
                                        class="bi bi-geo-fill p-1"></i>Umbulharjo, Yogyakarta</p>
                            </div>
                            <div class="col-md-2 text-end pe-5">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                    <label class="switch ps-2 mt-2" for="checkbox">
                                        <b>Buka</b>
                                    </label>
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
                        <div class="details3 col-md-12">
                            <div class="recentOrders3">
                                <div class="row col-sm-auto">
                                    <div class="col-md" style="padding-top: 10px">
                                        <h5>Pesanan Baru</h5>
                                    </div>
                                    <div class="col-md-2" style="padding-top: 10px; padding-left: 55px">
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
                                                <a href="" class="btn btn-info " data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1"><i
                                                        class="bi bi-info-circle p-1"></i>Detail</a>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Sintia Dwi</td>
                                            <td>Bangunan</td>
                                            <td>Rumah</td>
                                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                                            <td class="col-md-2 text-end">
                                                <a href="" class="btn btn-info " data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal2"><i
                                                        class="bi bi-info-circle p-1"></i>Detail</a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dila</td>
                                            <td>Barang</td>
                                            <td>Barang</td>
                                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                                            <td class="col-md-2 text-end">
                                                <a href="" class="btn btn-info " data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal3"><i
                                                        class="bi bi-info-circle p-1"></i>Detail</a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Angelie Shakira</td>
                                            <td>PickUp</td>
                                            <td>PickUp</td>
                                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                                            <td class="col-md-2 text-end">
                                                <a href="" class="btn btn-info " data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal4"><i
                                                        class="bi bi-info-circle p-1"></i>Detail</a>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          <!--modal detailS Kendaraan-->
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 45%">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Detail Pesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card p-3">
                            <div class="card-body">
                                <p class="card-title text-center text-success"><b>30 Dec.2021 11:00 PM</b></p><br>
                                <div class="row">
                                    <div style="background: #F2F2F2">

                                        <div class="row">
                                            <div class="col-6">
                                                <b>
                                                    <p class="mb-1">Order Id</p>
                                                </b>
                                            </div>
                                            <div class="col-md text-end">
                                                <b>1234569098</b>
                                            </div>
                                        </div>

                                    </div>
                                </div><br>

                                <div class="col-md">
                                    <b>
                                        <p class="mb-1">Sinta Sari Dwi Putra</p>
                                    </b>
                                    <p class="mb-1" style="font-size: 14px">No.Telp : 0823491231</p>
                                </div><br>

                                <div class="col-md">
                                    <p><i class="bi bi-geo-fill p-2" style="color: #F24E1E"></i>Jl.Kusumanegara Sawahan,
                                        Bantul,
                                        Yogyakarta</p>
                                </div>

                                <div class="col-1">
                                    <h6 style="margin-right: 10px"><i class="bi bi-three-dots-vertical p-2"></i></h6>
                                </div>

                                <div class="col-md">
                                    <h6><i class="bi bi-house-door-fill p-2" style="color: #F24E1E"></i>Kantor
                                        Titipsini.com
                                    </h6>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            {{-- <div class="container-fluid"> --}}
                                <div class="col-2 text-start">
                                    <p>Mobil</p>
                                </div>
                                <div class="row">
                                    <div class="col-7 text-start">
                                        <p>Golongan 1</p>
                                    </div>
                                    <div class="col-2  text-end">
                                        <p>01</p>
                                    </div>
                                    <div class="col-1 text-end">
                                        <p>x</p>
                                    </div>
                                    <div class="col-2 text-end">
                                        <p>40.000</p>
                                    </div>
                                </div>
                                <hr width="100%" color="#c0c0c0">
                                <div class="row">
                                    <div class="col-2 text-start">
                                        <p>Pick Up</p>
                                    </div>
                                    <div class="col-10 text-end">
                                        <p>Antar-Jemput</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 text-start">
                                        <p>Durasi Penitipan</p>
                                    </div>
                                    <div class="col-7 text-end">
                                        <p>5 hari</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 text-start">
                                        <p>Vendor Pick Up</p>
                                    </div>
                                    <div class="col-7 text-end">
                                        <button type="button" class="btn bg-white" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"> Cv.Pelita Abadi</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-5 text-start">
                                        <p>Metode Pembayaran</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Transfer</p>
                                    </div>
                                    <div class="col-1 text-end">
                                        <a type="button" class="btn bg-white" data-bs-toggle="modal"
                                            data-bs-target="#buktipembayaran"><i class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>

                                <hr width="100%" color="#c0c0c0">
                                <div class="row">
                                    <div class="col-4 text-start">
                                        <p>Subtotal</p>
                                    </div>
                                    <div class="col-8 text-end">
                                        <p>Rp 40.000
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 text-start">
                                        <p>Biaya Penjemputan</p>
                                    </div>
                                    <div class="col-7 text-end">
                                        <p>Rp 50.000</p>
                                    </div>
                                </div>
                                <hr width="100%" color="#c0c0c0">
                                <div class="row">
                                    <div class="col-2 text-start">
                                        <p><b>Total</b></p>
                                    </div>
                                    <div class="col-10 text-end">
                                        <p><b>Rp 250.000</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       <!--modal detail bangunan-->
       <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 45%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-3">
                        <div class="card-body">
                            <p class="card-title text-center text-success"><b>30 Dec.2021 11:00 PM</b></p><br>
                            <div class="row">
                                <div style="background: #F2F2F2">

                                    <div class="row">
                                        <div class="col-6">
                                            <b>
                                                <p class="mb-1">Order Id</p>
                                            </b>
                                        </div>
                                        <div class="col-md text-end">
                                            <b>1234569098</b>
                                        </div>
                                    </div>

                                </div>
                            </div><br>

                            <div class="col-md">
                                <b>
                                    <p class="mb-1">Sinta Sari Dwi Putra</p>
                                </b>
                                <p class="mb-1" style="font-size: 14px">No.Telp : 0823491231</p>
                            </div><br>

                            <div class="col-md">
                                <p><i class="bi bi-geo-fill p-2" style="color: #F24E1E"></i>Jl.Kusumanegara Sawahan,
                                    Bantul,
                                    Yogyakarta</p>
                            </div>

                            <div class="col-1">
                                <h6 style="margin-right: 10px"><i class="bi bi-three-dots-vertical p-2"></i></h6>
                            </div>

                            <div class="col-md">
                                <h6><i class="bi bi-house-door-fill p-2" style="color: #F24E1E"></i>Kantor
                                    Titipsini.com
                                </h6>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        {{-- <div class="container-fluid"> --}}
                            <div class="col-2 text-start">
                                <p>Rumah</p>
                            </div>
                            <div class="row">
                                <div class="col-7 text-start">
                                    <p>Tipe A</p>
                                </div>
                                <div class="col-2  text-end">
                                    <p>01</p>
                                </div>
                                <div class="col-1 text-end">
                                    <p>x</p>
                                </div>
                                <div class="col-2 text-end">
                                    <p>400.000</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-5 text-start">
                                    <p>Durasi Penitipan</p>
                                </div>
                                <div class="col-7 text-end">
                                    <p>5 hari</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start">
                                    <p>Metode Pembayaran</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p>Transfer</p>
                                </div>
                                <div class="col-1 text-end">
                                    <a type="button" class="btn bg-white" data-bs-toggle="modal"
                                        data-bs-target="#buktipembayaran"><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="row">
                                <div class="col-2 text-start">
                                    <p><b>Total</b></p>
                                </div>
                                <div class="col-10 text-end">
                                    <p><b>Rp 2.000.000</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--modal detailS barang-->
     <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 45%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-3">
                        <div class="card-body">
                            <p class="card-title text-center text-success"><b>30 Dec.2021 11:00 PM</b></p><br>
                            <div class="row">
                                <div style="background: #F2F2F2">

                                    <div class="row">
                                        <div class="col-6">
                                            <b>
                                                <p class="mb-1">Order Id</p>
                                            </b>
                                        </div>
                                        <div class="col-md text-end">
                                            <b>1234569098</b>
                                        </div>
                                    </div>

                                </div>
                            </div><br>

                            <div class="col-md">
                                <b>
                                    <p class="mb-1">Sinta Sari Dwi Putra</p>
                                </b>
                                <p class="mb-1" style="font-size: 14px">No.Telp : 0823491231</p>
                            </div><br>

                            <div class="col-md">
                                <p><i class="bi bi-geo-fill p-2" style="color: #F24E1E"></i>Jl.Kusumanegara Sawahan,
                                    Bantul,
                                    Yogyakarta</p>
                            </div>

                            <div class="col-1">
                                <h6 style="margin-right: 10px"><i class="bi bi-three-dots-vertical p-2"></i></h6>
                            </div>

                            <div class="col-md">
                                <h6><i class="bi bi-house-door-fill p-2" style="color: #F24E1E"></i>Kantor
                                    Titipsini.com
                                </h6>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        {{-- <div class="container-fluid"> --}}
                            <div class="row">
                                <div class="col-7 text-start">
                                    <p>Barang</p>
                                </div>
                                <div class="col-2  text-end">
                                    <p>10 kg</p>
                                </div>
                                <div class="col-1 text-end">
                                    <p>x</p>
                                </div>
                                <div class="col-2 text-end">
                                    <p>5.000</p>
                                </div>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="row">
                                <div class="col-2 text-start">
                                    <p>Pick Up</p>
                                </div>
                                <div class="col-10 text-end">
                                    <p>Antar-Jemput</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start">
                                    <p>Durasi Penitipan</p>
                                </div>
                                <div class="col-7 text-end">
                                    <p>5 hari</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start">
                                    <p>Vendor Pick Up</p>
                                </div>
                                <div class="col-7 text-end">
                                    <button type="button" class="btn bg-white" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"> Cv.Pelita Abadi</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start">
                                    <p>Metode Pembayaran</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p>Transfer</p>
                                </div>
                                <div class="col-1 text-end">
                                    <a type="button" class="btn bg-white" data-bs-toggle="modal"
                                        data-bs-target="#buktipembayaran"><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="row">
                                <div class="col-4 text-start">
                                    <p>Subtotal</p>
                                </div>
                                <div class="col-8 text-end">
                                    <p>Rp 250.000
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start">
                                    <p>Biaya Penjemputan</p>
                                </div>
                                <div class="col-7 text-end">
                                    <p>Rp 50.000</p>
                                </div>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="row">
                                <div class="col-2 text-start">
                                    <p><b>Total</b></p>
                                </div>
                                <div class="col-10 text-end">
                                    <p><b>Rp 300.000</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--modal detailS pickup-->
     <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 45%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-3">
                        <div class="card-body">
                            <p class="card-title text-center text-success"><b>30 Dec.2021 11:00 PM</b></p><br>
                            <div class="row">
                                <div style="background: #F2F2F2">

                                    <div class="row">
                                        <div class="col-6">
                                            <b>
                                                <p class="mb-1">Order Id</p>
                                            </b>
                                        </div>
                                        <div class="col-md text-end">
                                            <b>1234569098</b>
                                        </div>
                                    </div>

                                </div>
                            </div><br>

                            <div class="col-md">
                                <b>
                                    <p class="mb-1">Sinta Sari Dwi Putra</p>
                                </b>
                                <p class="mb-1" style="font-size: 14px">No.Telp : 0823491231</p>
                            </div><br>

                            <div class="col-md">
                                <p><i class="bi bi-geo-fill p-2" style="color: #F24E1E"></i>Jl.Kusumanegara Sawahan,
                                    Bantul,
                                    Yogyakarta</p>
                            </div>

                            <div class="col-1">
                                <h6 style="margin-right: 10px"><i class="bi bi-three-dots-vertical p-2"></i></h6>
                            </div>

                            <div class="col-md">
                                <h6><i class="bi bi-house-door-fill p-2" style="color: #F24E1E"></i>Kantor
                                    Titipsini.com
                                </h6>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        {{-- <div class="container-fluid"> --}}

                            <div class="row">
                                <div class="col-7 text-start">
                                    <p>Mobil Bak Terbuka</p>
                                </div>
                                <div class="col-2  text-end">
                                    <p>01</p>
                                </div>
                                <div class="col-1 text-end">
                                    <p>x</p>
                                </div>
                                <div class="col-2 text-end">
                                    <p>50.000</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-5 text-start">
                                    <p>Antar-jemput</p>
                                </div>
                                <div class="col-7 text-end">
                                    <p>Ya</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 text-start">
                                    <p>Metode Pembayaran</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p>Transfer</p>
                                </div>
                                <div class="col-1 text-end">
                                    <a type="button" class="btn bg-white" data-bs-toggle="modal"
                                        data-bs-target="#buktipembayaran"><i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="row">
                                <div class="col-2 text-start">
                                    <p><b>Total</b></p>
                                </div>
                                <div class="col-10 text-end">
                                    <p><b>Rp 100.000</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     {{-- MODAL BUKTI PEMBAYARAN --}}
<div class="modal fade" id="buktipembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 45%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">BUKTI PEMBAYARAN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card p-3">
                    <div class="card-body">
                        <img src="/../assets/img/placehold.jpg" alt="" style="width: 45%">

                    </div>
                    <div class="footer">
                        {{-- <button class="btn btn-success cl-md-12" data-bs-toggle="modal"
                            data-bs-target="#exampleModalLabel"> Kembali
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
@endsection
