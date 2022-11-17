
<!DOCTYPE HTML>
<html>

<head>
    <title>Modish - Open Source Admin Dashboard Template</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/core.css">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/icons/fontawesome/styles.min.css">

    <script type="text/javascript" src="{{ url('/dist') }}/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('/dist') }}/lib/js/tether.min.js"></script>
    <script type="text/javascript" src="{{ url('/dist') }}/lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ url('/dist') }}/assets/js/app.min.js"></script>
</head>

<body>
    <div class="page-container">
        <!-- PAGE CONTENT -->
        <div class="content h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="login card auth-box mx-auto my-auto">
                        <div class="card-block text-center">
                            <div class="user-icon">
                                <i class="fa fa-user-circle"></i>
                            </div>

                            <h4 class="text-light">Register</h4>

                            <form action="{{ url('/register') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="user-details">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            <input type="name" name="name" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" aria-describedby="basic-addon1">
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            <input type="email" name="email" class="form-control" placeholder="E-Mail" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            <input type="alamat" name="alamat" class="form-control" placeholder="Alamat" aria-describedby="basic-addon1">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            <input type="desa" name="desa" class="form-control" placeholder="Desa" aria-describedby="basic-addon1">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            <input type="kecamatan" name="kecamatan" class="form-control" placeholder="Kecamatan" aria-describedby="basic-addon1">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            <input type="kota_kabupaten" name="kota_kabupaten" class="form-control" placeholder="Kota/Kabupaten" aria-describedby="basic-addon1">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <select name="id_provinsi" id="id_provinsi">
                                                <option value="">-- Pilih --</option>
                                                @foreach ($data_provinsi as $data)
                                                    <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            <input type="no_telp" name="no_telp" class="form-control" placeholder="No Telepon" aria-describedby="basic-addon1">
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                            <input type="password" name="confirm_password" class="form-control" placeholder="Konfirmasi Password" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </form>

                            <div class="user-links">
                                <a href="#" class="pull-left">Forgot Password?</a>
                                <a href="{{url('/login')}}" class="pull-right">Login</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PAGE CONTENT -->
    </div>
</body>

</html>
