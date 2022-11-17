@extends('vendor.vendor.dashboard_vendor')

@section('container')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <!-- Extend Navbar >> bermasalah khusus dashboard -->
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="row ">
                                <div class="col-md-7">
                                    <ol class="breadcrumb" style="font-size:25px">
                                        <li class="breadcrumb-item"><a href="#">Laporan </a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Penghasilan</li>
                                    </ol>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih bulan</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktber</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih tahun</option>
                                        <option value="1">2022</option>
                                        <option value="2">2021</option>
                                        <option value="3">2020</option>
                                        <option value="4">2019</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-outline-success">Unduh</button>
                                </div>
                            </div>
                            <table class="mt-2">
                                <thead>
                                    <tr>
                                        <td>Id order</td>
                                        <td>Layanan</td>
                                        <td>Tanggal</td>
                                        <td>Metode pembayaran</td>
                                        <td>Status</td>
                                        <td>Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123001</td>
                                        <td>Kendaraan</td>
                                        <td>24/01/2022</td>
                                        <td>Transfer</td>
                                        <td>Selesai</td>
                                        <td>Rp200.000</td>
                                    </tr>
                                    <tr>
                                        <td>123002</td>
                                        <td>Kendaraan</td>
                                        <td>23/01/2022</td>
                                        <td>Transfer</td>
                                        <td>Selesai</td>
                                        <td>Rp300.000</td>
                                    </tr>
                                    <tr>
                                        <td>123003</td>
                                        <td>Kendaraan</td>
                                        <td>23/01/2022</td>
                                        <td>Transfer</td>
                                        <td>Selesai</td>
                                        <td>Rp200.000</td>
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
        {{-- modal detail --}}
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width: 800px">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mt-1">
                                            <div class="col-md-4">
                                                Username
                                            </div>
                                            <div class="col-md-8 text-end">
                                                Dilla
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                Nama pemilik rek.
                                            </div>
                                            <div class="col-md-6 text-end">
                                                Dila Triyani
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                Rekening
                                            </div>
                                            <div class="col-md-8 text-end">
                                                13214536347456
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                Bank
                                            </div>
                                            <div class="col-md-8 text-end">
                                                Mandiri
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4">
                                                Alamat
                                            </div>
                                            <div class="col-md-8 text-end">
                                                Gg arjuna, Banguntapan, Bantul, Yogyakarta
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-md-12" style="font-size:25px">
                                            Penghasilan Saya
                                        </div>
                                        <div class="col-md-6 text-muted">
                                            Bulan Agustus
                                        </div>
                                        <div class="col-md-8 mt-4" style="font-size:18px; color:#00b56a">
                                            Total
                                        </div>
                                        <div class="col-md-8 mt-1 mb-3" style="font-size:30px; color:#00b56a">
                                            IDR 3.300.000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
@endsection
