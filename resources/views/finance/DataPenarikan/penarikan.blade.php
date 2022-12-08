@extends('layouts_finance.main')
@section('content')

    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="home-content" id="liveToastBtn">
                    <i class='bx bx-bell' style="font-size: 35px; cursor: pointer; margin-top:13px; margin-left:1400%"></i>
                </div>
                <div class="home-content">
                    <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="rounded-circle" alt="profile" style="cursor: pointer; margin-top:13px; margin-left:400%">
                </div>
                <div class="home-content">
                    <p class="fw-bold" style="font-size: 20px; cursor: pointer; margin-top:28px;">Hallo,Finance</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-10">
                    <div class="recentOrders">
                        <div class="details3">
                            <div class="recentOrders3">
                                <div class="cardHeader">
                                    <div class="col-md" style="padding-top: 10px">
                                        <h3>Data Penarikan</h3>
                                    </div>
                                    <div class="rincian d-inline mt-3">
                                    {{-- <a href="#" class="btn btn-thema">Filter All<i class="bi bi-caret-down"></i></a> --}}
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#Filter" class="btn btn-success fw-bold rounded-pill px-4 shadow float-end">Filter By</button>
                                    </div>
                                </div>
                                <div class="cardHeader">
                                    <!-- Search -->
                                    <div class="search mb-4" data-aos="fade-left" data-aos-duration="1000">
                                        <label>
                                            <input type="text" placeholder="Cari Disini">
                                            <ion-icon name="search-outline"></ion-icon>
                                        </label>
                                    </div>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td>Nama Vendor</td>
                                            <td>ID Transaksi</td>
                                            <td>Total</td>
                                            <td>Tanggal</td>
                                            <td>Status</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Pepi Penitipan</td>
                                            <td>T120917243434</td>
                                            <td>Rp 500.000</td>
                                            <td>14/08/2022</td>
    
                                            <td>
                                                <p class="mt-3"><i class="bi bi-circle-fill p-2 text-success"></i>Done</p>
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#DetailUser">
                                                    Detail
                                                </button>
    
                                                <!-- Modal -->
                                                <div class="modal fade" id="DetailUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <img src="{{ asset('assets/img/Rectangle 77.png') }}" class="img-detail rounded mx-auto d-block" alt="image">
                                                            <p class="penitipan text-center" style="padding-top: 10px"><b>Penarikan</b></p>
                                                            <div class="row">
                                                                <div class="col-md">
                                                                    <p>Id Transaksi</p>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    T120917243434
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md">
                                                                    <p>Tanggal Penarikan</p>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <p>14/08/2022</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md">
                                                                    <p>Rekening Tujuan</p>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <p>Bank BCA</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md">
                                                                    <p>Nama Vendor</p>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <p>Pepi Penitipan</p>
                                                                </div>
                                                            </div>
                                                            <p class="jenis" style="padding-top: 20px"><b>Transaksi</b></p>
                                                            <div class="row">
                                                                <div class="col-md">
                                                                    <p>Saldo Ditarik</p>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <p>Rp 500.000</p>
                                                                </div>
                                                            </div>
                                                            <p class="bukti text-center" style="padding-top: 20px">
                                                                <b>Anda dapat menyimpan tanda terima ini sebagai bukti transaksi yang sah<b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wijaya Penitipan</td>
                                            <td>T120917243434</td>
                                            <td>Rp 500.000</td>
                                            <td>12/12/2022</td>
    
                                            <td>
                                                <p class="mt-3"><i class="bi bi-circle-fill p-2 text-success"></i>Done</p>
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#DetailUser">
                                                    Detail
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Abah Titipsini</td>
                                            <td>T120917243434</td>
                                            <td>Rp 500.000</td>
                                            <td>11/11/2022</td>
    
                                            <td>
                                                <<p class="mt-3"><i class="bi bi-circle-fill p-2 text-success"></i>Done</p>
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#Cancel">
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
            </div>
        </div>

        <div class="modal fade" id="Filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 30%">
                <div class="modal-content">
                    <div class="modal-body">
                        <label for="filter" class="form-label">FILTER BERDASARKAN TANGGAL</label>
                        <div class="col-12 mb-3">
                            <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Tanggal Awal</p>
                            <input type="date" class="form-control" id="tanggal">
                        </div>
                        <div class="col-12 mb-3">
                            <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Tanggal Akhir</p>
                            <input type="date" class="form-control" id="tanggal">
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
        $(function() {
            $('#example1').DataTable()
        })
    </script>
@endsection
