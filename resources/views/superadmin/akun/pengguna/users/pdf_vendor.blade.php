{{-- <!DOCTYPE html>
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

                <label>{{ $user->name }}</label>
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
    </div>
</body>
</html> --}}

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
            margin-top: 50px;
            font-weight: bold;
            font-size: 30px;
        }
        .text-center{
            width: 50%;
            text-align: center;
            margin-top:30px;
            font-weight: bold;
        }
        .title1 {
            font-size: 30px;
            font-weight: bold;
            text-transform: uppercase;
        }
        /* .titipsini {
            font-size: 20px;
        } */
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(30%, 50%));
            grid-auto-rows: min(25%);
            padding-top: 15px;
            max-width: 100%;
            padding-left: 30px;
            padding-right: 30px;
        }
        .grid-start {
            width: 300px;
        }
        .grid-end {
            width: auto;
        }
        .nav {
            background-color: rgb(227, 229, 231);
        }
        /*
        [class*="col-"] {
            float: left;
            padding-left: 15px;
            width: 50%;
        } */
    </style>
</head>

<body>
    <!-- Image and text -->
    {{-- <nav class="nav navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand " href="#">
            <img src="{{ asset('../../img/Logo2.png') }}" width="200" height="50" class="d-inline-block align-top "
                alt="" style="padding-left: 50px; padding-right:50px; margin-top:5px;">
        </a>
    </nav> --}}
    <div class="title">
        Data Vendor
    </div>

    <br>
    {{-- @foreach ($user as $user) --}}
    <div class="card-body">
        <div class="container">
            <div class="grid-start">
                <div class="container">
                    <div class="grid-start"><b>Nama Vendor</b></div> <!-- 25% -->
                    <div class="grid-start"> : {{ $user->nama_vendor }} </div> <!-- 75% -->
                </div>
                <div class="container">
                    <div class="grid-start">
                        <b>Username</b>
                    </div>
                    <div class="grid-start">
                        : {{ $user->name }}
                    </div>
                </div>
                <div class="container">
                    <div class="grid-start">
                        <b>Email</b>
                    </div>
                    <div class="grid-start">
                        : {{ $user->email }}
                    </div>
                </div>
            </div>
            <div class="grid-start">
                <div class="container">
                    <div class="grid-start">
                        <b>Nama Pemilik</b>
                    </div>
                    <div class="grid-start">
                        : {{ $user->nama_lengkap }}
                    </div>
                </div>
                <div class="container">
                    <div class="grid-start">
                        <b>NIK</b>
                    </div>
                    <div class="grid-start">
                        : {{ $user->no_ktp }}
                    </div>
                </div>
                <div class="container">
                    <div class="grid-start">
                        <b>Alamat</b>
                    </div>
                    <div class="grid-start">
                        : {{ $user->alamat }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="col-6 mt-4">
            <p class="text-center">KTP</p>
            {{-- <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" --}}
                class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
        </div>

        <div class="col-md-6 mt-4">
            <p class="text-center">KK</p>
            {{-- <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" --}}
                class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
        </div>
    </div>
    </div>
    {{-- @endforeach --}}
</body>

</html>
