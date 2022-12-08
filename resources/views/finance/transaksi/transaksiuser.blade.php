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
                                    <h3>Data Transaksi Customer</h3>
                                </div>
                                <div class="rincian d-inline mt-3">
                                {{-- <a href="#" class="btn btn-thema">Filter All<i class="bi bi-caret-down"></i></a> --}}
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success fw-bold rounded-pill px-4 shadow float-end">Filter By</button>
                                </div>
                            </div>
                            <div class="cardHeader">
                                <!-- Search -->
                                <div class="search mb-2" data-aos="fade-left" data-aos-duration="1000">
                                    <label>
                                        <input type="text" placeholder="Cari Disini">
                                        <ion-icon name="search-outline"></ion-icon>
                                    </label>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nama user</td>
                                        <td>ID Transaksi</td>
                                        <td>Total</td>
                                        <td>Jam</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Samantha william</td>
                                        <td>T120917243434</td>
                                        <td>Rp 500.000</td>
                                        <td>20:59 WIB</td>

                                        <td>
                                            <p class="mt-3"><i class="bi bi-circle-fill p-2 text-warning"></i>On Progress</p>
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
                                                        <p class="penitipan text-center" style="padding-top: 10px"><b>Penitipan Kendaraan</b></p>
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
                                                                <p>Status</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                Diperpanjang
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Tanggal penitipan</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                01-11-2022
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Tanggal pengembalian</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                07-11-2022
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Nama Customer</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <P>Alvi Nurbaetri</P>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Metode Pembayaran</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <p>Transfer bank BRI</p>
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
                                                        <p class="jenis" style="padding-top: 20px"><b>Jenis Kendaraan</b></p>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Mobil (x2)</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                200.000
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Motor (x2)</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                100.000
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p><b>Total Kendaraan</b></p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <b>4 Kendaraan</b>
                                                            </div>
                                                        </div><hr>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Sub Total</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <p>Rp 230.000</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Diskon</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <p>-</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p><b>Total</b></p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <p><b>Rp 230.000</b></p>
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
                                        <td>Samantha william</td>
                                        <td>T120917243434</td>
                                        <td>Rp 500.000</td>
                                        <td>20:59 WIB</td>

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
                                                        <p class="penitipan" style="padding-top: 20px"><b>Penitipan Kendaraan</b></p>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Tanggal penitipan</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                01-11-2022
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Tanggal pengambilan</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                07-11-2022
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>No. rekening</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                2323-14553-2452-21
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Dari Bank</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                BRI
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Ke Bank</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                BRI
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Nama Pengirim</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                Angelie Silubun
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Nama Penerima</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                Alvi Nuebetri
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Rekening Tujuan</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                2323-14553-2452-21
                                                            </div>
                                                        </div>
                                                        <p class="jenis" style="padding-top: 20px"><b>Jenis Kendaraan</b></p>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Mobil (x2)</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                200.000
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Motor (x2)</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                100.000
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p><b>Total Kendaraan</b></p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <b>4 buah</b>
                                                            </div>
                                                        </div><hr>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p><b>Total</b></p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <b>230.000</b>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Diskon</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                5%
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Potongan Harga</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                17%
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Diskon</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                -
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
                                        <td>Samantha william</td>
                                        <td>T120917243434</td>
                                        <td>Rp 500.000</td>
                                        <td>20:59 WIB</td>

                                        <td>
                                            <p class="mt-3"><i class="bi bi-circle-fill p-2 text-danger"></i>Cancel</p>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#Cancel">
                                                Detail
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Cancel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <img src="{{ asset('assets/img/Rectangle 77.png') }}" class="img-detail rounded mx-auto d-block" alt="image">
                                                        <p class="penitipan" style="padding-top: 20px"><b>Penitipan Kendaraan</b></p>
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
                                                                <p>Status</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <p>Cancel</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Tanggal penitipan</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                01-11-2022
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Tanggal pengembalian</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                07-11-2022
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Nama Customer</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <P>Alvi Nurbaetri</P>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Metode Pembayaran</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <p>Transfer bank BRI</p>
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
                                                        <p class="jenis" style="padding-top: 20px"><b>Jenis Kendaraan</b></p>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Mobil (x2)</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                200.000
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Motor (x2)</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                100.000
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p><b>Total Kendaraan</b></p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <b>4 Kendaraan</b>
                                                            </div>
                                                        </div><hr>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Sub Total</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <p>Rp 230.000</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p>Diskon</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <p>-</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md">
                                                                <p><b>Total</b></p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <p><b>Rp 230.000</b></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p>Alasan Cancel Layanan :</p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p><b>Salah memasukan jenis barang</b></p>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 30%">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="filter" class="form-label">FILTER BERDASARKAN STATUS</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
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
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1">
                        Cancel
                        </label>
                    </div><br>
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
