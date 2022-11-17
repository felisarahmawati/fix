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

             <!-- top nav -->
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="/vendor/data_vendor/kendaraan" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>

            <div class="card1">
                <div>
                    <a href="/vendor/data_vendor/bangunan" style="text-decoration:none">
                        <div class="cardName1">Bangunan</div>
                    </a>
                </div>
            </div>

            <div class="card1">
                <div>
                    <a href="/vendor/data_vendor/barang" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card2">
                <div>
                    <a href="/vendor/data_vendor/pickup" style="text-decoration:none">
                        <div class="cardName2">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>

         
            <!-- data list -->
            <div class="details1 ">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Data Vendor</h2>
                        <a href="#" class="btn btn-thema"><i class="bi bi-printer-fill p-1"></i>Cetak</a>
                    </div>
                    <table class="table-borderless mt-3 w-auto">
                        <thead class="text-start">
                            <tr>
                                <td>Nama Vendor</td>
                                <td>Username</td>
                                <td>Email</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-start">
                            <tr>
                                <td>Gudang Aman</td>
                                <td>gudangaman</td>
                                <td>gudang@gmail.com</td>
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
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container mt-4 mb-4">
                 <div class="">
                    <div class="container">
                        <div class="cardHeader1" style="margin-top:">
                            <h3>Status Layanan</h3>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class=" mt-3 mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-6 mt-3" style="padding-top:15px;">
                                    <img src="{{ asset('../../assets/img/Apartemen.jpg') }}" class="img-fluid rounded-start" 
                                        style="width:300px; height:300px" alt="...">
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-2 mt-2" style="font-size: 20px; margin-bottom: 10px">
                                                <b>Apartemen</b>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-2 mt-2" style="font-size: 18px; margin-bottom: 10px"> | Bangunan A+ </p>
                                            </div>
                                        </div>
                                            <p class="text-success" style="font-size: 18px; margin-bottom: 10px">
                                                <b>IDR 100.000 / HARI</b>
                                            </p>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="exampleFormControlInput1" class="form-label mb-2"><b>Luas Lahan</b></label>
                                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="100m">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="exampleFormControlInput1" class="form-label mb-2"><b>Kapasitas</b></label>
                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="8">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <p class="text-success" style="font-size: 18px; margin-bottom: 10px">
                                            <b>Deskripsi layanan</b>
                                            </p>
                                        </div>
                                        <div class="col-12 text-muted">
                                            <p>
                                                Wijaya - titipsini menyediakan layanan penitipan kendaraan
                                                kecil hingga kendaraan besar, dengan kapasitas lahan 250m x
                                                250m. Mampu menampung kendaraan hingga 20 kendaraan kecil
                                                dan besar. Wijaya - titipsini juga menyediakan layanan konsul untuk
                                                semua jenis kendaraan
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="mb-2 mt-2" style="font-size: 12px; margin-bottom: 10px">
                                                    Karangjambe, Gg Arjuna No.59, Jaranan,Banguntapan,
                                                    kec.Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198
                                                </p>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <button class="btn btn-success col-md-4 " data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"> <i class="bi bi-pencil-square"></i> EDIT</button>
                                            <button class="btn btn-danger col-md-4" data-bs-toggle="modal"
                                                data-bs-target="#Modal"><i class="bi bi-trash"></i>HAPUS</button>
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
</div>
{{-- End --}}

@endsection


