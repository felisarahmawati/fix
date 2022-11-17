@extends('vendor.vendor.dashboard_vendor')
@section('container')
    <section class="home-section">

        <div class="main">
            {{-- @include('admin.profile.partials') --}}
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 ms-4">
                        <p class="mb-0">Lengkapi Data Diri</p>
                        <h3>{{ Auth::user()->name }}</h3>
                    </div>
                </div>



                    <div class="col-lg-8 col-md-6 mt-4 pe-2 ps-2 mb-5">
                        <div class="card-profile d-flex flex-column px-0 py-4" style="font-size: 18px">
                            <div class="id-user px-3">
                                <h6 class="mb-0 fw-bold float-left">Account ID {{Auth::user()->id}}</h6>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class=" p-3">
                                <form action="" method="POST" class="row g-3 fw-bold">
                                    @method("PATCH")
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail"
                                            value="{{ old('email', Auth::user()->email )}}">
                                        @error('email')
                                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control input-text" id="username"
                                        value="{{ old('name', Auth::user()->name) }}">
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <label for="no_telp" class="form-label">No Telepon</label>
                                        <input type="text" class="form-control input-text" id="no_telp"
                                            value="{{ old('no_telp', Auth::user()->no_telp) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control input-text" id="tgl_lahir"
                                        value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}">
                                    </div> --}}
                                    <div class="col-12">
                                        <label for="inputAlamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control input-text" id="inputAlamat"
                                        value="{{ old('alamat', Auth::user()->alamat) }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputkelurahan" class="form-label">Desa</label>
                                        <input type="text" class="form-control input-text" id="inputkelurahan" value="{{ old('kelurahan', Auth::user()->kelurahan) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputKecamatan" class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control input-text" id="inputKecamatan" value="{{ old('kecamatan', Auth::user()->kecamatan) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputkota_kab" class="form-label">kota</label>
                                        <input type="text" class="form-control input-text" id="inputkota_kab"
                                        value="{{ old('kota_kab', Auth::user()->kota_kab) }}">
                                    </div>
                                    <br>
                                    {{-- <div class="col mb-2">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update') }}
                                            </button>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Form Edit User Profile --}}
                </div>
                {{-- End User Profile --}}
            </div>


            {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header hader">
                            <h2 class="modal-title" id="exampleModalLabel">Data Vendor</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label class="label">ID Vendor</label></label>
                            <input type="text" class="form-control" id="id" value="{{ $data_vendor->id }}">
                            <label class="label">Nama Vendor</label>
                            <input type="text" class="form-control" id="namavendor" value="{{ $data_vendor->name }}">
                            <label class="label">Nama Pemilik</label>
                            <input type="text" class="form-control" id="nama" value="{{ $data_vendor->name }}">
                            <label class="label">Username</label>
                            <input type="text" class="form-control" id="username" value="{{ $data_vendor->name }}">
                            <label class="label">Saldo</label>
                            <input type="text" class="form-control" id="saldo" placeholder="Rp 10,000,000">

                            <div class="kk">
                                <h4>Scan KK & KTP</h4>
                                <img src="{{ asset('assets/img/kaka.png') }}">
                                <img src="{{ asset('assets/img/kttp.png') }}" style="margin-left: 20px;">
                            </div>
                        </div>
                        <div class="modal-footer d-md-block">
                            <button type="button" class="btn-sm btn-primary">Edit</button>
                            <button type="button" class="btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    @endsection
