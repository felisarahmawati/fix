<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Vendor</title>
    <style>
        body {
            padding: 50px;
            margin: 0px;
            font-family: 'Montserrat', sans-serif;
        }
        .title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }
        .title1{
            font-size: 30px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .titipsini {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="title">
        <div class="title1">
            Data Vendor
        </div>
        <div class="titipsini">
            Titipsini.com
        </div>
    </div>
    <br>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h6>Nama Vendor</h6>
                <label>{{ $user->nama_vendor }}</label>
                <h6 class="mt-4">Username</h6>
                <label for="">{{ $user->name }}</label>
                <h6 class="mt-4">Email</h6>
                <label for="">{{ $user->email }}</label>
            </div>
            <div class="col-md-6">
                <h6>Nama Pemilik</h6>
                <label for="">{{ $user->nama_lengkap }}</label>
                <h6 class="mt-4">NIK</h6>
                <label for="">{{ $user->no_ktp }}</label>
                <h6 class="mt-4">Tempat, Tanggal Lahir</h6>
                <label for="">{{ $user->tmpt_lahir }}, {{ $user->tgl_lahir }}</label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mt-4">
                <p class="text-center">KTP</p>
                <img src="{{ public_path('/storage/ktp/'.$user->image_ktp) }}">
            </div>
            <div class="col-md-6 mt-4">
                <p class="text-center">KK</p>
                <img src="{{ public_path('/storage/kk/'.$user->image_kk) }}">
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-md-6 mt-4">
                <p class="text-center">KTP</p>
                <img width="200" src="/storage/ktp/{{ $user->image_ktp }}" alt="">
            </div>
            <div class="col-md-6 mt-4">
                <p class="text-center">KK</p>
                <img width="200" src="/storage/kk/{{ $user->image_kk }}" alt="">
            </div>
        </div> --}}
    </div>
</body>
</html>
{{-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <title>Data Vendor</title> --}}
        <!--CSS-->
        {{-- <link href="{{ url('assets/css/pdf.css') }}" rel="stylesheet">
        <style>
            body {
                padding: 50px;
                margin: 0px;
                font-family: 'Montserrat', sans-serif;
            }
            .title {
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
            }
            .title1{
                font-size: 30px;
                font-weight: bold;
                text-transform: uppercase;
            }
            .titipsini {
                font-size: 20px;
            }
        </style>
    </head>
    <body> --}}
        <!-- Image and text -->
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand " href="#">
                <img src="{{ asset('img/logo2.png') }}" width="250" height="45" class="d-inline-block align-top " alt=""
                style="padding-left: 50px; padding-right:50px;">
            </a>
        </nav>
        <div class="title">
            <div class="title1 mt-3">
                Data Vendor
            </div>
        </div>
        <br>
        @foreach ($user as $user)
        <div class="card-body" style="padding-left: 50px; padding-right:50px">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-3">
                            <b>Nama Vendor</b>
                        </div>
                        <div class="col-9">
                            <p>: {{ $user->nama_vendor }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <b>Username</b>
                        </div>
                        <div class="col-9">
                            <p>: {{ $user->name }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <b>Email</b>
                        </div>
                        <div class="col-9">
                            <p>: {{ $user->email }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-4">
                            <b>Nama Pemilik</b>
                        </div>
                        <div class="col-8">
                            <p>: {{ $user->nama_lengkap }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <b>NIK</b>
                        </div>
                        <div class="col-8">
                            <p>: {{ $user->no_ktp }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <b>Alamat</b>
                        </div>
                        <div class="col-8">
                            <p>: {{ $user->alamat }}</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-4">
                    <p class="text-center">KTP</p>
                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                </div>

                <div class="col-md-6 mt-4">
                    <p class="text-center">KK</p>
                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                </div>
            </div>
        </div>
        @endforeach
    </body>
    </html> --}}
