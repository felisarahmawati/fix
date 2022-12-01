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
                            @foreach ( $user as $lynvendor )
                                <tr>
                                    <td>Hamko Maju</td>
                                    <td>Barang</td>
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
                <h3 class="modal-title" id="exampleModalLabel">Verifikasi Layanan</h3>
                <div class="recentOrders">
                    <div class="cardHeader">
                        <a href="#" class="btn btn-thema">Barang</a>
                    </div>{{-- <button>Barang</button> --}}
                </div>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <h5>Nama Vendor</h5>
                            <label>{{ $lynvendor->nama_vendor }}</label>

                            <h5 class="mt-4">Username</h5>
                            <label for="">{{ $lynvendor->name }}</label>

                            <h5 class="mt-4">Barang yang dilayani</h5>
                            <label for=""></label>
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Pemilik</h5>
                            <label for=""></label>

                            <h5 class="mt-4">Alamat Penitipan</h5>
                            <label for=""></label>

                            <h5 class="mt-4">Luas Tempat</h5>
                            <label for=""></label>
                        </div>
                    </div>
                   <div class="col-md-6">
                    <h5>
                        Foto Tempat
                    </h5>
                    <label for="">Link google drive</label>
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
@endforeach
{{-- End --}}

@endsection


