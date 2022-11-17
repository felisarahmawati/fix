@extends('vendor.vendor.dashboard_vendor')

@section('container')
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
        <div class="row">
            <div class="col-xs-12">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="row py-3">
                                <div class="col-sm-8">
                                    <div class="card py-2 " style="border-radius: 10px; ">
                                        <div class="card-body">
                                            <div class="row col-md-12">
                                                <div class="col-md-8" style="padding-left: 30px">
                                                    <p class=" text-muted" style="font-size:30px">Saldo Saya</p>
                                                    <p style="font-size: 20px">Rp4.000.000</p>
                                                </div>
                                                <div class="col-md-4 mt-5 text-end " style="padding-top:30px">
                                                    <button class="btn btn-success " data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">Tarik Dana</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card py-1" style="border-radius: 10px;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="{{ asset('../../assets/img/mandiri.png') }}"
                                                        class="img-fluid rounded-start mt-5" alt="..."
                                                        style="padding-left:15px; font-size:22px">
                                                </div>
                                                <div class="col-md-7">
                                                    <b>Rekening Bank Saya</b>
                                                    <p style="font-size: 15px"><b>BANK MANDIRI</b> <span
                                                            class="badge rounded-pill bg-danger">
                                                            utama
                                                        </span></p>
                                                    <p>8879-9879-8779 </p>
                                                    <a href="/vendor/vendor/keuangan/rekening">Lainnya<i
                                                            class="bi bi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-7">
                                    <ol class="breadcrumb" style="font-size:25px">
                                        <li class="breadcrumb-item"><a href="#">History </a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> Penarikan Dana</li>
                                    </ol>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih bulan</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktber</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih tahun</option>
                                        <option value="1">2022</option>
                                        <option value="2">2021</option>
                                        <option value="3">2020</option>
                                        <option value="4">2019</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-outline-success">Unduh</button>
                                </div>
                            </div>
                            <table class="mt-2">
                                <thead>
                                    <tr>
                                        <td>ID transaksi</td>
                                        <td>Tanggal</td>
                                        <td>Rek penerima dana</td>
                                        <td>Jumlah Dana</td>
                                        <td>Status</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Penarikan dana berhasil</td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Di proses oleh bank</td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>gagal</td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Penatikan dana berhasil</td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Gagal</td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Penarikan dana berhasil</td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>penarikan dana berhasil</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    </div>

    {{-- modal detail --}}
    <div class="modal fade" id="MODAL1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-end">
                        27/08/2022
                        08:30:00
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-6">
                            ID Transaksi
                        </div>
                        <div class="col-md-6 text-end">
                            1234567890900
                        </div>
                    </div>

                    <div class="row mt-3 text-muted">
                        <div class="col-md-4">
                            rekening penerima dana
                        </div>
                        <div class="col-md-8 text-end">
                            98475906527236
                            <p>Bank Mandiri</p>
                        </div>
                    </div>
                    <div class="row mt-2 mb-3 text-muted">
                        <div class="col-md-6">
                            Keterangan
                        </div>
                        <div class="col-md-6 text-end">
                            Penarikan diproses
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3 mb-3" style="font-size:15px;">
                        <div class="col-md-6">
                            Biaya Admin
                        </div>
                        <div class="col-md-6 text-end">
                            Rp6.500
                        </div>
                    </div>
                    <div class="row mt-3 mb-3" style="font-size:25px; color:#00B56A">
                        <div class="col-md-6">
                            Total Penarikan
                        </div>
                        <div class="col-md-6 text-end">
                            Rp3.306.500
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#MODAL2">Lanjutkan</button>
            </div>
        </div>
    </div>
    </div>

    {{-- modal penarikan dibuat --}}

    <div class="modal fade" id="MODAL2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="text-center mt-4 mb-4">
                    <img src="../../assets/img/centanghijau.png" alt="centangHijau" style="width: 100px; height:100px">
                    <H5 class="congratulations mt-2"><b>Penarikan berhasil dibuat!!!<b></H2>
                                <p>Akan di proses dalam waktu 2X24 jam, dana akan langsung di transfer ke rekening yang
                                    tertera setelah dikonfirmasi oleh admin</P>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 700px">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="row">
                            <div class="col-md-8">
                                Rekeneing penarikan
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="/vendor/vendor/keuangan/rekening">Kelola rek penarikan</a>
                            </div>
                        </div>


                        <div class="card mb-3" style="width:630px;">
                            <div class="row ">
                                <div class="col-md-2">
                                    <img src="{{ asset('../../assets/img/mandiri.png') }}" class="img-fluid rounded-start mt-5"
                                        alt="..." style="padding-left:15px">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p style="font-size: 20px"><b>BANK MANDIRI</b></p>
                                        <p>3847325348739653</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jumlah penarikan dana</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="masukan jumlah dana yang akan ditarik">
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-3 col-form-label" style="font-size:15px">Biaya
                                Transkasi :</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="RP6.000">
                            </div>
                        </div>
                        <div>
                            <h6>Info penarikan</h6>
                            <ul>
                                <li>permintaan penarikan dana akan diproses dalam 1-2 hari kerja</li>
                                <li>penarikan hanya dapat dilakukan 1 x 24 jam</li>
                                <li>minimal penarikan Rp10.000 </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div style="padding-right: 10px">
                        Jumlah akhir penarikan
                        <p class="" style="font-size:25px; padding-left:20px">Rp2.000.000</p>
                    </div>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#MODAL1">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal hapus --}}
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger">Lanjutkan</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
