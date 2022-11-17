@extends('layouts_vendor.main')

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
            <div class="row justify-content-center">
                <div class="col-md-11 container">
                    <div class="" style="background-color: #fff;">
                        <div class="card-body rounded-3">
                            <div class="row">
                                <div class="col-md">
                                    <label for="faq" class="form-label" style="font-size: 20px"><b>Status
                                            Vendor</b></label>
                                    <p class="text-secondary" style="margin-left:10px; font-size:15px;"><i
                                            class="bi bi-geo-fill p-1"></i>Umbulharjo, Yogyakarta</p>
                                </div>
                                <div class="col-md-2">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                        <label class="switch ps-2 mt-2" for="checkbox">
                                            <b>Buka</b>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="container">
                                <div class="card-body rounded col-md-11 ps-5" style="background: #F2F2F2E3">
                                    <div class="row">
                                        <div class="col-md">
                                            <p class="mb-1"><b>Earnings</b></p>
                                            <b>
                                                <p>Rp 10.000.000</p>
                                            </b>
                                        </div>
                                        <div class="col-md-1 text-success">
                                            <a href="/vendor/keuangan/saldo">
                                                <h3><i class="bi bi-arrow-right"></i></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="details3 col-md-11">
                                    <div class="recentOrders3">
                                        <div class="row col-sm-auto">
                                            <div class="col-md" style="padding-top: 10px">
                                                <h5>Pesanan Baru</h5>
                                            </div>
                                            <div class="col-md-2" style="padding-top: 10px; padding-left: 55px">
                                                <a href="/orderan_baru">
                                                    <p class="text-dark">See All</p>
                                                </a>
                                            </div>
                                        </div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td>Kategori</td>
                                                    <td>Pemesan</td>
                                                    <td>Nama & jumlah Item</td>
                                                    <td>Total Item</td>
                                                    <td>Aksi</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Kendaraan</td>
                                                    <td>Mori Ucing</td>
                                                    <td>2 Mobil, 1 Motor</td>
                                                    <td>3</td>
                                                    <td class="td" style="font-size: 12px;">
                                                        <button class="btndetail"> Detail</button>
                                                        <a href="/Vendor/order/kendaraan/rincian_baru"><button
                                                                class="btnedit">Terima</button></a>
                                                        <button class="btndelete"> Tolak</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bangunan</td>
                                                    <td>Rebecca Howward</td>
                                                    <td>Apartement</td>
                                                    <td>1</td>
                                                    <td class="td" style="font-size: 12px;">
                                                        <button class="btndetail" data-bs-toggle="modal"
                                                            data-bs-target="#ModalDetail"> Detail</button>
                                                        <a href="/Vendor/order/kendaraan/rincian_baru"
                                                            role="button"><button class="btnedit">Terima</button></a>
                                                        <button class="btndelete"> Tolak</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Barang</td>
                                                    <td>Dila Triyani</td>
                                                    <td>2 Tas, Sepatu</td>
                                                    <td>3</td>
                                                    <td class="td" style="font-size: 12px;">
                                                        <button class="btndetail" data-bs-toggle="modal"
                                                            data-bs-target="#ModalDetail"> Detail</button>
                                                        <a href="/Vendor/order/kendaraan/rincian_baru"
                                                            role="button"><button class="btnedit">Terima</button></a>
                                                        <button class="btndelete"> Tolak</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bangunan</td>
                                                    <td>Angelie Shakira</td>
                                                    <td>Rumah</td>
                                                    <td>1</td>
                                                    <td class="td" style="font-size: 12px;">
                                                        <button class="btndetail" data-bs-toggle="modal"
                                                            data-bs-target="#ModalDetail"> Detail</button>
                                                        <a href="/Vendor/order/kendaraan/rincian_baru"><button
                                                                class="btnedit">Terima</button></a>
                                                        <button class="btndelete"> Tolak</button>
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
        </div>

        {{-- MODAL DETAIL --}}
        <div class="modal fade" id="ModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="card-body">
                        <h3 class=" text-success">Detail Pesanan</h3>
                        <div class="row col-md-12">
                            <p class="card-title text-satrt text-success"><b>30 Dec.2021 11:00 PM</b></p>
                            <div class="col-md-5 px-3 py-3 card">
                                <div class="row" style="background: #F2F2F2">
                                    <div class="col-md-6">
                                        <b>
                                            <p class="mb-1">Order Id</p>
                                        </b>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <b>1234569098</b>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <h5><b> Sari Dwi Putri</b></h5>
                                    <p style="font-size: 14px">No.Telp : 0823491231</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <i class="bi bi-geo-fill" style="color: #F24E1E"></i>
                                    </div>
                                    <div class="col-md-10 ps-2">
                                        <p>Jl.Kusumanegara Sawahan,
                                            Bantul, Yogyakarta
                                        </p>
                                    </div>
                                </div>
                                <h6 style="margin-right: 10px"><i class="bi bi-three-dots-vertical p-2"></i>
                                </h6>
                                <div class="row">
                                    <div class="col-md-1">
                                        <i class="bi bi-house-door-fill" style="color: #F24E1E"></i>
                                    </div>
                                    <div class="col-md-10 ps-2">
                                        <p>Kantor Titipsini.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 px-3 py-3 card">
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <p>Motor</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>x2</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <p>Mobil</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>x1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <p>Pick Up</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Yes</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <p>Durasi Penitipan</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>5 hari</p>
                                    </div>
                                </div>
                                <hr width="100%" color="#c0c0c0">
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <p>Subtotal</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Rp 2.500.000
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <p>Diskon</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>0</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <p>Biaya Penjemputan</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Rp 50.000</p>
                                    </div>
                                </div>
                                <hr width="100%" color="#c0c0c0">
                                <div class="row text-success">
                                    <div class="col-4 text-start">
                                        <p><b>TOTAL</b></p>
                                    </div>
                                    <div class="col-8 text-end ">
                                        <p>Rp 2.550.000</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </section>
@endsection
