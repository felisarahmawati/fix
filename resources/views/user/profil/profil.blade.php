@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px; padding-left:185px">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include("user.partials.p_customer")
            <div class="col" style="width: 730px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Profile Saya</h5>
                            @if(session()->has('message'))
                                <div class="text-green-600 mb-4">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <hr width="100%" color="#c0c0c0">
                            <form action="" method="POST" class="row g-3 fw-bold px-2 py-2">
                                @method("PATCH")
                                @csrf
                                <div class="col-md-15">
                                    @if($user->photo)
                                        <img src="{{ asset('storage/photoscustomer/'.$user->photo) }}" alt="" style="width: 25%;" class="img-thumbnail rounded mx-auto d-block">
                                    @else
                                        <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="Name" class="form-label">Nama</label>
                                    <input type="text" class="form-control input-text" id="name" placeholder="name" value={{ old ('name', Auth::user()->name ) }} required>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" value={{ old ('email', Auth::user()->email) }} required>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputtgl_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control input-text" id="inputtgl_lahir" placeholder="Tanggal Lahir" value="{{ old ('tgl_lahir', Auth::user()->tgl_lahir) }}" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputno_Telp" class="form-label">Nomor Telepon</label>
                                    <input type="number" class="form-control input-text" id="inputnoTelp" placeholder="No Telp" value="{{ old ('no_telp', Auth::user()->no_telp) }}" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputkota" class="form-label">Asal Kota</label>
                                    <input type="text" class="form-control input-text" id="inputkota" placeholder="Masukkan kota anda" value="{{ old ('kota', Auth::user()->kota_kab) }}" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputkota" class="form-label">Alamat Lengkap</label>
                                    <input type="text" class="form-control input-text" id="inputkota" placeholder="Masukkan kota anda" value="{{ old ('alamat', Auth::user()->alamat) }}" required>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Photo-->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:50%">
            <div class="modal-content px-3 py-3">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"></h3>Profile Saya</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" action="{{ route('profil.update', $user->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    {{-- PERBEDAAN
                        PUT digunakan untuk melakukan update resource ke sebuah server.
                        dengan PUT method bisa mengirimkan secara keseluruhan data atau replace total
                        PATCH digunakan untuk melakukan update resource ke sebuah server.
                        melakukan update secara partial atau hanya separuh data yang di inginkan untuk diupdate
                    --}}
                    @csrf
                    <div class="col md-6">
                        <label for="name" class="col-sm-2 col-form-label">{{ __('Username') }}</label>
                            <div class="col md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col md-6">
                        <label for="email" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                            <div class="col md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col md-6">
                        <label for="tgl_lahir" class="col-sm-2 col-form-label">{{ __('Tanggal Lahir') }}</label>
                            <div class="col md-6">
                                <input id="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ $user->tgl_lahir }}" required autocomplete="tgl_lahir">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col md-6">
                        <label for="no_telp" class="col-sm-2 col-form-label">{{ __('No Telp') }}</label>
                            <div class="col md-6">
                                <input id="no_telp" type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $user->no_telp }}" required autocomplete="no_telp">
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col md-6">
                        <label for="kota_kab" class="col-sm-2 col-form-label">{{ __('Kota') }}</label>
                            <div class="col md-6">
                                <input id="kota_kab" type="text" class="form-control @error('kota_kab') is-invalid @enderror" name="kota_kab" value="{{ $user->kota_kab }}" required autocomplete="kota_kab">
                                @error('kota_kab')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col mb-12">
                        <label for="alamat" class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
                            <div class="col md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="col mb-12">
                        <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Photo') }}</label>
                        <img src="{{ asset('storage/photoscustomer/'.$user->photo) }}" alt="" style="width: 25%;" class="img-thumbnail rounded mx-auto d-block">
                            <br>
                        <div class="col md-6">
                            <input id="photo" type="file" class="form-control" name="photo">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-0">
                        <div class="col-sm-12 mb-4 text-center">
                            <button type="submit" class="btn btn-success col-sm-10">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection
