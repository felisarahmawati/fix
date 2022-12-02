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
                            <td>Kota / Kabupaten</td>
                            <td>Kecamatan</td>
                            <td>Desa</td>
                            <td>Status</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $pengguna)
                            <tr>
                                <td>{{ $pengguna->name }}</td>
                                <td>{{ $pengguna->email }}</td>
                                <td>{{ $pengguna->kota_kab }}</td>
                                <td>{{ $pengguna->kecamatan }}</td>
                                <td>{{ $pengguna->kelurahan }}</td>
                                <td class="text-center">
                                    @if ($pengguna->status == 0)
                                    <span class="badge badge-danger">
                                        Tidak Aktif
                                    </span>
                                    @else
                                    <span class="badge badge-success">
                                        Aktif
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail{{$pengguna->id}}" class="btndetail">
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel"></i> Data <b>{{ $pengguna->name }}</b></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                                <form action="{{ url('/admin/verifikasi/pengguna/' . $pengguna->id . '/aktifkan') }}" method="POST">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-4">
                                            <h5>Nama</h5>
                                        </div>
                                        <div class="col-8">
                                            <label>{{ $pengguna->name }}</label>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <h5>Email</h5>
                                        </div>
                                        <div class="col-8 mt-3">
                                            <label>{{ $pengguna->email }}</label>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <h5>Kecamatan</h5>
                                        </div>
                                        <div class="col-8 mt-3">
                                            <label>{{ $pengguna->kecamatan }}</label>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <h5>Kota/Kabupaten</h5>
                                        </div>
                                        <div class="col-8 mt-3">
                                            <label>{{ $pengguna->kota_kab }}</label>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <h5>Kelurahan</h5>
                                        </div>
                                        <div class="col-8 mt-3">
                                            <label>{{ $pengguna->kelurahan }}</label>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <h5>No. Telp</h5>
                                        </div>
                                        <div class="col-8 mt-3">
                                            <label>{{ $pengguna->no_telp }}</label>
                                        </div>
                                        <div class="col-4 mt-3">
                                            <h5>Alamat</h5>
                                        </div>
                                        <div class="col-8 mt-3">
                                            <label>{{ $pengguna->alamat }}</label>
                                        </div>
                                    </div>
                                    @if ($pengguna->status == 1)
                                    @else
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm btn-block">
                                                <i class="fa fa-save"></i> Aktifkan Akun
                                            </button>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

