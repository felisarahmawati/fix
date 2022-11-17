@extends('layouts_vendor.main')

    <!--hero section-->
    @section('container')
    <section class="home-section"  >
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>History</h2>
                </div>
            </div>

                        <hr width="100%" color="#c0c0c0">
                        <div class="details1 ">
                            <div class="recentOrders">
                                <div class="cardHeader">
                                    <h2>History Penitipan</h2>
                                </div>
                                <table class="table-borderless mt-3 w-auto">
                                    <thead class="text-start">
                                        <tr>
                                            <td>Nama</td>
                                            <td>Jenis Layanan</td>
                                            <td>Status</td>
                                            <td class="text-center">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody class="text-start">
                                        <tr>
                                            <td>Sintia Dwi</td>
                                            <td>Bangunan</td>
                                            <td style="color: rgb(67, 195, 89)">Selesai</td>
                                            <td class="col-md-2 text-end">
                                                <a href="" class="btn btn-info " data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="bi bi-info-circle p-1"></i>Detail</a>

                                            </td>

                                            <!-- <td><span class="status return">Return</span></td> -->
                                        </tr>
                                        <tr>
                                            <td>Angel</td>
                                            <td>Kendaraan</td>
                                            <td style="color: rgb(174, 21, 7)">Gagal</td>
                                            <td class="col-md-2 text-end">
                                                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                                                        class="bi bi-info-circle p-1"></i>Detail<a>

                                            </td>
                                            <!-- <td><span class="status return">Return</span></td> -->
                                        </tr>
                                        <tr>
                                            <td>Dila</td>
                                            <td>Barang</td>
                                            <td style="color: rgb(67, 195, 89)">Selsai</td>
                                            <td class="col-md-2 text-end">
                                                <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i
                                                        class="bi bi-info-circle p-1"></i>Detail<a>

                                            </td>
                                            <!-- <td><span class="status return">Return</span></td> -->
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--modal detail 1-->
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

                                                        <div class="row" style="color: #00B56A;">
                                                            <div class="col-6">
                                                                <b>
                                                                    <p class="mb-1">Status</p>
                                                                </b>
                                                            </div>
                                                            <div class="col-md text-end">
                                                                <b>Selesai</b>
                                                            </div>
                                                        </div>
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

                        {{-- modal dtail2 --}}
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                        <div class="row" style="color: #b50c00;">
                                                            <div class="col-6">
                                                                <b>
                                                                    <p class="mb-1">Status</p>
                                                                </b>
                                                            </div>
                                                            <div class="col-md text-end">
                                                                <b>Gagal</b>
                                                            </div>
                                                        </div>
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

                        {{-- modal detail3 --}}
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                        <div class="row" style="color: #00B56A;">
                                                            <div class="col-6">
                                                                <b>
                                                                    <p class="mb-1">Status</p>
                                                                </b>
                                                            </div>
                                                            <div class="col-md text-end">
                                                                <b>Selesai</b>
                                                            </div>
                                                        </div>
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
                                                <hr width="100%" color="#c0c0c0">
                                                <div class="row">
                                                    <div class="col-5 text-start">
                                                        <p>Biaya Penjemputan</p>
                                                    </div>
                                                    <div class="col-7 text-end">
                                                        <p>50.000</p>
                                                    </div>
                                                </div>
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



        </div>



    </section>
    @endsection
