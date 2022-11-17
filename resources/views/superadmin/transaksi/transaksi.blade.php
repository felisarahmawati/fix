@extends("layouts_super.main")
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="cardHeader-title">
                <h2>Data Transaksi</h2>
            </div>
            <!-- Search -->
            <div class="search mb-2" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Transaksi User</h2>
                    <a href="#" class="btn btn-thema" data-bs-toggle="modal" data-bs-target="#exampleModal">Filter By </a>

                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form class="form"  type="date">
                            <div class="row">
                                <div class="col-4 mb-3">
                                    <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Dari Tanggal</p>
                                    <input type="date" class="form-control" id="tanggal">
                                </div>
                                <div class="col-4 mb-3" style="margin-left: 35px">
                                    <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Sampai Tanggal</p>
                                    <input type="date" class="form-control" id="tanggal">
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="#" class="btn btn-thema"><i class="bi bi-printer p-2"></i>cetak</a>
                    </div>
                </div>
                <table class="table-borderless mt-1 w-auto">
                    <thead>
                        <tr>
                            <td>Username</td>
                            <td>ID Transaksi</td>
                            <td>Tanggal</td>
                            <td>Metode Pembayaran</td>
                            <td>Alamat</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Samantha william</td>
                            <td>T120917243434</td>
                            <td>15/05/2022</td>
                            <td>Transfer Bank</td>
                            <td>Jl.Setiabudi no.18, Jakarta Pusat</td>
                            <td>
                                <p class="mt-3"><i class="bi bi-circle-fill p-2 text-warning"></i>Berlangsung
                                </p>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Bently</td>
                            <td>T120917243477</td>
                            <td>16/05/2022</td>
                            <td>COD</td>
                            <td>Jl.Setiabudi no.18, Jakarta Pusat</td>
                            <td>
                                <p class="mt-3"><i class="bi bi-circle-fill p-2 text-success"></i>Selesai
                                </p>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                    Detail
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Lucass</td>
                            <td>T120917243454</td>
                            <td>18/05/2022</td>
                            <td>COD</td>
                            <td>Jl.Setiabudi no.18, Jakarta Pusat</td>

                            <td>
                                <p class="mt-3"><i class="bi bi-circle-fill p-2 text-danger"></i>Gagal
                                </p>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                    Detail
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal tambah data -->
    {{-- <div class="modal fade" id="Modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Tambah data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Tanggal</label>
                            <input type="date" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">ID Transaksi</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="1234567">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">ID User</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="1233333">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Jenis Transaksi</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Pick up">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Harga</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp200.000">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- modal detail --}}
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('assets/img/Rectangle 77.png') }}" class="img-detail rounded mx-auto d-block" alt="image">
                    <p class="penitipan text-center" style="padding-top: 20px"><b>17/05/2022 08:30:00 WIB</b></p>
                    <div class="row">
                        <div class="col-md">
                            <p>Username</p>
                        </div>
                        <div class="col-md-5 text-end">
                            Bently
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md">
                            <p>Alamat</p>
                        </div>
                        <div class="col-md-5 text-end">
                            Jl. Setiabudi no.18, Jakarta Pusat
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>ID Customer</p>
                        </div>
                        <div class="col-md-5 text-end">
                            T873547625332
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>ID Transaksi</p>
                        </div>
                        <div class="col-md-5 text-end">
                            TWI3U43Y2R3
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Metode Pembayaran</p>
                        </div>
                        <div class="col-md-5 text-end">
                            Transfer Bank
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Jenis Layanan</p>
                        </div>
                        <div class="col-md-5 text-end">
                            Kendaraan
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Durasi Penitipan</p>
                        </div>
                        <div class="col-md-5 text-end">
                            2 Hari
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Quantity</p>
                        </div>
                        <div class="col-md-5 text-end">
                            1
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <p>Harga Penitipan</p>
                        </div>
                        <div class="col-md-5 text-end">
                            Rp 200.000/Hari
                        </div>
                    </div>


                    <hr>
                    <div class="row" style="font-size: 25px; color:rgb(58, 214, 108)">
                        <div class="col-md">
                            <p><b>Total</b></p>
                        </div>
                        <div class="col-md-5 text-end">
                            <b>400.000</b>
                        </div>
                    </div>
                    {{--
                    <p class="bukti text-center" style="padding-top: 20px">
                        <b>Anda dapat menyimpan tanda terima ini sebagai bukti transaksi
                            yang sah<b>
                    </p>
                    <div class="modal-footer">
                        <button class="btn btn-success col-sm-12" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal">Update</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Update data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Tanggal</label>
                            <input type="date" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">ID Transaksi</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="1234567">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">ID User</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="1233333">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Jenis Transaksi</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Pick up">
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Harga</label>
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp200.000">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> --}}

    <!-- Modal filter by -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 30%">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="filter" class="form-label">FILTER BERDASARKAN STATUS</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            On process
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            Done
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cancel
                        </label>
                    </div><br>
                    <label for="filter" class="form-label">FILTER BERDASARKAN RENTANG WAKTU</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        <label class="form-check-label" for="flexRadioDefault1">
                            Enable
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Terbaru</option>
                                <option value="1">Terlama</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Perbulan</option>
                                <option value="1">Perminggu</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" style="width: 100%">OK</button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('java')
<!-- DataTables -->
<script src="{!! asset('bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
<script type="text/javascript">
    $(function() {
        $('#example1').DataTable()
    })
</script>
@endsection
