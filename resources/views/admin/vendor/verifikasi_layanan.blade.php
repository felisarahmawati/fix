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
                        <h2>Verifikasi Layanan</h2>
                    </div>
                    <table class="table-borderless mt-3 w-auto">
                        <thead class="text-start">
                            <tr>
                                <td>Nama Vendor</td>
                                <td>Jenis Layanan</td>
                                <td>Alamat</td>
                                <td style="text-align: center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-start">
                            <tr>
                                <td>Gudang Aman</td>
                                <td>Barang</td>
                                <td>Jl Yos Sudarso No.22</td>
                                <td class="td" style="text-align: center">
                                    <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barang">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Gudang Aman</td>
                                <td>Kendaraan</td>
                                <td>Jl Yos Sudarso No.22</td>
                                <td class="td" style="text-align: center">
                                    <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kendaraan">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Rumah Aman</td>
                                <td>Bangunan</td>
                                <td>Jl Yos Sudarso No.22</td>
                                <td class="td" style="text-align: center">
                                    <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bangunan">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Gudang Aman</td>
                                <td>Pick Up</td>
                                <td>Jl Yos Sudarso No.22</td>
                                <td class="td" style="text-align: center">
                                    <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pickup">
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

{{-- Detail Layanan --}}
<div class="modal fade" id="pickup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Verifikasi Layanan</h3>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <h5>Nama Vendor</h5>
                            <label>Gudang Aman</label>

                            <h5 class="mt-4">Username</h5>
                            <label for="">Gudang_qq</label>

                            <h5 class="mt-4">Jenis Kendaraan</h5>
                            <label for="">Mobil Pick Up</label>
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Pemilik</h5>
                            <label for="">Rebecca Howard</label>

                            <h5 class="mt-4">Letak Kendaraan</h5>
                            <label for="">Jl Yos Sudarso No.30</label>

                            <h5 class="mt-4">Nomor Kendaraan</h5>
                            <label for="">AB 3476 XX</label>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mt-4">
                                Foto Tempat
                            </h5>
                            <label for="">Link google drive</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-end">
                            <button onclick="verifikasi" type="button" class="btn btn-success mt-4 end" data-bs-toggle="modal" data-bs-target="#verifikasi">
                                Verifikasi
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button onclick="tolak" type="button" class="btn btn-danger mt-4 end" data-bs-toggle="modal" data-bs-target="#tolak">
                                 Tolak
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End --}}

{{-- Detail Layanan --}}
<div class="modal fade" id="barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Verifikasi Layanan</h3>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <h5>Nama Vendor</h5>
                            <label>Gudang Aman</label>

                            <h5 class="mt-4">Username</h5>
                            <label for="">Gudang_qq</label>

                            <h5 class="mt-4">Barang yang dilayani</h5>
                            <label for="">Semua barang</label>
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Pemilik</h5>
                            <label for="">Rebecca Howard</label>

                            <h5 class="mt-4">Letak Kendaraan</h5>
                            <label for="">Jl Yos Sudarso No.30</label>

                            <h5 class="mt-4">Luas Tempat</h5>
                            <label for="">100 m x 100 m</label>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mt-4">
                                Foto Tempat
                            </h5>
                            <label for="">Link google drive</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-end">
                            <button onclick="verifikasi" type="button" class="btn btn-success mt-4 end" data-bs-toggle="modal" data-bs-target="#verifikasi">
                                Verifikasi
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button onclick="tolak" type="button" class="btn btn-danger mt-4 end" data-bs-toggle="modal" data-bs-target="#tolak">
                                 Tolak
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End --}}


{{-- Detail Layanan --}}
<div class="modal fade" id="kendaraan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Verifikasi Layanan</h3>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <h5>Nama Vendor</h5>
                            <label>Gudang Aman</label>

                            <h5 class="mt-4">Username</h5>
                            <label for="">Gudang_qq</label>

                            <h5 class="mt-4">Kendaraan yang dilayani</h5>
                            <label for="">5 mobil, 20 motor</label>
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Pemilik</h5>
                            <label for="">Rebecca Howard</label>

                            <h5 class="mt-4">Alamat Penitipan</h5>
                            <label for="">Jl Yos Sudarso No.30</label>

                            <h5 class="mt-4">Luas Tempat</h5>
                            <label for="">100 m x 100 m</label>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mt-4">
                                Foto Tempat
                            </h5>
                            <label for="">Link google drive</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-end">
                            <button onclick="verifikasi" type="button" class="btn btn-success mt-4 end" data-bs-toggle="modal" data-bs-target="#verifikasi">
                                Verifikasi
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button onclick="tolak" type="button" class="btn btn-danger mt-4 end" data-bs-toggle="modal" data-bs-target="#tolak">
                                 Tolak
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End --}}

{{-- Detail Layanan --}}
<div class="modal fade" id="bangunan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Verifikasi Layanan</h3>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <h5>Nama Vendor</h5>
                            <label>Rumah Aman</label>

                            <h5 class="mt-4">Username</h5>
                            <label for="">rumah_mans</label>

                            <h5 class="mt-4">Email</h5>
                            <label for="">beca@gmail.com</label>
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Pemilik</h5>
                            <label for="">Rebecca Howard</label>

                            <h5 class="mt-4">Alamat Penitipan</h5>
                            <label for="">Jl Yos Sudarso No.30</label>

                            <h5 class="mt-4">Nama Penjaga Bangunan</h5>
                            <label for="">Asep Komarudin</label>
                        </div>
                        <div class="col-md-6 mt-4">
                            <h5>
                                Foto Tempat
                            </h5>
                            <label for="">Link google drive</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-end">
                            <button onclick="verifikasi" type="button" class="btn btn-success mt-4 end" data-bs-toggle="modal" data-bs-target="#verifikasi">
                                Verifikasi
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button onclick="tolak" type="button" class="btn btn-danger mt-4 end" data-bs-toggle="modal" data-bs-target="#tolak">
                                 Tolak
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End --}}

{{-- Verifikasi --}}
<div class="modal fade" id="verifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Verifikasi Layanan</h4>
            <div class="modal-body" id="modal-content-detail">
                <form action="" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="card-body text-center">
                        <p>
                            <b>
                                Yakin Verifikasi Layanan
                                 ?
                            </b>
                        </p>
                        <button type="submit" class="btn btn-success btn-sm" >
                            Verifikasi
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Tolak --}}
<div class="modal fade" id="tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Konfirmasi Tolak Layanan</h4>
            <div class="modal-body" id="modal-content-detail">
                <form action="" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="card-body text-center">
                        <p>
                            <b>
                                Alasan Menolak Layanan ?
                            </b>
                        </p>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Alasan"></textarea>
                        <br>
                        <button type="submit" class="btn btn-success btn-sm">
                            Simpan
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


