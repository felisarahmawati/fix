@extends('vendor.vendor.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Pesanan</h2>
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
                <div class="cardHeader">
                    <h2>Penitipan Berlangsung</h2>
                </div>
                <table class="table-borderless mt-3 w-auto">
                    <thead class="text-start">
                        <tr>
                            <td>Nama</td>
                            <td>Jenis Kendaraan</td>
                            <td>Kategori</td>
                            <td>Status</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-start">
                        <tr>
                            <td>Sintia Dwi</td>
                            <td>Mobil</td>
                            <td>Golongan 1</td>
                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                            <td class="col-md-2 text-end">
                                <a href="" class="btn btn-info " data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="bi bi-info-circle p-1"></i>Detail</a>

                            </td>

                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Angel</td>
                            <td>Motor</td>
                            <td>Golongan 1</td>
                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                            <td class="col-md-2 text-end">
                                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="bi bi-info-circle p-1"></i>Detail<a>

                            </td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Dila</td>
                            <td>Mobil</td>
                            <td>Golongan 2</td>
                            <td style="color: rgb(67, 195, 89)">Dalam proses</td>
                            <td class="col-md-2 text-end">
                                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="bi bi-info-circle p-1"></i>Detail<a>

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
                                <div class="text-center">
                                    <a href="" class="btn btn-info col-md-4 text-center">Selesai</a>
                                </div>

                            </div>
                        </div>
                        <div>
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
