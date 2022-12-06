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
                        <a href="#" class="btn btn-thema" data-bs-toggle="modal" data-bs-target="#exampleModal">Filter By </a>
                    </div>
                    <table class="table-borderless mt-3 w-auto">
                        <thead class="text-start">
                            <tr>
                                <td>Username</td>
                                <td>ID Transaksi</td>
                                <td>Jenis Layanan</td>
                                <td>Tanggal</td>
                                <td>Jumlah</td>
                                <td>Alamat</td>
                            </tr>
                        </thead>
                        <tbody class="text-start">
                            <tr>
                                <td>Pepy Yanto</td>
                                <td>KD123</td>
                                <td>Kendaraan</td>
                                <td>22-02-2022</td>
                                <td>Rp 200.000</td>
                                <td>DI Yogyakarta</td>
                            </tr>
                            <tr>
                                <td>Pepy Yani</td>
                                <td>KD124</td>
                                <td>Barang</td>
                                <td>22-02-2022</td>
                                <td>Rp 200.000</td>
                                <td>DI Yogyakarta</td>
                            </tr>
                            <tr>
                                <td>Pepy Ule</td>
                                <td>KD123</td>
                                <td>Pick up</td>
                                <td>22-02-2022</td>
                                <td>Rp 200.000</td>
                                <td>DI Yogyakarta</td>
                            </tr>
                            <tr>
                                <td>Pepy Sule</td>
                                <td>KD123</td>
                                <td>Bangunan</td>
                                <td>22-02-2022</td>
                                <td>Rp 200.000</td>
                                <td>DI Yogyakarta</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

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
@endsection
