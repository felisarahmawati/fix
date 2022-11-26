@extends('layouts_admin.main')
@section('content')
<section class="home-section">
    <div class="main">

        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <form action="/admin/verifikasi/pengguna">
                <div class="search2" style="margin-top: 10px;">
                    <label>
                        <label>
                            <input type="text" class="form-control" name="search" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </form>
        </div>

        <!-- top nav -->

        <!-- data list -->
        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Data Pengguna</h2>
                </div>

                <table class="table-borderless mt-3 w-auto">
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>No KTP</td>
                            <td class="text-center">Status</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $pengguna)
                            <tr>
                                <td>{{ $pengguna->name }}</td>
                                <td>{{ $pengguna->email }}</td>
                                <td>{{ $pengguna->no_ktp }}</td>
                                <td class="text-center">
                                    @if ($pengguna->status == 0)
                                    <span class="badge text-bg-y-danger">
                                        Tidak Aktif
                                    </span>
                                    @else
                                    <span class="badge text-bg-success">
                                        Aktif
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail{{$pengguna->id}}"
                                        class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

<div class="modal fade" id="exampleModalDetail{{$pengguna->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Detail {{ $pengguna->name }}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>
                                Nama Lengkap
                            </h5>

                            <label>
                                {{ $pengguna->name }}
                            </label>

                            <h5 class="mt-4">
                                Username
                            </h5>

                            <label>
                                {{ $pengguna->name }}
                            </label>

                            <h5 class="mt-4">
                                Email
                            </h5>

                            <label>
                                {{ $pengguna->email }}
                            </label>
                        </div>

                        <div class="col-md-6">
                            <h5>
                                No KTP
                            </h5>

                            <label>
                                {{ $pengguna->no_ktp }}
                            </label>

                            <h5 class="mt-4">
                                Tempat, Tanggal Lahir
                            </h5>

                            <label>
                                {{ $pengguna->tmpt_lahir }}, {{ $pengguna->tmpt_lahir }}
                            </label>
                        </div>

                        <div class="col-md-12">
                            <p class="text-center">
                                <b>Link google drive</b>
                            </p>
                            <p class="text-center">
                                {{ $pengguna->image_ktp }}
                            </p>
                        </div>
                    </div>

                    {{-- <br> --}}
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
                    {{-- @if ($pengguna->status == 1)
                    @else
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm btn-block">
                                <i class="fa fa-save"></i> Verifikasi
                            </button>
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Verifikasi --}}
<div class="modal fade" id="verifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Verifikasi Pengguna</h4>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body text-center">
                    <p><b> Yakin verifikasi Pengguna ini?</b></p>
                    <button type="button" class="btn btn-success btn-sm" >verifikasi</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End --}}

{{-- Tolak --}}
<div class="modal fade" id="tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Konfirmasi Tolak Pengguna</h4>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body text-center">
                    <p><b>Alasan menolak pengguna ini?</b></p>
                    <form>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Alasan"></textarea>
                    </form>
                    <button type="button" class="btn btn-success btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End --}}

@endsection

