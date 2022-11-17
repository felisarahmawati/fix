@extends("layouts_super.main")
@section('content')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Vendor</h2>
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
                        <h2>Data Vendor</h2>
                        <a href="{{ url ('/superadmin/vendor/print_pdf') }}"  target="_blank" class="btn btn-thema">Cetak PDF</a>
                    </div>
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
                            @foreach ($user as $data_vendor)
                            <tr>
                                <td>{{ $data_vendor->name }}</td>
                                <td>{{ $data_vendor->no_telp }}</td>
                                <td>{{ $data_vendor->alamat }}</td>
                                <td>{{ $data_vendor->email }}</td>
                                <td class="td" style="text-align: center">
                                    <a href="{{ url('/superadmin/vendor/pdf_vendor/'.$data_vendor->id) }}" target="_blank" class="btn btn-danger btn-sm ">
                                        <i class="bi bi-arrow-down-square"></i>
                                    </a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$data_vendor->id}}"
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
        @foreach ($user as $data_vendor)
        <div class="modal fade" id="exampleModal{{ $data_vendor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 45%">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h2 class="modal-title" id="exampleModalLabel">Data Vendor</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-content-detail">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Nama Vendor</h6>
                                    <label>{{ $data_vendor->nama_vendor }}</label>
                                    <h6 class="mt-4">Username</h6>
                                    <label for="">{{ $data_vendor->name }}</label>
                                    <h6 class="mt-4">Email</h6>
                                    <label for="">{{ $data_vendor->email }}</label>
                                </div>
                                <div class="col-md-6">
                                    <h6>Nama Pemilik</h6>
                                    <label for="">{{ $data_vendor->nama_lengkap }}</label>

                                    <h6 class="mt-4">NIK</h6>
                                    <label for="">{{ $data_vendor->no_ktp }}</label>

                                    <h6 class="mt-4">Tempat, Tanggal Lahir</h6>
                                    <label for="">{{ $data_vendor->tmpt_lahir }}, {{ $data_vendor->tgl_lahir }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <p class="text-center">KTP</p>
                                    <img src="{{ asset('storage/ktp/'.$data_vendor->image_ktp) }}" alt="" style="width: 55%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                                </div>
                                <div class="col-md-6 mt-4">
                                    <p class="text-center">KK</p>
                                    <img src="{{ asset('storage/kk/'.$data_vendor->image_kk) }}" alt="" style="width: 55%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
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
