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
                    <h2>Rincian</h2>
                </div>
            </div>

            <div class="container mt-4 mb-4 ps-5">

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col" style="width: 400px">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title text-center text-success"><b>30 Dec.2021 11:00 PM</b></p><br>
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
                                    <h6><i class="bi bi-house-door-fill p-2" style="color: #F24E1E"></i>Kantor Titipsini.com</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 600px">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title text-success"><b>Rincian Order</b></h5>
                          <hr width="100%" color="#c0c0c0">
                                <div class="card-body">
                                     {{-- <div class="container-fluid"> --}}
                                            <div class="col-2 text-start">
                                            <p><b>Mobil</b></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-7 text-start">
                                                    <p>Golongan 1</p>
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
                                            <div class="col-5 text-start">
                                                <p>Durasi Penitipan</p>
                                            </div>
                                            <div class="col-7 text-end">
                                                <p>5 hari</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 text-start">
                                                <p>Vendor Pick Up</p>
                                            </div>
                                            <div class="col-7 text-end">
                                                {{-- <button type="button" class="btn bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Pilih
                                                  </button> --}}
                                                  <button type="button" class="btn bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Pilih
                                                  </button>
                                                  <!-- Modal -->
                                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="card text-center">
                                                            <div class="card-body">
                                                                <h5 class="congratulations" style="padding-top: 20px"><b>Pilih pick upmu ya!!<b></h5>
                                                                <h6 class="berhasil" style="padding-top: 5px; color: grey">Pilih button dibawah ini karena sangat penting ketika kamu belum mempunyai mobil pick up</h6>
                                                            </div>
                                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                                                    Pickup sendiri
                                                                </button>
                                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                                    Cari vendor pickup lain
                                                                </button><br>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="card text-center">
                                                            <div class="card-body">
                                                                <h5 class="congratulations" style="padding-top: 20px"><b>Tunggu sebentar<b></h5>
                                                                    <div class="modal-body">
                                                                        <div class="spinner-border text-warning" role="status">
                                                                          <span class="visually-hidden">Loading...</span>
                                                                        </div>
                                                                    </div>
                                                                <h6 class="berhasil" style="padding-top: 5px; color: grey">Tunggu sebentarya. Sistem sedang mencari vendor pick up lain untuk mengatasi masalah anda</h6>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                                                    Pickup sendiri
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="card text-center">
                                                            <div class="card-body">
                                                                <h5 class="congratulations" style="padding-top: 20px"><b>Tunggu sebentar<b></h5>
                                                                    <div class="modal-body">
                                                                        <div class="spinner-border text-warning" role="status">
                                                                          <span class="visually-hidden">Loading...</span>
                                                                        </div>
                                                                    </div>
                                                                <h6 class="berhasil" style="padding-top: 5px; color: grey">Tunggu sebentarya. Sistem sedang mencari vendor pick up lain untuk mengatasi masalah anda</h6>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                                                    Pickup sendiri
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                        <hr width="100%" color="#c0c0c0">
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Subtotal</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>Rp 2.000.000</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-5 text-start">
                                                <p>Biaya Penjemputan</p>
                                            </div>
                                            <div class="col-7 text-end">
                                                <p>50.000</p>
                                            </div>
                                        </div>
                                        <hr width="100%" color="#c0c0c0">
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Total</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>Rp 2.050.000</p>
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
