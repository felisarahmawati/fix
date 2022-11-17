@extends('vendor.vendor.dashboard_vendor')

    <!--hero section-->
    @section('container')
    <section class="home-section"  >
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Info Penarikan</h2>
                </div>
            </div>
            <div class="mt-5">
        <div class="row justify-content-center m-auto">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header bg-white">
                        <h6 class="mb-1 fw-bold text-success"><b>Jumlah Penarikan</b></h6>
                        <p class="mb-1 fw-bold"><b>Rp 1.000.000</b></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <p>Masukan no.rekening</p>
                            </div>
                            <div class="col-md-2">
                                70018264
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>Penarikan di bank</p>
                            </div>
                            <div class="col-md-2">
                                Bank BCA
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>Jumlah Penarikan</p>
                            </div>
                            <div class="col-md-2">
                                Rp 1.000.000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <p>Biaya Admin</p>
                            </div>
                            <div class="col-md-2">
                                Rp 10.000
                            </div>
                        </div>
                        <hr width="100%" color="#c0c0c0">
                        <div class="row">
                            <div class="col-md">
                                <p>Total</p>
                            </div>
                            <div class="col-md-2">
                                Rp 1.010.000
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <a class="btn btn-success" href="/vendor/homelagi" role="button">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    @endsection
