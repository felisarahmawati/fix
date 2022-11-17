@extends('vendor.vendor.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Rincian</h2>
            </div>
        </div>
        <div class="row row-cols-md-10 g-5 container ps-5">
            <div class="col" style="width: 400px">
                <div class="card p-3">
                    <div class="card-body">
                        <p class="card-title text-center"><b>30 Dec.2021 11:00 PM</b></p><br>
                        <div class="row">
                            <div style="background: #F2F2F2">

                                <div class="row">
                                    <div class="col-6">
                                        <b>
                                            <p class="mb-1">Order Id</p>
                                        </b>
                                    </div>
                                    <div class="col-md text-end">
                                        <b>1234569098</b>
                                    </div>
                                </div>

                            </div>
                        </div><br>

                        <div class="col-md">
                            <b>
                                <p class="mb-1">Sinta Sari Dwi Putra</p>
                            </b>
                            <p class="mb-1" style="font-size: 14px">No.Telp : 0823491231</p>
                        </div><br>

                        <div class="col-md">
                            <p><i class="bi bi-geo-fill p-2" style="color: #F24E1E"></i>Jl.Kusumanegara Sawahan, Bantul,
                                Yogyakarta</p>
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
            <div class="col" style="width: 700px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Rincian Order</b></h5>
                        <hr width="100%" color="#c0c0c0">
                        <div class="card-body">
                            {{-- <div class="container-fluid"> --}}
                                <div class="row">
                                    <div class="col-8 text-start">
                                        mobil bak terbuka
                                    </div>
                                    <div class="col-4 text-end">
                                        <p>5 x Rp 50000
                                    </div>
                                </div>
                                <hr width="100%" color="#c0c0c0">
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
                                    <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal24">Ambil pesanan</button>
                                    <a class="btn btn-outline-secondary" href="/orderan_pickup" role="button">Tolak</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal24" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="text-center">
                                                <div class="card-body">
                                                    <img src="assets/img/centanghijauuu.png" alt="centangHijau"
                                                        width="100px" height="100px">
                                                    <p class="congratulations" style="padding-top: 20px">
                                                        <b>Congratulations!!!<b></p>
                                                    <h5 class="berhasil" style="padding-top: 5px; color: grey">Selamat
                                                        anda telah berhasil menyelesaikan pesanan anda</h5>
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
