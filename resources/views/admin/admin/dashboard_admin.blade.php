@extends('Layouts_admin.main')
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <!-- Extend Navbar >> bermasalah khusus dashboard -->
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
            <div class="cardBox" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="numbers"> {{ $counting_user_pengguna }}</div>
                        <div class="cardName">Pengguna</div>
                        <a href="" class="text-end mt-2">Lihat semua</a>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <i class="bi bi-person-fill"></i>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="numbers">40</div>
                        <div class="cardName">Total Pesanan</div>
                        <a href="" class="text-end mt-2">Lihat semua</a>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <i class="bi bi-cart-fill"></i>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="numbers">40</div>
                        <div class="cardName">Penarikan selesai</div>
                        <a href="" class="text-end mt-2">Lihat semua</a>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <i class="bi bi-credit-card-fill"></i>
                    </div>
                </div>
            </div>
            <!-- data list -->
            <div class="details1 mt-3">
                <div class="recentOrders">
                    <div class="row col-md-12 " style="font-size: 15px">
                        <div class="col-md-6  px-2 py-2">
                            <div class="card px-2 py-2">
                                <h2 style="color:#00B56A">Verifikasi Pengguna</h2>
                                <table style="width: auto">
                                    <thead class="text-start">
                                        <tr>
                                            <td>Username</td>
                                            <td>Jenis Pengguna</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody class="text-start">
                                        @foreach ($user as $pengguna)
                                        <tr>
                                            <td>{{ $pengguna->name }}</td>
                                            <td>{{ $pengguna->id_role }}</td>
                                            <td><button type="button" class="btn btn-info text-white"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModalDetail{{ $pengguna->id }}">
                                                    Detail
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 px-2 py-2">
                            <div class="card px-2 py-2">
                                <h2 style="color:#00B56A">Verifikasi Layanan</h2>
                                <table style="width: auto">
                                    <thead class="text-start">
                                        <tr>
                                            <td>Username</td>
                                            <td>Jenis Layanan</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody class="text-start">
                                        <tr>
                                        <tr>
                                            <td>Titipajee</td>
                                            <td>Barang</td>
                                            <td><button type="button" class="btn btn-info text-white"
                                                    data-bs-toggle="modal" data-bs-target="#Barang">
                                                    Detail
                                                </button></td>
                                        </tr>
                                        <tr>
                                            <td>Titipajee</td>
                                            <td>Kendaraan</td>
                                            <td><button type="button" class="btn btn-info text-white"
                                                    data-bs-toggle="modal" data-bs-target="#Kendaraan">
                                                    Detail
                                                </button></td>
                                        </tr>
                                        <tr>
                                            <td>Titipajee</td>
                                            <td>Pickup</td>
                                            <td><button type="button" class="btn btn-info text-white"
                                                    data-bs-toggle="modal" data-bs-target="#Pickup">
                                                    Detail
                                                </button></td>
                                        </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Detail --}}
        @foreach ($user as $pengguna)
        <div class="modal fade" id="exampleModalDetail{{ $pengguna->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 50%" >
                <div class="modal-content">
                    <div class="modal-header hader text-center">
                        <h3 class="modal-title" id="exampleModalLabel">Detail Vendor {{ $pengguna->name }}</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-content-detail">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <h5>Nama Vendor</h5>
                                    <label>{{ $pengguna->nama_vendor }}</label>

                                    <h5 class="mt-4">Username</h5>
                                    <label for="">{{ $pengguna->name }}</label>

                                    <h5 class="mt-4">Email</h5>
                                    <label for="">{{ $pengguna->email }}</label>
                                </div>
                                <div class="col-md-6">
                                    <h5>Nama Pemilik</h5>
                                    <label for="">{{ $pengguna->nama_lengkap }}</label>

                                    <h5 class="mt-4">NIK</h5>
                                    <label for="">{{ $pengguna->no_ktp }}</label>

                                    <h5 class="mt-4">Tempat, Tanggal Lahir</h5>
                                    <label for="">{{ $pengguna->tmpt_lahir }}, {{ $pengguna->tgl_lahir }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <p class="text-center">KTP</p>
                                    <img src="{{ asset('storage/ktp/'.$pengguna->image_ktp) }}" alt="" style="width: 50%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>

                                <div class="col-md-6 mt-4">
                                    <p class="text-center">SKCK</p>
                                    <img src="{{ asset('storage/skck/'.$pengguna->image_skck) }}" alt="" style="width: 50%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6 text-end">
                                    <button onclick="verifikasi" type="button" class="btn btn-success mt-4 end"
                                        data-bs-toggle="modal" data-bs-target="#verifikasi">
                                        Verifikasi
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button onclick="tolak" type="button" class="btn btn-danger mt-4 end"
                                        data-bs-toggle="modal" data-bs-target="#tolak">
                                        Tolak
                                    </button>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
        {{-- End --}}

        {{-- Verifikasi --}}
        <div class="modal fade" id="verifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width:30%">
                <div class="modal-content">
                    <h4 class="modal-title text-center" id="exampleModalLabel">Verifikasi Vendor</h4>
                    <div class="modal-body" id="modal-content-detail">
                        <div class="card-body text-center">
                            <p><b> Yakin verifikasi vendor ini?</b></p>
                            <button type="button" class="btn btn-success btn-sm">verifikasi</button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End --}}

        {{-- Tolak --}}
        <div class="modal fade" id="tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width:30%">
                <div class="modal-content">
                    <h4 class="modal-title text-center" id="exampleModalLabel">Konfirmasi Tolak Pengguna</h4>
                    <div class="modal-body" id="modal-content-detail">
                        <div class="card-body text-center">
                            <p><b>Alasan menolak pengguna ini?</b></p>
                            <form>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Alasan"></textarea>
                            </form>
                            <button type="button" class="btn btn-success btn-sm">verifikasi</button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End --}}


        {{-- Detail Kendaraan --}}
        <div class="modal fade" id="Kendaraan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 60%">
                <div class="modal-content">
                    <div class="modal-header hader text-center">
                        <h3 class="modal-title" id="exampleModalLabel">Detail Vendor</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-content-detail">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <h5>Nama Vendor</h5>
                                    <label>Titipajasay</label>

                                    <h5 class="mt-4">Username</h5>
                                    <label for="">titipajasay</label>

                                    <h5 class="mt-4">Email</h5>
                                    <label for="">titipajasay@gmail.com</label>
                                </div>
                                <div class="col-md-6">
                                    <h5>Nama Pemilik</h5>
                                    <label for="">Alvi nurbaetri</label>

                                    <h5 class="mt-4">NIK</h5>
                                    <label for="">321210987654673</label>

                                    <h5 class="mt-4">Tempat, Tanggal Lahir</h5>
                                    <label for="">Indramayu, 12 September 2007</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Depan</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>

                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Kiri</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Kanan</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Dalam</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-end">
                                    <button onclick="verifikasi" type="button" class="btn btn-success mt-4 end"
                                        data-bs-toggle="modal" data-bs-target="#verifikasi">
                                        Verifikasi
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button onclick="tolak" type="button" class="btn btn-danger mt-4 end"
                                        data-bs-toggle="modal" data-bs-target="#tolak">
                                        Tolak
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End --}}



        {{-- Detail Barang --}}
        <div class="modal fade" id="Barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 60%">
                <div class="modal-content">
                    <div class="modal-header hader text-center">
                        <h3 class="modal-title" id="exampleModalLabel">Detail Vendor</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-content-detail">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <h5>Nama Vendor</h5>
                                    <label>Titipajasay</label>

                                    <h5 class="mt-4">Username</h5>
                                    <label for="">titipajasay</label>

                                    <h5 class="mt-4">Email</h5>
                                    <label for="">titipajasay@gmail.com</label>
                                </div>
                                <div class="col-md-6">
                                    <h5>Nama Pemilik</h5>
                                    <label for="">Alvi nurbaetri</label>

                                    <h5 class="mt-4">NIK</h5>
                                    <label for="">321210987654673</label>

                                    <h5 class="mt-4">Tempat, Tanggal Lahir</h5>
                                    <label for="">Indramayu, 12 September 2007</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Depan</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>

                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Kiri</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Kanan</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Dalam</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-end">
                                    <button onclick="verifikasi" type="button" class="btn btn-success mt-4 end"
                                        data-bs-toggle="modal" data-bs-target="#verifikasi">
                                        Verifikasi
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button onclick="tolak" type="button" class="btn btn-danger mt-4 end"
                                        data-bs-toggle="modal" data-bs-target="#tolak">
                                        Tolak
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End --}}
        {{-- Detail Pickup --}}
        <div class="modal fade" id="Pickup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 60%">
                <div class="modal-content">
                    <div class="modal-header hader text-center">
                        <h3 class="modal-title" id="exampleModalLabel">Detail Vendor</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-content-detail">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <h5>Nama Vendor</h5>
                                    <label>Titipajasay</label>

                                    <h5 class="mt-4">Username</h5>
                                    <label for="">titipajasay</label>

                                    <h5 class="mt-4">Email</h5>
                                    <label for="">titipajasay@gmail.com</label>
                                </div>
                                <div class="col-md-6">
                                    <h5>Nama Pemilik</h5>
                                    <label for="">Alvi nurbaetri</label>

                                    <h5 class="mt-4">NIK</h5>
                                    <label for="">321210987654673</label>

                                    <h5 class="mt-4">Tempat, Tanggal Lahir</h5>
                                    <label for="">Indramayu, 12 September 2007</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Depan</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>

                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Kiri</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Kanan</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                                <div class="col-md-3 mt-4">
                                    <p class="text-center">Dalam</p>
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 100%;"
                                        class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-end">
                                    <button onclick="verifikasi" type="button" class="btn btn-success mt-4 end"
                                        data-bs-toggle="modal" data-bs-target="#verifikasi">
                                        Verifikasi
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button onclick="tolak" type="button" class="btn btn-danger mt-4 end"
                                        data-bs-toggle="modal" data-bs-target="#tolak">
                                        Tolak
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End --}}
    </section>
@endsection
