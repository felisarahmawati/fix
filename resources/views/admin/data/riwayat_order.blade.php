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
            <div class="row g-3 px-2" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" style="margin-right:15px">
                <div class="col-lg-4 col-md-6 mt-4 pe-2">
                    <div class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column ">
                        <div class="col-md-15">
                            <img src="../img/aa.png" alt="" style="width: 130px; height:130px"
                                class="img-thumbnail rounded-circle mx-auto d-block mt-2 mb-2">

                        </div>
                        <div class="person-name">
                            <h2 class="text-center fs-4 my-2"> Rebbeca</h2>
                        </div>
                        <div class="person-email">
                            <h3 class="text-center fs-5 fw-normal mb-3">becca@gmail.com</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 mt-4 pe-2 ps-2 mb-1">
                    <div class="card-profile d-flex flex-column px-0 py-4">
                        <div class="id-user px-3">
                            <h6 class="mb-0 fw-bold float-left">Account ID : 1</h6>
                        </div>
                        <hr width="100%" color="#c0c0c0">
                        <div class=" p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Nama</h5>
                                    <p>Rebecca Abadi</p>
                                </div>
                                <div class="col-md-6">
                                    <h5>Alamat</h5>
                                    <p>Planet Mars</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>Nomor Telephone</h5>
                                <p>08987364278</p>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="details1">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Riwayat Order</h2>
                    </div>
                    <table class="table-borderless">
                        <thead>
                            <tr>
                                <td>ID Transaksi</td>
                                <td>Jenis Layanan</td>
                                <td>jumlah</td>
                                <td>Tanggal Penitipan</td>
                                <td>Tanggal Kembali</td>
                                <td>Vendor</td>
                                <td>Harga</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KD123</td>
                                <td>Kendaraan</td>
                                <td>2</td>
                                <td>10-10-2022</td>
                                <td>12-10-2022</td>
                                <td>Parkir Aman</td>
                                <td>Rp 40.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
