@extends('vendor.vendor.dashboard_vendor')

<!--hero section-->
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
        <div class="">
            <div class="cardBox1">
                <div class="card2">
                    <div>
                        <a href="/vendor/vendor/order/kendaraan/orderan_baru" style="text-decoration:none">
                            <div class="cardName2">Kendaraan
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card1">
                    <div>
                        <a href="/vendor/vendor/order/bangunan/orderan_bangunan" style="text-decoration:none">
                            <div class="cardName1">Bangunan
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card1">
                    <div>
                        <a href="/vendor/vendor/order/barang/orderan_barang" style="text-decoration:none">
                            <div class="cardName1">Barang
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card1">
                    <div>
                        <a href="/vendor/vendor/order/pickup/orderan_pickup" style="text-decoration:none">
                            <div class="cardName1">Pick Up
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="details1 ">
            <div class="recentOrders">
                <div class="row col-sm-auto">
                    <div class="col-md">
                        <h4>Pesanan Masuk</h4>
                    </div>
                </div>
                <table class="table-borderless mt-3 w-auto">
                    <thead class="text-start">
                        <tr>
                            <td>Nama</td>
                            <td>Jenis Layanan</td>
                            <td>Alamat</td>
                            <td>Tanggal</td>
                            <td>Status</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-start">
                        <tr>
                            <td>Sintia Dwi</td>
                            <td>Kendaraan</td>
                            <td>Jl.Kusumanegara Sawahan, Bantul,Yogyakarta</td>
                            <td>12/12/2022</td>
                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                            <td class="col-md-2 text-end">
                                <a href="" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-info-circle p-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Angel</td>
                            <td>Kendaraan</td>
                            <td>Jl.Kusumanegara Sawahan, Bantul,Yogyakarta</td>
                            <td>12/12/2022</td>
                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                            <td class="col-md-2 text-end">
                                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="bi bi-info-circle p-1"></i>Detail<a>

                            </td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Dila</td>
                            <td>Kendaraan</td>
                            <td>Jl.Kusumanegara Sawahan, Bantul,Yogyakarta</td>
                            <td>12/12/2022</td>
                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                            <td class="col-md-2 text-end">
                                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bi bi-info-circle p-1"></i>Detail
                                <a>
                            </td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>

                    </tbody>
                </table>
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
                            <button class="btn btn-success" type="button">Lihat Bukti Pembayaran</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
{{-- modal bukti pembayaran --}}
        <div class="modal fade" id="buktipembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">BUKTI PEMBAYARAN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card p-3">
                            <div class="card-body">
                               <img src="/../assets/img/placehold.jpg" alt="">
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </div>

</section>
@endsection


