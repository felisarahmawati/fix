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
                <div class="row row-cols-1 row-cols-md-2 g-4 ">
                    <div class="col" style="width: 400px">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title text-center text-success"><b>30 Dec.2021 11:00 PM</b></p><br>
                                <div class="row">
                                    <div style="background: #F2F2F2">

                                        <div class="row">
                                            <div class="col-6">
                                                <b><p class="mb-1">Id Transaksi</p></b>
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

                                            <div class="row">
                                                <div class="col-7 text-start">
                                                    <p><b>Barang</b></p>
                                                </div>
                                                <div class="col-2 text-end">
                                                    <p>10 kg</p>
                                                </div>
                                                <div class="col-1">
                                                    <p>X</p>
                                                </div>
                                                <div class="col-2 text-end">
                                                    <p>5.000</p>
                                                </div>

                                            </div>
                                        <hr width="100%" color="#c0c0c0">
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Pick Up</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>Antar-Jemput</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2 text-start">
                                                <p>Durasi Penitipan</p>
                                            </div>
                                            <div class="col-10 text-end">
                                                <p>5 hari</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-5 text-start">
                                                <p>Vendor Pick Up</p>
                                            </div>
                                            <div class="col-7 text-end">

                                                  <button type="button" class="btn bg-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Pilih
                                                  </button>
                                                  <!-- Modal -->
                                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header text-white bg-success">
                                                            <h5 class="modal-title">Pilih pickup mu ya!!!</h5>
                                                            <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="card text-center">
                                                            <div class="card-body">
                                                                <h6 class="berhasil" style="padding-top: 5px; color: grey">Pilih button dibawah ini karena sangat penting ketika kamu belum mempunyai mobil pick up</h6>
                                                            </div>
                                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                                                                    Pickup sendiri
                                                                </button>
                                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalvendor">
                                                                    Cari vendor pickup lain
                                                                </button><br>
                                                            </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="modal fade" id="modalvendor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header text-white bg-success">
                                                            <h5 class="modal-title">Tunggu sebentar</h5>
                                                            <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                            <div class="card-body text-center">
                                                                    <div class="modal-body">
                                                                        <div class="spinner-border text-warning" role="status">
                                                                          <span class="visually-hidden">Loading...</span>
                                                                        </div>
                                                                    </div>
                                                                <h6 class="berhasil" style="padding-top: 5px; color: grey">
                                                                    Tunggu sebentar ya. Sistem sedang mencari vendor pick up lain untuk mengatasi masalah anda
                                                                </h6><br>
                                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                                                        Pickup sendiri
                                                                    </button><br>
                                                                </div>
                                                            </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header text-white bg-success">
                                                                <h5 class="modal-title">Pesanan anda diterima</h5>
                                                                <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                              <div class="card-body text-center">
                                                                  <h6 class="berhasil" style="padding-top: 5px; color: grey">
                                                                      Hore!! Pesanan anda telah berhasil diterima oleh vendor lain, tunggu dulu yaa
                                                                  </h6>
                                                                  <h6 class="congratulations" style="padding-top: 10px;"><b>CV Pelita Jaya Abadi</b></h6><br>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-3 text-start">
                                                                                <p>No Hp</p>
                                                                            </div>
                                                                            <div class="col-9 text-end">
                                                                                <p>083242914312</p>
                                                                            </div>
                                                                            <div class="col-3 text-start">
                                                                                <p>Alamat</p>
                                                                            </div>
                                                                            <div class="col-9 text-end">
                                                                                <p>Sawahan,Bantul,Yogyakarta</p>
                                                                            </div><hr>
                                                                            <div class="col-12 text-end">
                                                                                <p style="font-size: 15px">23.00</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  <div class="d-grid gap-2 col-6 mx-auto">
                                                                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                                                          Oke
                                                                      </button>
                                                                  </div>
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
                                                <p>Rp 50.000</p>
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
                                                <p>Rp 100.013</p>
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
