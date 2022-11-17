@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center  services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
        <div class="row justify-content-center m-auto">
            <div class="col-md-9">
                <div class="card" style="background-color: #fff;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md" style="padding-top: 25px">
                                <h4><b>Notifikasi</b></h4>
                            </div>  
                            <div class="col-md-2" style="padding-top: 25px">
                                <a href="/orderan_baru"><p class="text-dark">See All</p></a>
                            </div>
                        </div>
                        <hr width="100%" color="#c0c0c0">
                            <div class="card-body justify-content-center" style="margin-top: 10px; width:70%; margin:auto">
                                <div class="card mt-2 shadow rounded-3">
                                    <div class="row align-items-center">
                                        <div class="col text-center">
                                            <img src="../assets/img/centanghijauuu.png" class="img-fluid rounded" alt="..." style="width: 35%; height:35%;">
                                            
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <p>Pesanan ID TP341232 berakhir hari ini</p>
                                                        <p>Today at 08.00</p>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body justify-content-center" style="margin-top: 10px; width:70%; margin:auto">
                                <div class="card mt-2 shadow rounded-3">
                                    <div class="row align-items-center">
                                    <div class="col text-center">
                                        <img src="../assets/img/tandaseru.png" class="img-fluid rounded" alt="..." style="width: 35%; height:35%;">
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md">
                                                    <p>Kamu mendapatkan pesanan baru</p>
                                                    <p>Today at 08.00</p>
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
        </div>
        

    </section>
        @endsection