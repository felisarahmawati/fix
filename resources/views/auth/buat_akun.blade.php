<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        {{ config("app_name", "Titipsini.com") }} - Register Application
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <link href="assets/img/ic2.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ url('/assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('/assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/css/components.css">
    <link rel="stylesheet" href="{{ url('/dist') }}/assets/icons/fontawesome/styles.min.css">
    <script type="text/javascript" src="{{ url('/dist') }}/lib/js/tether.min.js"></script>
    <script type="text/javascript" src="{{ url('/dist') }}/lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ url('/dist') }}/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('/dist') }}/assets/js/app.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="{{ url('/assets') }}/css/style.css" rel="stylesheet">

</head>
<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">

                <img src="{{ url('/img/Logo2.png') }}" alt="" width="220px" height="100px">

            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link scrollto active" href="/login">Login<i class="bi bi-box-arrow-in-right"></i></a></li>
                    <li><a class="nav-link scrollto" href="/register">Register<i class="bi bi-box-arrow-right"></i></a></li>

                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <div class="page-container">
        <div class="content h-100">
            <div class="col-md-8 pt-4 mt-4 mb-4 mx-auto">
                <div class="card-block"><br>
                    <div class="card-header">
                        <h5 class="text-center">
                            Register
                        </h5>
                    </div>

                    <form action="{{ url('/post_register') }}" method="POST">
                        @csrf
                        <div class="card-body mt-2">
                            <div class="mb-3 row">
                                <label for="name" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Nama :
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan name" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Email :
                                </label>
                                <div class="col-md-7">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="no_telp" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    No. Telepon :
                                </label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="0" required min="1">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="id_kota_kab" class="form-label col-sm-3 mt-1" style="text-align: right">Kota / Kabupaten :</label>
                                <div class="col-md-7">
                                    <select name="id_kota_kab" class="form-control" id="id_kota_kab">
                                        <option value="">- Pilih Kabupaten-</option>
                                            @foreach ($kota_kab as $item)
                                                <option value="{{ $item["id"] }}">
                                                    {{ $item["name"] }}
                                                </option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="id_kecamatan" class="form-label col-sm-3 mt-1" style="text-align: right">Kecamatan:</label>
                                <div class="col-md-7">
                                    <select name="id_kecamatan" class="form-control" id="id_kecamatan">
                                        <option value="">- Pilih Kecamatan-</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="id_kelurahan" class="form-label col-sm-3 mt-1" style="text-align: right">Desa:</label>
                                <div class="col-md-7">
                                    <select name="id_kelurahan" class="form-control" id="id_kelurahan">
                                        <option value="">- Pilih Desa -</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="alamat" class="form-label col-sm-3 mt-1" style="text-align: right">Alamat :</label>
                                <div class="col-md-7">
                                    <textarea name="alamat" class="form-control" id="alamat" rows="5" placeholder="Masukkan Alamat" required></textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Password :
                                </label>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password2" class="form-label col-sm-3 mt-1" style="text-align: right">
                                    Konfirmasi Password :
                                </label>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Masukkan Konfirmasi Password">
                                </div>
                            </div>
                            {{-- <button type="reset" class="btn btn-danger" style="align-items: center">
                                Batal
                            </button> --}}
                            <div class="d-grid gap-2 col-2 mx-auto">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
        let objek;
        $(document).ready(function() {
            $("#id_kota_kab").change(function() {
                let kota_kab = $("#id_kota_kab").val();
                $.ajax({
                    url: "{{ url('/ambil_kecamatan') }}",
                    type: "GET",
                    data: { data : kota_kab, h : kota_kab },
                    success: function(res, moha) {
                        $("#id_kecamatan").html(res);
                    }
                });
            });
            $("#id_kecamatan").change(function() {
                let kecamatan = $("#id_kecamatan").val();
                $.ajax({
                    url: "{{ url('/ambil_kelurahan') }}",
                    type: "GET",
                    data: { id_kecamatan : kecamatan },
                    success : function (result) {
                        $("#id_kelurahan").html(result);
                    }
                });
            });
        });
    </script>

</body>
</html>
