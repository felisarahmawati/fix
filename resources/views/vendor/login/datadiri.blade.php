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
                <div class="container mt-3 mb-4">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="card" style="background-color: #fff;">
                                <div class="card-body">
                                    <form action="" method="" class="row g-3 fw-bold">
                                        @method("PATCH")
                                        @csrf
                                        {{-- <div class="col-md-12">
                                            <label for="inputname" class="form-label">Nama Vendor</label>
                                            <input type="text" class="form-control input-text" id="inputname"
                                                value="{{ old('nama_vendor', Auth::user()->nama_vendor) }}">
                                            @error('name')
                                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputname" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control input-text" id="inputname"
                                                value="{{ old('nama_lengkap', Auth::user()->nama_lengkap) }}">
                                            @error('name')
                                                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="inputAlamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control input-text" id="inputAlamat"
                                            value="{{ $user->alamat }}">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputtgl_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="text" class="form-control input-text" id="inputtgl_lahir" value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputTempatlahir" class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control input-text" id="inputTempatlahir" value="{{ old('tmpt_lahir', Auth::user()->tmpt_lahir) }}">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="inputno_ktp" class="form-label">No KTP</label>
                                            <input type="text" class="form-control input-text" id="inputno_ktp"
                                            value="{{ old('no_ktp', Auth::user()->no_ktp) }}" >
                                        </div>

                                        <div class="col-md-12">
                                            <label for="lokasi" class="form-label">Lokasi</label><br>
                                            <input type="text" class="form-control input-text" id="inputlokasi" name="lokasi"
                                            value="{{ old('lokasi', Auth::user()->lokasi) }}">

                                            <label for="scan" class="form-label">Scan KTP, Scan KK $ SKCK</label>
                                        </div>

                                        <div class="input-group col-md-8">
                                            <div class="input-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        @if(Auth::user()->image_ktp)
                                                        <img src="{{ asset('storage/ktp/'.Auth::user()->image_ktp) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                        @else
                                                            <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        @if(Auth::user()->image_kk)
                                                        <img src="{{ asset('storage/kk/'.Auth::user()->image_kk) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                    @else
                                                        <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                    @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        @if(Auth::user()->image_skck)
                                                        <img src="{{ asset('storage/skck/'.Auth::user()->image_skck) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                    @else
                                                        <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <h5 class="card-title" style="color: rgb(26, 25, 25);"><b>Lengkapi Data Diri</b></h5>
                                    <div class="alert text-left bg-info" style=" color:#fff;">
                                        <b>Lengkapi data diri untuk mempercepat verifikasi</b> <p>Kami melindungi informasi dan penggunaan data diri yang
                                            telah anda kirimkan untuk kenyaman pengguna.
                                    </div>
                                    {{-- <label for="nama" class="form-label"><div class="text-danger">Wajib di isi *</div></label><br> --}}
                                    <label for="nama" class="form-label">Nama Vendor</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan nama vendor" name="nama_vendor" value="{{ $user->nama_vendor }}">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan nama lengkap" name="nama_lengkap" value="{{ $user->nama_lengkap }}">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan alamat anda" name="alamat" value="{{ $user->alamat }}">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="" name="tgl_lahir" value="{{ $user->tgl_lahir }}">
                                    <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan tempat lahir" name="tmpt_lahir" value="{{ $user->tmpt_lahir }}">
                                    <label for="nmr_ktp" class="form-label">Nomor KTP *</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan no ktp" name="no_ktp" value="{{ $user->no_ktp }}">
                                    <label for="lokasi" class="form-label">Lokasi</label><br>
                                    <input type="text" class="form-control" id="" placeholder="Masukan lokasi anda" name="lokasi" value="{{ $user->lokasi }}">
                                    {{-- <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                                    title="%3$s" aria-label="%3$s" frameborder="0"></iframe> --}}
                                    <br>
                                    <label for="dokumen" class="form-label">Dokumen Pelengkap</label>
                                    <div class="alert text-left bg-info" style=" color:#fff;">
                                        <b>Lengkapi data diri untuk mempercepat verifikasi</b> <p>Kami melindungi informasi dan penggunaan data diri yang
                                        telah anda kirimkan untuk kenyaman pengguna.
                                    </div>
                                    <label for="scan" class="form-label">Scan KTP, Scan KK & SKCK </label>
                                    <div class="input-group col-md-8">
                                        <div class="input-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- <img src="{{ asset('assets/img/placehold.jpg') }}" id="showgambar" style="max-width:200px;max-height:200px;float:left;margin-bottom: 10px;" />
                                                    <input type="file" id="inputktp" class="form-control validate" name="scan1" required> --}}
                                                    <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Scan KTP') }}</label>
                                                        <img src="{{ asset('storage/ktp/'.$user->image_ktp) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                        <br>
                                                    <div class="col mb-6">
                                                        <input id="image_ktp" type="file" class="form-control" name="image_ktp">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- <img src="{{ asset('assets/img/placehold.jpg') }}" id="showgambar1" style="max-width:200px;max-height:200px;float:left;margin-bottom: 10px;" />
                                                    <input type="file" id="inputkk" class="form-control validate" name="scan2" required> --}}
                                                    <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Scan KK') }}</label>
                                                        <img src="{{ asset('storage/kk/'.$user->image_kk) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                        <br>
                                                    <div class="col mb-6">
                                                        <input id="image_kk" type="file" class="form-control" name="image_kk">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- <img src="{{ asset('assets/img/placehold.jpg') }}" id="showgambar1" style="max-width:200px;max-height:200px;float:left;margin-bottom: 10px;" />
                                                    <input type="file" id="inputkk" class="form-control validate" name="scan2" required> --}}
                                                    <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Scan SKCK') }}</label>
                                                        <img src="{{ asset('storage/skck/'.$user->image_skck) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                        <br>
                                                    <div class="col mb-6">
                                                        <input id="image_skck" type="file" class="form-control" name="image_skck">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                <form method="POST" action="{{ route('datadiri.update', $user->id) }}" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                {{-- <h5 class="card-title" style="color: rgb(26, 25, 25);"><b>Lengkapi Data Diri</b></h5> --}}
                                    {{-- <div class="alert text-left bg-info" style=" color:#fff;">
                                        <b>Lengkapi data diri untuk mempercepat verifikasi</b> <p>Kami melindungi informasi dan penggunaan data diri yang
                                            telah anda kirimkan untuk kenyaman pengguna.
                                    </div> --}}
                                    <label for="nama" class="form-label"><div class="text-danger">Wajib di isi *</div></label><br>
                                    <label for="nama" class="form-label">Nama Vendor *</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan nama vendor" name="nama_vendor" value="{{ $user->nama_vendor }}">
                                    <label for="nama" class="form-label">Nama Lengkap *</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan nama lengkap" name="nama_lengkap" value="{{ $user->nama_lengkap }}">
                                    <label for="alamat" class="form-label">Alamat *</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan alamat anda" name="alamat" value="{{ $user->alamat }}">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir *</label>
                                    <input type="date" class="form-control" id="" name="tgl_lahir" value="{{ $user->tgl_lahir }}">
                                    <label for="tmpt_lahir" class="form-label">Tempat Lahir *</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan tempat lahir" name="tmpt_lahir" value="{{ $user->tmpt_lahir }}">
                                    <label for="nmr_ktp" class="form-label">Nomor KTP *</label>
                                    <input type="text" class="form-control" id="" placeholder="Masukan no ktp" name="no_ktp" value="{{ $user->no_ktp }}">
                                    <label for="lokasi" class="form-label">Pilih Lokasi *</label><br>
                                    <input type="text" class="form-control" id="" placeholder="Masukan lokasi anda" name="lokasi" value="{{ $user->lokasi }}">
                                    {{-- <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                                    title="%3$s" aria-label="%3$s" frameborder="0"></iframe> --}}
                                    <br>
                                    <label for="dokumen" class="form-label">Dokumen Pelengkap *</label>
                                    <div class="alert text-left bg-info" style=" color:#fff;">
                                        <b>Lengkapi data diri untuk mempercepat verifikasi</b> <p>Kami melindungi informasi dan penggunaan data diri yang
                                        telah anda kirimkan untuk kenyaman pengguna.
                                    </div>
                                    <label for="scan" class="form-label">Scan KTP, Scan KK & SKCK </label>
                                    <div class="input-group col-md-8">
                                        <div class="input-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- <img src="{{ asset('assets/img/placehold.jpg') }}" id="showgambar" style="max-width:200px;max-height:200px;float:left;margin-bottom: 10px;" />
                                                    <input type="file" id="inputktp" class="form-control validate" name="scan1" required> --}}
                                                    <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Scan KTP') }}</label>
                                                        <img src="{{ asset('storage/ktp/'.$user->image_ktp) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                        <br>
                                                    <div class="col mb-6">
                                                        <input id="image_ktp" type="file" class="form-control" name="image_ktp">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- <img src="{{ asset('assets/img/placehold.jpg') }}" id="showgambar1" style="max-width:200px;max-height:200px;float:left;margin-bottom: 10px;" />
                                                    <input type="file" id="inputkk" class="form-control validate" name="scan2" required> --}}
                                                    <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Scan KK') }}</label>
                                                        <img src="{{ asset('storage/kk/'.$user->image_kk) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                        <br>
                                                    <div class="col mb-6">
                                                        <input id="image_kk" type="file" class="form-control" name="image_kk">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- <img src="{{ asset('assets/img/placehold.jpg') }}" id="showgambar1" style="max-width:200px;max-height:200px;float:left;margin-bottom: 10px;" />
                                                    <input type="file" id="inputkk" class="form-control validate" name="scan2" required> --}}
                                                    <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Scan SKCK') }}</label>
                                                        <img src="{{ asset('storage/skck/'.$user->image_skck) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                                        <br>
                                                    <div class="col mb-6">
                                                        <input id="image_skck" type="file" class="form-control" name="image_skck">
                                                    </div>
                                                </div>
                                            </div>
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
@endsection
