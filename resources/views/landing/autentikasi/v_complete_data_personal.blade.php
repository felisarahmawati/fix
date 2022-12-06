@extends("landing.app")

@section("css")

<link rel="stylesheet" href="{{ url('/dist') }}/assets/css/bootstrap.css">
<link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
<link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
<link rel="stylesheet" href="{{ url('/dist') }}/assets/icons/fontawesome/styles.min.css">

@endsection

@section("content")

<div class="page-container" style="padding-top: 100px;">
    <div class="content h-100">
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="register card auth-box mx-auto">
                    <div class="card-block mt-2">
                        @if (session('Proses'))
                        <div class="alert alert-danger">
                            {{ session('pross')}}
                        </div>
                        @endif
                        <h6 class="card-title fw-bold">Lengkapi Data Diri</h6><hr>
                        <div class="row row-layanan">
                            <form action="{{ url('/register/complete-data-personal') }}" method="POST" class="row">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_user" value="{{ session()->get("id") }}">
                                <div class="col-md-6">
                                    <label for="nama" class="form-label">
                                        Nama Lengkap
                                    </label>
                                    <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Masukkan nama lengkap" value="{{ session()->get("nama") }}" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label for="no_ktp" class="form-label">
                                        No. KTP
                                    </label>
                                    <input type="number" class="form-control" id="no_ktp" name="no_ktp" placeholder="Masukkan No. KTP">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="tmpt_lahir" class="form-label">
                                        Tempat lahir
                                    </label>
                                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="Masukkan tempat lahir">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label for="tgl_lahir" class="form-label">
                                        Tanggal Lahir
                                    </label>
                                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                                </div>

                                <div class="col-12 mt-2">
                                    <label for="alamat" class="form-label">
                                        Alamat
                                    </label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat lengkap">
                                </div>

                                <div class="col-12 mt-2">
                                    <label for="lokasi" class="form-label">
                                        Lokasi
                                    </label>
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan link google maps">
                                </div>

                                <h6 class="card-title fw-bold mt-4">
                                    Lampirkan Dokumen Pendukung
                                </h6>
                                <hr>
                                <div class="col-12 mt-2">
                                    <label for="inputLink" class="form-label">Scan KTP & KK</label>
                                    <input type="text" class="form-control" id="inputLink" name="image_ktp" placeholder="Masukkan link google drive">
                                </div>

                                <div class="d-grid gap-2 col-2 mx-auto mt-2">
                                    <button class="btn btn-success" type="submit">DAFTAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
