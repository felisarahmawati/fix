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
                        <h2>Data Order</h2>
                        <a href="#" class="btn btn-thema" data-bs-toggle="modal" data-bs-target="#exampleModal">Filter By </a>
                    </div>
                    <table class="table-borderless mt-3 w-auto">
                        <thead class="text-start">
                            <tr>
                                <td>Nama</td>
                                <td>Jenis Kendaraan</td>
                                <td>Pembayaran</td>
                                <td>Tanggal</td>
                                <td>Alamat</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-start">
                            <tr>
                                <td>Pepi Chandra</td>
                                <td>Mobil Pickup</td>
                                <td>Transfer bank</td>
                                <td>22-02-2022</td>
                                <td>DI Yogyakarta</td>
                                <td>
                                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Modal filter by -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 30%">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="filter" class="form-label">FILTER BERDASARKAN JENIS</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                           Barang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            Kendaraan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            Bangunan
                        </label>
                    </div><br>
                    <label for="filter" class="form-label">FILTER RANGE HARGA</label>
                    <div class="range">
                        <input type="range" class="form-range" id="customRange1" />
                    </div>
                    <label for="filter" class="form-label">FILTER BERDASARKAN TANGGAL</label>
                    <div class="col-12 mb-3">
                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Dari Tanggal</p>
                        <input type="date" class="form-control" id="tanggal">
                    </div>
                    <div class="col-12 mb-3">
                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Sampai Tanggal</p>
                        <input type="date" class="form-control" id="tanggal">
                    </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" style="width: 100%">OK</button>
            </div>
        </div>
    </div>


     {{-- modal detail --}}
     <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('assets/img/Rectangle 77.png') }}" class="img-detail rounded mx-auto d-block" alt="image">
                    <p class="penitipan text-center" style="padding-top: 20px"><b>Detail Order</b></p>
                    <div class="row">
                        <div class="col-md">
                            <p>ID Transaksi</p>
                        </div>
                        <div class="col-md-5 text-end">
                            T1273382736237
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md">
                            <p>Nama Customer</p>
                        </div>
                        <div class="col-md-5 text-end">
                            Pepi Yanto
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>No Telepon</p>
                        </div>
                        <div class="col-md-5 text-end">
                            0812748474837
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Jenis Layanan</p>
                        </div>
                        <div class="col-md-5 text-end">
                            Kendaraan
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Nama Barang</p>
                        </div>
                        <div class="col-md-5 text-end">
                            Motor
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Jumlah Barang</p>
                        </div>
                        <div class="col-md-5 text-end">
                            1
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Nama Vendor</p>
                        </div>
                        <div class="col-md-5 text-end">
                           PT Maju Mundur
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Tanggal Penitipan</p>
                        </div>
                        <div class="col-md-5 text-end">
                            10-10-2022
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Tanggal Pengembalian</p>
                        </div>
                        <div class="col-md-5 text-end">
                            15-10-2022
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" style="width: 100%">Tutup</button>
                <br>
            </div>
        </div>
    </div>


    </section>
@endsection
