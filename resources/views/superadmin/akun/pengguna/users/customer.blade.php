@extends("layouts_super.main")
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Customer</h2>
                </div>
                <div class="search2" style="margin-top: 10px;">
                    <label>
                        <input type="text" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>

            <!-- data list -->
            <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader">
                        <h2>Data Customer</h2>
                        <a href="{{ url ('/superadmin/akun/pengguna/users/print_pdf_customer') }}"  target="_blank" class="btn btn-thema"><i class="bi bi-printer p-2"></i>cetak</a>
                    </div>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>No Telp</td>
                                <td>Alamat</td>
                                <td>Email</td>
                                <td style="text-align: center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data_customer)
                            <tr>
                                <td>{{ $data_customer->name }}</td>
                                <td>{{ $data_customer->no_telp }}</td>
                                <td>{{ $data_customer->alamat }}</td>
                                <td>{{ $data_customer->email }}</td>

                                <td class="td" style="text-align: center">
                                    <a href="{{ url('/superadmin/akun/pengguna/users/pdf_vendor/'.$data_customer->id) }}" target="_blank" class="btn btn-danger btn-sm "><i class="bi bi-printer p-2"></i></a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data_customer->id}}"
                                        class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        @foreach ($user as $data_customer)
        <div class="modal fade" id="exampleModal{{ $data_customer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 45%">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h2 class="modal-title" id="exampleModalLabel">Data Customer</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-content-detail">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label text-right">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" value="{{ $data_customer->name }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label text-right"> Email </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" value="{{ $data_customer->email }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kecamatan" class="col-sm-2 col-form-label text-right"> Kecamatan </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kecamatan" value="{{ $data_customer->kecamatan }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kota_kabupaten" class="col-sm-2 col-form-label text-right"> Kota / Kabupaten
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kota_kab"
                                        value="{{ $data_customer->kota_kab }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kelurahan" class="col-sm-2 col-form-label text-right"> Kelurahan
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kelurahan"
                                        value="{{ $data_customer->kelurahan }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_telp" class="col-sm-2 col-form-label text-right">No. Telp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_telp" value="{{ $data_customer->no_telp }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label text-right">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" value="{{ $data_customer->alamat }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-md-block">
                            {{-- <button type="button" class="btn-sm btn-primary">Edit</button> --}}
                            <button type="button" class="btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection
