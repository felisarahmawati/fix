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

        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h3>Verifikasi Customer</h3>
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
                                <span class="badge badge-danger" style="background-color: orange;">
                                    Tidak Aktif
                                </span>
                                @elseif($pengguna->status == 1)
                                <span class="badge badge-success" style="background-color: green;">
                                    Aktif
                                </span>
                                @else
                                <span class="badge badge-danger" style="background-color: red;">
                                    Ditolak
                                </span>
                                @endif
                            </td>
                            <td>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail{{ $pengguna->id }}"
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
    </div>
</section>

@foreach ($user as $pengguna)
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
                        <div class="col-12">
                            <h5 class="mt-4">
                                Link Google Drive
                            </h5>
                            <label>
                                {{ $pengguna->image_ktp }}
                            </label>
                        </div>
                    </div>

                    {{-- <br> --}}
                    <div class="row">
                        <div class="col-md-6 text-end">
                            <button type="button" class="btn btn-success mt-4 end" data-bs-toggle="modal" data-bs-target="#verifikasi-{{ $pengguna->id }}">
                                Verifikasi
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger mt-4 end" data-bs-toggle="modal" data-bs-target="#tolak-{{ $pengguna->id }}">
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

{{-- Verifikasi --}}
@foreach ($user as $pengguna)
<div class="modal fade" id="verifikasi-{{ $pengguna->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Verifikasi Pengguna</h4>
            <div class="modal-body" id="modal-content-detail">
                <form action="{{ url('/admin/verifikasi/pengguna/'.$pengguna->id.'/aktifkan') }}" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="card-body text-center">
                        <p>
                            <b>
                                Yakin Verifikasi Pengguna
                                {{ $pengguna->name }} ?
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
@endforeach
{{-- End --}}

{{-- Tolak --}}
@foreach ($user as $pengguna)
<div class="modal fade" id="tolak-{{ $pengguna->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Konfirmasi Tolak Pengguna</h4>
            <div class="modal-body" id="modal-content-detail">
                <form action="{{ url('/admin/verifikasi/pengguna/'.$pengguna->id.'/tolak') }}" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="card-body text-center">
                        <p>
                            <b>
                                Alasan Menolak Pengguna {{ $pengguna->name }} ?
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
@endforeach
{{-- End --}}

@endsection

