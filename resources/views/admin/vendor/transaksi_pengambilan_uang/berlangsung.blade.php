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
                        <h2>Data Penarikan Uang</h2>
                        <div class="row">
                            <div class="col-md-6 text-end">
                                <a href="/vendor/transaksi_pengambilan_uang/berlangsung" class="btn btn-thema"><i class="bi bi-printer-fill p-1"></i>Berlangsung</a>
                            </div>
                            <div class="col-md-6 text-start">
                                <a href="/vendor/transaksi_pengambilan_uang/selesai" class="btn btn-thema" style="width:100px"><i class="bi bi-printer-fill p-1"></i>Selesai</a>
                            </div>
                        </div>
                    </div>
                    <table class="table-borderless mt-3 w-auto">
                        <thead class="text-start">
                            <tr>
                                <td>Nama Vendor</td>
                                <td>Tanggal</td>
                                <td>Metode</td>
                                <td>Status</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-start">
                            <tr>
                                <td>Gudang Aman</td>
                                <td>15/08/22</td>
                                <td>Transfer</td>
                                <td style="font-style: italic">Proses</td>
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

{{-- Detail --}}
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
                        ID Transaksi
                    </div>
                    <div class="col-md-6 text-end">
                        1234567890900
                    </div>
                </div>

                <div class="row mt-3 text-muted">
                    <div class="col-md-4">
                        No Rekening
                    </div>
                    <div class="col-md-8 text-end">
                        4201234567890
                    </div>
                </div>

                <div class="row mt-3 text-muted">
                    <div class="col-md-4">
                        Keterangan
                    </div>
                    <div class="col-md-8 text-end">
                        Proses
                    </div>
                </div>
                <hr>
                <div class="row mt-3" style="color:#00B56A">
                    <div class="col-md-8" style="font-size:17px;">
                        Biaya Admin
                    </div>
                    <div class="col-md-4 text-end" style="font-size:19px;">
                        Rp6.500
                    </div>
                </div>
                <div class="row mt-3" style="color:#00B56A">
                    <div class="col-md-8" style="font-size:17px;">
                        Total harga penitipan
                    </div>
                    <div class="col-md-4 text-end" style="font-size:22px;">
                        Rp200.000
                    </div>
                </div>
                

            </div>

        </div>
    </div>
</div>
{{-- End --}}

@endsection


