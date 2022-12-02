@extends("landing.app")

@section("css")

<link rel="stylesheet" href="{{ url('/dist') }}/assets/css/bootstrap.css">
<link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
<link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
<link rel="stylesheet" href="{{ url('/dist') }}/assets/icons/fontawesome/styles.min.css">

@endsection

@section("content")

<div class="page-container">
    <div class="content h-100">
        <div class="row h-100">
            <div class="col-lg-12 mt-4">
                <div class="register card auth-box mx-auto my-auto">
                    <div class="card-block">
                        @if (session('gagal'))
                        <div class="alert alert-danger">
                            {{ session('gagal')}}
                        </div>
                        @endif
                        <h6 class="fw-bold text-start">
                            DAFTAR AKUN BARU
                        </h6>
                        <hr>
                        <form action="{{ url('/register/vendor') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="user-details">
                                <div class="mb-3">
                                    <label for="name" class="form-label">
                                        Nama
                                    </label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama anda">
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">
                                        No Telp
                                    </label>
                                    <input type="number" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan no telepon anda">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">
                                        Email
                                    </label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Type your email address">
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="form-label">
                                        Password
                                    </label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="************">
                                </div>
                            </div>
                            <br>
                            <div class="d-grid gap-2 col-4 mx-auto">
                                <button class="btn btn-success" type="submit">DAFTAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /PAGE CONTENT -->
</div>

@endsection
