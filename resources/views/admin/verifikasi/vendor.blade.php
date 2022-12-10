@extends('layouts_admin.main')

@section('content')

<section class="home-section">
    <div class="main">

        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <!-- Search -->
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
                    <h3>Verifikasi vendor</h3>
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
                                <td>{{ empty($vendor->kota_kab) ? "Kosong" : $vendor->kota_kab }}</td>
                                <td>{{ empty($vendor->kecamatan) ? "Kosong" : $vendor->kecamatan }}</td>
                                <td>{{ empty($vendor->kelurahan) ? "Kosong" : $vendor->kelurahan }}</td>
                                <td class="text-center">
                                    @if ($vendor->status == 0)
                                    <span class="badge badge-danger" style="background-color: red;">
                                        Tidak Aktif
                                    </span>
                                    @elseif($vendor->status == 1)
                                    <span class="badge badge-success" style="background-color: green;">
                                        Aktif
                                    </span>
                                    @else
                                    <span class="badge badge-success" style="background-color: orange;">
                                        Ditolak
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail{{$vendor->id}}" class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button> --}}
                                    <button type="button" class="btndetail" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class='bx bx-detail'></i>
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

{{-- <div class="modal fade" id="exampleModalDetail{{$vendor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <input type="text" class="form-control" id="kecamatan" value="{{ empty($vendor->kecamatan) ? 'Kosong' : $vendor->kecamatan }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kota_kabupaten" class="col-sm-2 col-form-label text-right"> Kota / Kabupaten
                                            </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kota_kab"
                                                    value="{{ empty($vendor->kota_kab) ? "Kosong" : $vendor->kota_kab }}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kelurahan" class="col-sm-2 col-form-label text-right"> Kelurahan
                                            </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kelurahan"
                                                    value="{{ empty($vendor->kelurahan) ? "Kosong" : $vendor->kelurahan }}" readonly>
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
</div> --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Data Vendor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Nama Vendor</h5>
                    <label>Hamkoo</label>

                    <h5 class="mt-4">Email</h5>
                    <label>hamko29@gmail.com</label>

                    <h5 class="mt-4">Kecamatan</h5>
                    <label>Banguntapan</label>
                </div>
                <div class="col-md-6">
                    <h5>Kota / Kabupaten</h5>
                    <label>Bantul</label>

                    <h5 class="mt-4">Kelurahan</h5>
                    <label>Karang Jambe</label>

                    <h5 class="mt-4">No Telp</h5>
                    <label>0821312412412</label>
                </div>
                <div class="col-md-12">
                    <h5 class="mt-4">Alamat</h5>
                    <label>Jln Raya Janti. Banguntapan,Yogyakarta</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-end">
                    <button type="button" class="btn btn-success mt-4 end" data-bs-toggle="modal" data-bs-target="#verifikasi">
                        Verifikasi
                    </button>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-danger mt-4 end" data-bs-toggle="modal" data-bs-target="#tolak">
                        Tolak
                    </button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="verifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Verifikasi Vendor</h4>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body text-center">
                    <p>
                        <b>
                            Yakin Verifikasi Vendor
                            Hamkoo ?
                        </b>
                    </p>
                    <button type="submit" class="btn btn-success btn-sm" >
                        Verifikasi
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Konfirmasi Tolak Vendor</h4>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body text-center">
                    <p>
                        <b>
                            Alasan Menolak Vendor Hamkoo ?
                        </b>
                    </p>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Alasan"></textarea>
                    <br>
                    <button type="submit" class="btn btn-success btn-sm">
                        Simpan
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

