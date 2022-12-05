@php
use App\Models\Master\Vendor\VendorJasa;
@endphp

@extends('vendor.vendor.dashboard_vendor')

@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container mt-3 mb-4">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="card" style="background-color: #fff;">
                            <div class="card-body">
                                <form action="" method="" class="row g-3 fw-bold">
                                    @csrf
                                    <h5 class="card-title" style="color: rgb(26, 25, 25);">
                                        <b>Lengkapi Data Diri</b>
                                    </h5>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Kelola Layanan
                                    </button>
                                    <div class="alert text-left bg-info" style=" color:#fff;">
                                        <b>
                                            Lengkapi data diri untuk mempercepat verifikasi</b>
                                            <p>Kami melindungi informasi dan penggunaan data diri yang telah anda kirimkan untuk kenyaman pengguna.
                                            </div>
                                            <label for="nama_vendor" class="form-label">Nama Vendor</label>
                                            <input type="text" class="form-control" id="nama_vendor" placeholder="Masukan nama vendor" name="nama_vendor" value="{{ Auth::user()->nama_vendor }}">
                                            <label for="name" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="name" placeholder="Masukan nama lengkap" name="name" value="{{ Auth::user()->name }}">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat anda" name="alamat" value="{{ Auth::user()->alamat }}">
                                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ Auth::user()->tgl_lahir }}">
                                            <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tmpt_lahir" placeholder="Masukan tempat lahir" name="tmpt_lahir" value="{{ Auth::user()->tmpt_lahir }}">
                                            <label for="no_ktp" class="form-label">Nomor KTP *</label>
                                            <input type="text" class="form-control" id="no_ktp" placeholder="Masukan no ktp" name="no_ktp" value="{{ Auth::user()->no_ktp }}">
                                            <label for="lokasi" class="form-label">Lokasi</label><br>
                                            <input type="text" class="form-control" id="lokasi" placeholder="Masukan lokasi anda" name="lokasi" value="{{ Auth::user()->lokasi }}">
                                            <h6 class="card-title fw-bold mt-4">
                                                Lampirkan Dokumen Pendukung
                                            </h6>
                                            <hr>
                                            <div class="col-12 mt-2">
                                                <label for="inputLink" class="form-label">Scan KTP & KK</label>
                                                <input type="text" class="form-control" id="inputLink" name="image_ktp" placeholder="Masukkan link google drive" value="{{ Auth::user()->image_ktp }}">
                                            </div>
                                            <br>
                                            <br>
                                            <div class="d-grid gap-2">
                                                <td class="col-md-2 text-end">
                                                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">Lengkapi</a>
                                                </td>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" style="width: 45%">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Sign Up Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('datadiri.update', Auth::user()->id) }}" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <label for="nama" class="form-label">
                                            <div class="text-danger">Wajib di isi *</div>
                                        </label>
                                        <br>
                                        <label for="nama" class="form-label">Nama Vendor *</label>
                                        <input type="text" class="form-control" id="" placeholder="Masukan nama vendor" name="nama_vendor" value="{{ Auth::user()->nama_vendor }}">
                                        <label for="nama" class="form-label">Nama Lengkap *</label>
                                        <input type="text" class="form-control" id="" placeholder="Masukan nama lengkap" name="name" value="{{ Auth::user()->name }}">
                                        <label for="alamat" class="form-label">Alamat *</label>
                                        <input type="text" class="form-control" id="" placeholder="Masukan alamat anda" name="alamat" value="{{ Auth::user()->alamat }}">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir *</label>
                                        <input type="date" class="form-control" id="" name="tgl_lahir" value="{{ Auth::user()->tgl_lahir }}">
                                        <label for="tmpt_lahir" class="form-label">Tempat Lahir *</label>
                                        <input type="text" class="form-control" id="" placeholder="Masukan tempat lahir" name="tmpt_lahir" value="{{ Auth::user()->tmpt_lahir }}">
                                        <label for="nmr_ktp" class="form-label">Nomor KTP *</label>
                                        <input type="text" class="form-control" id="" placeholder="Masukan no ktp" name="no_ktp" value="{{ Auth::user()->no_ktp }}">
                                        <label for="lokasi" class="form-label">Pilih Lokasi *</label><br>
                                        <input type="text" class="form-control" id="" placeholder="Masukan lokasi anda" name="lokasi" value="{{ Auth::user()->lokasi }}">
                                        <br>
                                        <div class="input-group col-md-8">
                                            <h6 class="card-title fw-bold mt-4">
                                                Lampirkan Dokumen Pendukung
                                            </h6>
                                            <hr>
                                            <div class="col-12 mt-2">
                                                <label for="inputLink" class="form-label">Scan KTP & KK</label>
                                                <input type="text" class="form-control" id="inputLink" name="image_ktp" placeholder="Masukkan link google drive" value="{{ Auth::user()->image_ktp }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Update') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Tambah Data -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                <i class="bi bi-plus"></i> Add Layanan
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('/vendor/login/datadiri') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Jasa</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jasa_layanan as $data)
                                        @php
                                        $vendor_jasa = VendorJasa::where("user_id", Auth::user()->id)
                                        ->where("jasa_layanan_id", $data->id)
                                        ->first();
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $data->jasa }}</td>
                                            <td class="text-center">
                                                @if (empty($vendor_jasa->status))
                                                <form action="{{ url('/vendor/lengkapi-data/tambah-layanan') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="jasa_layanan_id" value="{{ $data->id }}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        Tambah
                                                    </button>
                                                </form>
                                                @else
                                                @if ($vendor_jasa->status == 1)
                                                <form action="{{ url('/vendor/lengkapi-data/non_aktifkan') }}" method="POST">
                                                    @method("PUT")
                                                    @csrf
                                                    <input type="hidden" name="jasa_layanan_id" value="{{ $vendor_jasa->jasa_layanan_id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        Non - Aktifkan
                                                    </button>
                                                </form>
                                                @elseif($vendor_jasa->status == 0)
                                                <form action="{{ url('/vendor/lengkapi-data/aktifkan') }}" method="POST">
                                                    @method("PUT")
                                                    @csrf
                                                    <input type="hidden" name="jasa_layanan_id" value="{{ $vendor_jasa->jasa_layanan_id }}">
                                                    <button type="submit" class="btn btn-success btn-sm">
                                                        Aktifkan
                                                    </button>
                                                </form>
                                                @endif
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END -->
            @endsection
