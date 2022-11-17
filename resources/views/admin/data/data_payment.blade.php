@extends('layouts_admin.main')
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="search" data-aos="fade-left" data-aos-duration="1000">
                    <label>
                        <input type="text" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>

            <!-- data list -->
            <div class="details1 ">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Payment</h2>
                        <a href="#" class="btn btn-thema"><i class="bi bi-printer-fill p-1"></i>Cetak</a>
                    </div>
                    <table class="table-borderless mt-3 w-auto">
                        <thead class="text-start">
                            <tr>
                                <td>Username</td>
                                <td>ID Transaksi</td>
                                <td>Tanggal</td>
                                <td>Metode Pembayaran</td>
                                <td>Alamat</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-start">
                            <tr>
                                <td>Robecca</td>
                                <td>42312345657</td>
                                <td>15/05/2022</td>
                                <td>Transfer Bank</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <td class="td" style="size: 30px;">
                                    <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Detail">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Howard</td>
                                <td>42312345657</td>
                                <td>15/05/2022</td>
                                <td>COD</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <td class="td" style="size: 30px;">
                                    <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Detail">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>becca Howa</td>
                                <td>42312345657</td>
                                <td>15/05/2022</td>
                                <td>COD</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <td class="td" style="size: 30px;">
                                    <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Detail">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Rocca How</td>
                                <td>42312345657</td>
                                <td>15/05/2022</td>
                                <td>Transfer Bank</td>
                                <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                                <td class="td" style="size: 30px;">
                                    <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Detail">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="Detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-end">
                        27/08/2022
                        08:30:00
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-6">
                            Username
                        </div>
                        <div class="col-md-6 text-end">
                            Rebbecca
                        </div>
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-6">
                            alamat
                        </div>
                        <div class="col-md-6 text-end">
                            2118 Thornridge cir. Syracuse connecticut 35624
                        </div>
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-6">
                            ID Customer
                        </div>
                        <div class="col-md-6 text-end">
                            1234347448759
                        </div>
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-6">
                            ID Transaksi
                        </div>
                        <div class="col-md-6 text-end">
                            1234567890900
                        </div>
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-6">
                            Metode Pembayaran
                        </div>
                        <div class="col-md-6 text-end">
                            Transfer Bank
                        </div>
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-4">
                            Jenis layanan
                        </div>
                        <div class="col-md-8 text-end">
                            Kendaraan
                        </div>
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-4">
                            Durasi penitipan
                        </div>
                        <div class="col-md-8 text-end">
                            2 hari
                        </div>
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-4">
                            Quantity
                        </div>
                        <div class="col-md-8 text-end">
                            1
                        </div>
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-4">
                            Harga penitipan
                        </div>
                        <div class="col-md-8 text-end">
                            Rp100.000/per hari
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3" style="color:#00B56A">
                        <div class="col-md-8" style="font-size:20px;">
                            Total harga penitipan
                        </div>
                        <div class="col-md-4 text-end" style="font-size:25px;">
                            Rp200.000
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
