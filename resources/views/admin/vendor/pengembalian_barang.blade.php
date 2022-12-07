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
        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Data Transaksi Pengembalian Barang</h2>
                    <a href="#" class="btn btn-thema" data-bs-toggle="modal" data-bs-target="#exampleModal">Filter By </a>
                </div>
                <table class="table-borderless mt-3 w-auto">
                    <thead>
                        <tr>
                            <td>Nama Customer</td>
                            <td>Nama Vendor</td>
                            <td>Jenis Layanan</td>
                            <td>Waktu</td>
                            <td>Tanggal</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rebbecca Abadi</td>
                            <td>Gudang Aman</td>
                            <td>Bangunan</td>
                            <td>10:00</td>
                            <td>27-10-2022</td>
                            <td>Planet Mars</td>
                            <td>
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rebbecca Abadi</td>
                            <td>Gudang Aman</td>
                            <td>Bangunan</td>
                            <td>10:00</td>
                            <td>27-10-2022</td>
                            <td>Planet Mars</td>
                            <td>
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rebbecca Abadi</td>
                            <td>Gudang Aman</td>
                            <td>Bangunan</td>
                            <td>10:00</td>
                            <td>27-10-2022</td>
                            <td>Planet Mars</td>
                            <td>
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rebbecca Abadi</td>
                            <td>Gudang Aman</td>
                            <td>Bangunan</td>
                            <td>10:00</td>
                            <td>27-10-2022</td>
                            <td>Planet Mars</td>
                            <td>
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rebbecca Abadi</td>
                            <td>Gudang Aman</td>
                            <td>Bangunan</td>
                            <td>10:00</td>
                            <td>27-10-2022</td>
                            <td>Planet Mars</td>
                            <td>
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rebbecca Abadi</td>
                            <td>Gudang Aman</td>
                            <td>Bangunan</td>
                            <td>10:00</td>
                            <td>27-10-2022</td>
                            <td>Planet Mars</td>
                            <td>
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rebbecca Abadi</td>
                            <td>Gudang Aman</td>
                            <td>Bangunan</td>
                            <td>10:00</td>
                            <td>27-10-2022</td>
                            <td>Planet Mars</td>
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
                    <label for="filter" class="form-label">FILTER BERDASARKAN TANGGAL</label>
                    <div class="col-12 mb-3">
                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Tanggal Awal</p>
                        <input type="date" class="form-control" id="tanggal">
                    </div>
                    <div class="col-12 mb-3">
                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Tanggal Akhir</p>
                        <input type="date" class="form-control" id="tanggal">
                    </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" style="width: 100%">OK</button>
                <br>
            </div>
        </div>
    </div>
</section>
@endsection

