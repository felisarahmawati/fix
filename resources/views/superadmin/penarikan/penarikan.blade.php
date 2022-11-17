@extends("layouts_super.main")
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="cardHeader-title">
                <h2>Data Penarikan</h2>
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
                    <h2>Data Penarikan Vendor</h2>
                    <a href="#" class="btn btn-thema" data-bs-toggle="modal" data-bs-target="#Filter">Filter
                        By</a>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <form class="form" type="date">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="date" class="btn btn-outline-secondary">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="btn btn-outline-secondary">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 text-end">
                        <a href="#" class="btn btn-thema"><i class="bi bi-printer p-2"></i>cetak</a>
                    </div>
                </div>
                <table class="table-borderless mt-3 w-auto">
                    <thead>
                        <tr>
                            <td>Nama Vendor</td>
                            <td>ID Transaksi</td>
                            <td>Jenis rekening</td>
                            <td>Tanggal</td>
                            <td>Jumlah Penarikan</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bently</td>
                            <td>T120917243434</td>
                            <td>Bank BCA</td>
                            <td>15/10/2022</td>
                            <td>Rp 200.000</td>
                            <td class="text-end">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                    data-bs-target="#DetailUser">
                                    Detail
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>William</td>
                            <td>T120917243434</td>
                            <td>Bank BRI</td>
                            <td>15/10/2022</td>
                            <td>Rp 200.000</td>
                            <td class="text-end">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                    data-bs-target="#DetailUser">
                                    Detail
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>Justine</td>
                            <td>T120917243434</td>
                            <td>Bank Mandiri</td>
                            <td>15/10/2022</td>
                            <td>Rp 200.000</td>
                            <td class="text-end">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                    data-bs-target="#DetailUser">
                                    Detail
                                </button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Modal detail cek profile -->
    <div class="modal fade" id="DetailUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content px-4 py-4 ">
                <img src="{{ asset('assets/img/Rectangle 77.png') }}" class="img-detail rounded mx-auto d-block mt-2"
                    alt="image">
                <p class="penitipan text-center" style="padding-top: 20px"><b>17/05/2022 08:30:00 WIB</b></p>
                <div class="row">
                    <div class="col-md">
                        <p>Nama Vendor</p>
                    </div>
                    <div class="col-md-5 text-end">
                        Bently
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
                        <p>No.Rek Penerima</p>
                    </div>
                    <div class="col-md-5 text-end">
                        2345743762
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Bank</p>
                    </div>
                    <div class="col-md-5 text-end">
                        BCA
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p> Nama pemilik rek</p>
                    </div>
                    <div class="col-md-5 text-end">
                        Dila
                    </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        <b>
                            <p>Jumlah Penarikan</p>
                        </b>
                    </div>
                    <div class="col-md-5 text-end">
                        <b> Rp 200.000</b>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        <p>Biaya Admin</p>
                    </div>
                    <div class="col-md-5 text-end">
                        Rp 10.000
                    </div>
                </div>
                <hr>
                <div class="row" style="font-size: 25px; color:rgb(58, 214, 108)">
                    <div class="col-md">
                        <p><b>Total</b></p>
                    </div>
                    <div class="col-md-5 text-end">
                        <b>210.000</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tolak -->
    <div class="modal fade" id="Detailtolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="px-2 py-2" style="font-size: 20px">
                    <label class="form-label mt-3">Alasan menolak penarikan</label>
                    <textarea type="text" class="form-control"></textarea>

                </div>
                <div class="footer text-end">
                    <a class="btn btn-success" href="/finance/DataPenarikan/vendor" role="button" data-bs-toggle="modal"
                        data-bs-target="">Simpan</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="Filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 30%">
            <div class="modal-content">
                <div class="modal-body">
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
                                <option selected>Tahun</option>
                                <option value="1">2019</option>
                                <option value="1">2020</option>
                                <option value="1">2021</option>
                                <option value="1">2022</option>
                            </select>
                        </div>

                    </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" style="width: 100%">OK</button>
            </div>
        </div>
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
    $(function () {
        $('#example1').DataTable()
    })
</script>
@endsection
