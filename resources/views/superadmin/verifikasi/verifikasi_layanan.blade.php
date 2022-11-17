@extends('layouts_super.main')
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
                        <h2>Data Verifikasi Layanan</h2>
                    </div>
                    <table class="table-borderless mt-3 w-auto">
                        <thead class="text-start">
                            <tr>
                                <td>Nama Vendor</td>
                                <td>Layanan</td>
                                <td>Alamat</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="text-start">
                            @foreach($data_lyn as $lyn)
                            <tr>
                                <td>{{ $lyn->nama_vendor }}</td>
                                <td>{{ $lyn->layanan }}</td>
                                <td>{{ $lyn->alamat }}</td>
                                <td style="size: 20px;">
                                    <div class="row">
                                        <div class="col-md-5 text-end">
                                            <button onclick="" type="button" class="btndetail" data-bs-toggle="modal" data-bs-target="#exampleModalDetail{{ $lyn->id }}">
                                                Detail
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

{{-- Detail Kendaraan --}}
@foreach ($data_lyn as $lyn)
<div class="modal fade" id="exampleModalDetail{{ $lyn->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Detail Layanan Vendor</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <h5>Nama Vendor</h5>
                            <label>{{ $lyn->nama_vendor }}</label>

                            <h5 class="mt-4">Username</h5>
                            <label for="">{{ $lyn->name }}</label>

                            <h5 class="mt-4">Email</h5>
                            <label for="">{{ $lyn->email }}</label>
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Pemilik</h5>
                            <label for="">{{ $lyn->nama_lengkap }}</label>

                            <h5 class="mt-4">NIK</h5>
                            <label for="">{{ $lyn->no_ktp }}</label>

                            <h5 class="mt-4">Tempat, Tanggal Lahir</h5>
                            <label for="">{{ $lyn->tmpt_lahir }}, {{ $lyn->tgl_lahir }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mt-4">
                            <p class="text-center">Depan</p>
                            <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                        </div>

                        <div class="col-md-3 mt-4">
                            <p class="text-center">Kiri</p>
                            <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                        </div>
                        <div class="col-md-3 mt-4">
                            <p class="text-center">Kanan</p>
                            <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                        </div>
                        <div class="col-md-3 mt-4">
                            <p class="text-center">Dalam</p>
                            <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                        </div>
                    </div>
                    {{-- <div class="row">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- End --}}
@endsection


