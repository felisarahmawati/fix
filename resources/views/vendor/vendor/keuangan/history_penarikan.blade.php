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
                    <h2>Earning</h2>
                </div>
            </div>
            <div class="mt-5">
        <div class="row justify-content-center m-auto">
            <div class="col-md-11">
                <div class="card" style="background-color: #fff;">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md justify-content-center">
                                        <p><b>Your Balance</b></p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md justify-content-center">
                                            <p class="text-success" style="font-size: 30px; margin-bottom: 10px">
                                                <b>Rp 1.000.000</b>
                                            </p>
                                        </div>
                                        <div class="col-2 text-success">
                                            <a href="/penarikan_baru"><i class="bi bi-credit-card-2-back-fill text-center" style="margin-left: 70px"></i></a><br>
                                            <p class="text-right" style="margin-left: 43px">Penarikan</p>
                                        </div>
                                        <div class="col-2 text-success">
                                            <a href="/riwayat_penarikan"><i class="bi bi-clock-fill" style="margin-left: 18px"></i></a><br>
                                            <p class="text-right" style="font-size: 15px">History</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid d-flex justify-content-center align-items-center py-3 rounded-lg">
                                    <div class="col-md-12 ps-6 mb-10">
                                            <div class="card-header bg-white">
                                                <p class="mb-1"><b>Analytics</b></p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>Earnings in November</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="margin-left: 18px">Rp 0</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>Order</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="margin-left: 18px">Rp 0</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>Completed Orders</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="margin-left: 18px">Rp 0</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>Cancelled Orders</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="margin-left: 18px">Rp 0</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>Panding Orders</p>
                                                    </div>
                                                    <div class="col-2">
                                                        <p style="margin-left: 18px">Rp 0</p>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>


    </div>
    </section>
    @endsection

