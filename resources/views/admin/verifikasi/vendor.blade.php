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
                    <h2>Data vendor</h2>
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
                        @foreach ($user as $vendor)
                            <tr>
                                <td>{{ $vendor->name }}</td>
                                <td>{{ $vendor->email }}</td>
                                <td>{{ $vendor->kota_kab }}</td>
                                <td>{{ $vendor->kecamatan }}</td>
                                <td>{{ $vendor->kelurahan }}</td>
                                <td class="text-center">
                                    @if ($vendor->status == 0)
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
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail{{$vendor->id}}"
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

        <div class="modal fade" id="exampleModal{{$vendor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 60%">
                <div class="modal-content">
                    <div class="modal-header hader text-center">
                        <h3 class="modal-title" id="exampleModalLabel">Detail Vendor</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-content-detail">
                        <div class="card-body">
                            <form action="{{ url('/superadmin/akun/role/simpan') }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="modal-body" id="modal-content-edit">

                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-times"></i> Batal
                                    </button>
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModalDetail{{$vendor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel"></i> Data <b>{{ $vendor->name }}</b></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                                <form action="{{ url('/admin/verifikasi/vendor/' . $vendor->id . '/aktifkan') }}" method="POST">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label text-right">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" value="{{ $vendor->name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label text-right"> Email </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="email" value="{{ $vendor->email }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kecamatan" class="col-sm-2 col-form-label text-right"> Kecamatan </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kecamatan" value="{{ $vendor->kecamatan }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kota_kabupaten" class="col-sm-2 col-form-label text-right"> Kota / Kabupaten
                                            </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kota_kab"
                                                    value="{{ $vendor->kota_kab }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kelurahan" class="col-sm-2 col-form-label text-right"> Kelurahan
                                            </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kelurahan"
                                                    value="{{ $vendor->kelurahan }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="no_telp" class="col-sm-2 col-form-label text-right">No. Telp</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_telp" value="{{ $vendor->no_telp }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-2 col-form-label text-right">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="alamat" value="{{ $vendor->alamat }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($vendor->status == 1)
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

