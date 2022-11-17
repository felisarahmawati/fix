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

        <div class="cardBox" data-aos="fade-up" data-aos-delay="100">


            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">$230.000</div>
                    <div class="cardName">Penghasilan
                    </div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="archive-outline"></ion-icon>
                    <p class="text-muted mt-2" style="font-size: 10px">Agustus</p>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">$200.000</div>
                    <div class="cardName">Penarikan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="browsers"></ion-icon>
                </div>
            </div>

            <div class="card border-0" style="background-color:#00B56A;">
                <div class="card-body">
                    <div class="numbers" style="color:white">$30.000</div>
                    <div class="cardName" style="color:white">Saldo</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <ion-icon name="card" style="color:white"></ion-icon>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="rincian d-inline mb-2">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="btn btn-success fw-bold px-2 shadow float-end"><a
                                        href="/finance/DataPenarikan/konfirmasi">Konfirmasi</a></button>
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-md-8">
                                        Rekeneing penarikan
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a href="">Kelola rek penarikan</a>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="row ">
                                        <div class="col-md-2">
                                            <img src="../../assets/img/mandiri.png" class="img-fluid rounded-start mt-5"
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
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah penarikan
                                        dana</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="masukan jumlah dana yang akan ditarik">
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-3 col-form-label"
                                        style="font-size:15px">Biaya Transkasi :</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="colFormLabel"
                                            placeholder="RP6.000">
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
                                <div class="row">
                                    <div class="col-md-10">
                                        <p>Jumlah akhir penarikan</p>
                                        <p>Rp2.000.000</p>
                                    </div>
                                    <div>
                                        <button class="btn btn-success">Konfirmasi</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    </div>


</section>
@endsection
