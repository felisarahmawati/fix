@extends('vendor.vendor.dashboard_vendor')

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
            <div class="px-5 mt-4">
                <div class="card mt-2 p-2" style="border-radius: 10px; ">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2>Informasi Penghasilan</h2>
                                <p class="text-muted mt-2" style="font-size: 15px">Bulan ini</p>
                                <div class="row">
                                    <div class="col-md-8 numbers" style="font-size: 25px">
                                        Rp 230.000
                                    </div>
                                    <div class="col-md-4 text-end" style="font-size: 18px">
                                        <a href="/vendor/vendor/keuangan/saldo">Informasi Saldo<i
                                                class="bi bi-chevron-double-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-1">
                            <span class="border border-end-0" style="font-size: 90px"></span>
                        </div>
                        <div class="col-md-3 mt-3">
                            <h2 class="text-muted"> Analytic</h2>
                            <div class="row">
                                <div class="col-md-8" style="font-size: 16px">
                                    Pesanan
                                </div>
                                <div class="col-md-4 " style="font-size: 16px">
                                    43
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8" style="font-size: 16px">
                                    Pesanan Lengkap
                                </div>
                                <div class="col-md-4 " style="font-size: 16px">
                                    20
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-10">
                    <div class="recentOrders">
                        <div class="details3">
                            <div class="recentOrders3">
                                <div class="rincian d-inline mb-2">
                                    <h2>Last Order</h2>
                                    <a href="/vendor/vendor/keuangan/penghasilan"
                                        class="btn btn-outline-success fw-bold px-2 shadow float-end"><i
                                            class="bi bi-journal-album p-2"></i>Lihat laporan</a>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td><input type="checkbox" onchange="checkAll(this)"></td>
                                            <td>Layanan</td>
                                            <td>Tanggal</td>
                                            <td>metode pembayaran</td>
                                            <td>Status</td>
                                            <td>Total</td>
                                            <td class="text-center">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" onchange="checkAll(this)"></td>
                                            <td>Kendaraan</td>
                                            <td>23/08/22</td>
                                            <td>Dana</td>
                                            {{-- <td>pending</td> --}}
                                            <td class="text-start"><span class="col-sm-8"
                                                    style="font-size: 15px; color:#00B56A">Selesai</span></td>
                                            <td>Rp200.000</td>
                                            <td class="td text-center" style="size: 30px;">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    class="btndetail">
                                                    <i class='bx bx-detail'></i>
                                                </button>
                                                <button class="btndelete" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal2">
                                                    <i class='bx bxs-trash'></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" onchange="checkAll(this)"></td>
                                            <td>Kendaraan</td>
                                            <td>23/08/22</td>
                                            <td>Dana</td>
                                            {{-- <td>pending</td> --}}
                                            <td class="text-start"><span class="col-sm-8"
                                                    style="font-size: 15px; color:#00B56A">Selesai</span></td>
                                            <td>Rp200.000</td>
                                            <td class="td text-center" style="size: 30px;">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    class="btndetail">
                                                    <i class='bx bx-detail'></i>
                                                </button>
                                                <button class="btndelete" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal2">
                                                    <i class='bx bxs-trash'></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox" onchange="checkAll(this)"></td>
                                            <td>Kendaraan</td>
                                            <td>23/08/22</td>
                                            <td>Dana</td>
                                            {{-- <td>pending</td> --}}
                                            <td class="text-start"><span class="col-sm-8"
                                                    style="font-size: 15px; color:darkred">Gagal</span></td>
                                            <td>Rp200.000</td>
                                            <td class="td text-center" style="size: 30px;">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    class="btndetail">
                                                    <i class='bx bx-detail'></i>
                                                </button>
                                                <button class="btndelete" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal2">
                                                    <i class='bx bxs-trash'></i>
                                                </button>
                                            </td>
                                        </tr>


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
        </div>
        {{-- modal hapus --}}
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-danger">Lanjutkan</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal detail --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                            <div class="col-md-4">
                                Jenis layanan
                            </div>
                            <div class="col-md-8 text-end">
                                Kendaraan
                            </div>
                        </div>

                        <div class="row mt-3 text-muted">
                            <div class="col-md-4">
                                Waktu penitipan
                            </div>
                            <div class="col-md-8 text-end">
                                2 hari
                            </div>
                        </div>
                        <div class="row mt-3 text-muted">
                            <div class="col-md-4">
                                Jumlah penitipan
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

    </section>
@endsection
