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
                    <h2>Riwayat Penarikan</h2>
                </div>
            </div>
            <div class="mt-5">
        <div class="container mt-9 mb-4">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="card" style="background-color: #fff;">
                        <div class="card-body">
                            <label for="faq" class="form-label"><b>Riwayat Penarikan</b></label><hr>
                            <p class="text-end">24 Januari 2021</p>
                            <div class="container">
                                <div class="card mb-3" style="max-width: 100%;">
                                    <div class="row g-0">
                                      <div class="col-md-2 p-4">
                                        <img src="{{ asset('assets/img/icon_Barang.png') }}" class="img-fluid rounded-start" alt="...">
                                      </div>
                                      <div class="col-md-10 p-6">
                                        <div class="card-body">
                                           <div class="row">
                                                <div class="col-md">
                                                    <p class="card-title mt-2">Penarikan Rp 1.000.000 -,</p>
                                                    <p class="card-text"><small class="text-muted">Kemaren at 00.00</small></p>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="/info_penarikan">
                                                    <h2><i class="bi bi-arrow-right"></i></h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="card mb-3" style="max-width: 100%;">
                                    <div class="row g-0">
                                      <div class="col-md-2 p-4">
                                        <img src="{{ asset('assets/img/icon_kendaraan.png') }}" class="img-fluid rounded-start" alt="...">
                                      </div>
                                    <div class="col-md-10 p-6">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md">
                                                    <p class="card-title mt-2">Penarikan Rp 1.000.000 -,</p>
                                                    <p class="card-text"><small class="text-muted">Kemaren at 00.00</small></p>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="/info_penarikan">
                                                    <h2><i class="bi bi-arrow-right"></i></h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                  </div>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <p class="text-end">24 Januari 2020</p>
                            <div class="container">
                                <div class="card mb-3" style="max-width: 100%;">
                                    <div class="row g-0">
                                      <div class="col-md-2 p-4">
                                        <img src="{{ asset('assets/img/icon_Barang.png') }}" class="img-fluid rounded-start" alt="...">
                                      </div>
                                      <div class="col-md-10 p-6">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md">
                                                    <p class="card-title mt-2">Penarikan Rp 1.000.000 -,</p>
                                                    <p class="card-text"><small class="text-muted">Kemaren at 00.00</small></p>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="/info_penarikan">
                                                    <h2><i class="bi bi-arrow-right"></i></h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="card mb-3" style="max-width: 100%;">
                                    <div class="row g-0">
                                      <div class="col-md-2 p-4">
                                        <img src="{{ asset('assets/img/icon_kendaraan.png') }}" class="img-fluid rounded-start" alt="...">
                                      </div>
                                    <div class="col-md-10 p-6">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md">
                                                    <p class="card-title mt-2">Penarikan Rp 1.000.000 -,</p>
                                                    <p class="card-text"><small class="text-muted">Kemaren at 00.00</small></p>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="/info_penarikan">
                                                    <h2><i class="bi bi-arrow-right"></i></h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                  </div>
                            </div>
                        </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
 @endsection
