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
                            @foreach ( $user as $lynvendor )
                                <tr>
                                    <td>{{ $lynvendor->nama_vendor }}</td>
                                    <td>{{ $lynvendor->layanan }}</td>
                                    <td>{{ $lynvendor->alamat }}</td>
                                    <td class="td" style="text-align: center">
                                        <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Bangunan{{ $lynvendor->id }}">
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

{{-- Detail Layanan --}}
@foreach ($user as $lynvendor)
    <div class="modal fade" id="Bangunan{{ $lynvendor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Detail Vendor</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <h5>Nama Vendor</h5>
                            <label>{{ $lynvendor->nama_vendor }}</label>

                            <h5 class="mt-4">Username</h5>
                            <label for="">{{ $lynvendor->name }}</label>

                            <h5 class="mt-4">Email</h5>
                            <label for="">{{ $lynvendor->email }}</label>
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Pemilik</h5>
                            <label for="">{{ $lynvendor->nama_lengkap }}</label>

                            <h5 class="mt-4">NIK</h5>
                            <label for="">{{ $lynvendor->no_ktp }}</label>

                            <h5 class="mt-4">Tempat, Tanggal Lahir</h5>
                            <label for="">{{ $lynvendor->tmpt_lahir }}, {{ $lynvendor->tgl_lahir }}</label>
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
            <div class="modal-footer d-md-block">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- End --}}

@endsection


