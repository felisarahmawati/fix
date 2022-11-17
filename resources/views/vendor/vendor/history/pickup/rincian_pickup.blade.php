@extends('vendor.vendor.dashboard_vendor')

    <!--hero section-->
    @section('container')
    <section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">

            <div class="container mt-4 mb-4 ps-5">

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col" style="width: 400px">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title text-center"><b>30 Dec.2021 11:00 PM</b></p><br>
                                <div class="row">
                                    <div style="background: #F2F2F2">

                                        <div class="row">
                                            <div class="col-6">
                                                <b><p class="mb-1">Order Id</p></b>
                                            </div>
                                            <div class="col-md text-end">
                                                <b>1234569098</b>
                                            </div>
                                        </div>

                                    </div>
                                </div><br>

                                <div class="col-md">
                                    <b><p class="mb-1">Sinta Sari Dwi Putra</p></b>
                                    <p class="mb-1" style="font-size: 14px">No.Telp : 0823491231</p>
                                </div><br>

                                <div class="col-md">
                                    <p><i class="bi bi-geo-fill p-2" style="color: #F24E1E"></i>Jl.Kusumanegara Sawahan, Bantul, Yogyakarta</p>
                                </div>

                                <div class="col-1">
                                    <h6 style="margin-right: 10px"><i class="bi bi-three-dots-vertical p-2"></i></h6>
                                </div>

                                <div class="col-md">
                                    <h6><i class="bi bi-house-door-fill p-2" style="color: #F24E1E"></i>CV Tania Jaya</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 00px">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title"><b>Rincian Order</b></h5>
                          <hr width="100%" color="#c0c0c0">
                                <div class="card-body">
                                     {{-- <div class="container-fluid"> --}}
                                        <div class="row">
                                            <div class="col-7 text-start">
                                                <p>Mobil Pickup</p>
                                            </div>
                                            <div class="col-2 text-end">
                                                <p>01</p>
                                            </div>
                                            <div class="col-1">
                                                <p>X</p>
                                            </div>
                                            <div class="col-2 text-end">
                                                <p>40.000</p>
                                            </div>

                                        </div>
                                        <hr width="100%" color="#c0c0c0">
                                        <div class="row">
                                            <div class="col-2 text-start">

                                            </div>
                                            <div class="col-10 text-end">
                                                <p>5 x Rp 50000
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Subtotal</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>Rp 250.000</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Diskon</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>0</p>
                                            </div>
                                        </div>
                                        <hr width="100%" color="#c0c0c0">
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Total</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>Rp 250.000</p>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a class="btn btn-outline-success" href="#" role="button">Bantuan</a>
                                        </div>
                                     </div>
                                </div>
                      </div>
                    </div>


                </div>

            </div>


    </section>
        @endsection
