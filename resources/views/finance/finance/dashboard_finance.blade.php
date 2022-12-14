@extends('layouts_finance.main')
@section('content')
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="home-content" id="liveToastBtn">
                <i class='bx bx-bell' style="font-size: 35px; cursor: pointer; margin-top:13px; margin-left:1650%"></i>
            </div>
        </div>
<div class="row px-5 py-5">
    <div class="col-md-3 " >
        <select class="form-select" aria-label="Default select example">
            <option selected>Pilih bulan</option>
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="1">April</option>
            <option value="2">Mei</option>
            <option value="3">Juni</option>
            <option value="1">Juli</option>
            <option value="2">Agustus</option>
            <option value="3">September</option>
            <option value="1">Oktober</option>
            <option value="2">November</option>
            <option value="3">Desember</option>
          </select>
    </div>
    <div class="col-md-3">
        <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Tahun</option>
            <option value="1">2019</option>
            <option value="2">2020</option>
            <option value="3">2021</option>
          </select>
    </div>
</div>
<div class="cardBox" data-aos="fade-up" data-aos-delay="100">
    <div class="card border-0 ">
        <a href="/vendor/vendor/keuangan/saldo" style="text-decoration-line: none">
            <div class="card-body">
                <div class="numbers">40</div>
                <div class="cardName">Total Pengguna</div>
            </div>
            <div class="iconBx card-img-overlay">
                <i class="bi bi-people-fill"></i>
            </div>
        </a>
    </div>

    <div class="card border-0">
        <a href="/Vendor/order/kendaraan/orderan_baru" style="text-decoration-line: none">
            <div class="card-body">
                <div class="numbers">40</div>
                <div class="cardName">Transaksi</div>
            </div>
            <div class="iconBx card-img-overlay">
                <i class="bi bi-cash-coin"></i>
            </div>
        </a>
    </div>

    <div class="card border-0 ">
        <a href="/vendor/vendor/keuangan/saldo" style="text-decoration-line: none">
            <div class="card-body">
                <div class="numbers">10</div>
                <div class="cardName">Penarikan</div>
            </div>
            <div class="iconBx card-img-overlay">
                <i class="bi bi-credit-card-fill"></i>
            </div>
        </a>
    </div>
</div>

<div class="details3 col-md-12">
    <div class="recentOrders3">
        <div class="row col-sm-auto">
            <div class="col-md" style="padding-top: 10px">
                <h5>Data Penarikan</h5>
            </div>
            <div class="col-md-2" style="padding-top: 10px; padding-left: 55px">
                <a href="/vendor/vendor/order/kendaraan/orderan_baru">
                    <p class="text-dark">See All</p>
                </a>
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
                        <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal"
                            data-bs-target="#Detailverify">
                            Verifikasi
                        </button>
                    </td>
                </tr>

            </tbody>

        </table>
       
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

            {{-- <div class="row">
                <div class="col-md">
                    <p>Biaya Admin</p>
                </div>
                <div class="col-md-5 text-end">
                    Rp 10.000
                </div>
            </div> --}}
            <hr>
            <div class="row" style="font-size: 25px; color:rgb(58, 214, 108)">
                <div class="col-md">
                    <p><b>Total</b></p>
                </div>
                <div class="col-md-5 text-end">
                    <b>200.000</b>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal detail verivikasi -->
<div class="modal fade" id="Detailverify" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

            {{-- <div class="row">
                <div class="col-md">
                    <p>Biaya Admin</p>
                </div>
                <div class="col-md-5 text-end">
                    Rp 10.000
                </div>
            </div> --}}
            <hr>
            <div class="row" style="font-size: 25px; color:rgb(58, 214, 108)">
                <div class="col-md">
                    <p><b>Total</b></p>
                </div>
                <div class="col-md-5 text-end">
                    <b>200.000</b>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-end">
                    <a class="btn btn-success col-md-6" href="/finance/DataPenarikan/vendor">Verifikasi</a>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-danger col-md-6" href="" data-bs-toggle="modal"
                        data-bs-target="#Detailtolak">Tolak</a>
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
                <a class="btn btn-success" href="/finance/DataPenarikan/vendor" role="button"
                    data-bs-toggle="modal" data-bs-target="">Simpan</a>
            </div>

        </div>
    </div>
</div>
</section>
@endsection
