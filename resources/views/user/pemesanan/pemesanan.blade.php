@extends('layouts_user.main')
    <!-- card pemesanan barang -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
        <div class="container mt-4 mb-4">
            <div class="card mb-3">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col mt-3">
                            <h5 class="text-success"><b>Alvi Nurbaetri</b></h5>
                        </div>

                        <div class="col-1 mt-2">
                            <button type="button" class="btn bg-white" data-bs-toggle="modal" data-bs-target="#alamatBaru">
                                <h3 class="text-success"><i class="bi bi-pencil-square"></i></h3>
                            </button>

                            <div class="modal fade" id="alamatBaru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header text-white bg-success">
                                            <h5 class="modal-title" id="exampleModalLabel"><b>Alamat saya</b></h5>
                                            <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                                      </svg>
                                                </div>
                                                <div class="col-7" style="margin-right: 18%">
                                                    <p><b>Alvi | (307) 555-0133 </b><br>
                                                        2118 Thornridge Cir.Syracuse, Connecticut 35624
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <h6 class="text-success"><b>Ubah alamat</b></h6>
                                                <form class="row">
                                                    <div class="col-md-6 mt-2">
                                                        <label for="inputNama" class="form-label">Nama lengkap</label>
                                                        <input type="namalengkap" class="form-control" id="inputNama">
                                                    </div>

                                                    <div class="col-md-6 mt-2">
                                                        <label for="inputNoTlp" class="form-label">Nomor Telepon</label>
                                                        <input type="notlp" class="form-control" id="inputNoTlp">
                                                    </div>

                                                    <div class="col-12 mt-2">
                                                        <label for="inputAddress" class="form-label">Provinsi, Kota, Kecamatan</label>
                                                        <input type="text" class="form-control" id="inputAddress" placeholder="DIY">
                                                    </div>

                                                    <div class="col-12 mt-2">
                                                        <label for="inputAddress2" class="form-label">Nama jalan, No.Rumah</label>
                                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                    </div>

                                                    <div class="col-12 mt-2">
                                                        <label for="inputCity" class="form-label">Detail lainnya</label>
                                                        <input type="text" class="form-control" id="inputCity">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-outline-success">Konfirmasi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="person-description">
                                <p class="text-black-100 text-wrap">(307) 555-0133
                                    <br>2118 Thornridge Cir.Syracuse, Connecticut 35624
                                </p>
                            </div>
                        </div>

                        <div class="col-6 text-end" style="padding-right: 2%">
                            <img src="{{ asset('assets/img/icon_kendaraan.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-white">
                  <div class="jk">
                    <h5 class="text-success"><b>Jenis Kendaraan</b></h5>
                  </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Mobil</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">x 1</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Motor</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">x 1</p>
                        </div>
                    </div>

                    <hr width="100%" color="#c0c0c0">
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Total kendaraan</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">2 unit</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-white">
                    <div class="jk">
                      <h5 class="text-success"><b>Detail Transaksi</b></h5>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-6">
                                <p style="margin-left: 40px">Total kendaraan</p>
                            </div>
                            <div class="col-6 text-end">
                                <p style="margin-right: 45px">2 unit</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <p style="margin-left: 40px">Durasi penitipan</p>
                        </div>

                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">3 hari</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Pick Up</p>
                        </div>

                        <div class="col-6">
                            <p type="button" class="btn btn-white text-end" data-bs-toggle="modal" data-bs-target="#pickup" style="margin-left: 68%">Pilih pick up</p>
                                <div class="modal fade" id="pickup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-white bg-success">
                                                <h5 class="modal-title" id="exampleModalLabel"><b>Pilih Pick Up</b></h5>
                                                <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Antar - jemput
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                    Antar langsung ke tempat
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Pilih</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <hr width="100%" color="#c0c0c0">
                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Sub total</p>
                        </div>

                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">Rp 150.000</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Diskon</p>
                        </div>

                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">-</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Biaya penjemputan</p>
                        </div>
                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">Rp 15.000</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Total pembayaran</p>
                        </div>

                        <div class="col-6 text-end">
                            <p style="margin-right: 70px">Rp 200.000</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p style="margin-left: 40px">Pembayaran</p>
                        </div>
                        <div class="col-6">
                            <p type="button" class="btn btn-white text-end" data-bs-toggle="modal" data-bs-target="#pembayaran" style="margin-left: 50%">Pilih metode pembayaran</p>
                            <div class="modal fade" id="pembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header text-white bg-success">
                                            <h5 class="modal-title" id="exampleModalLabel"><b>Pilih metode pembayaran</b></h5>
                                            <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <p>
                                                <a class="btn bg-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Transfer Bank <i class="bi bi-chevron-down"></i>
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Bank BCA
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Bank BRI
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Bank MANDIRI
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Bank BNI
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-grid gap-10 d-md-block" style="margin-top: 10px">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                    QRIS (Dana, Gopay)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <a class="btn btn-outline-success" href="/user/pemesanan/qrish" role="button">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto" style="padding-top: 12px">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#checkoutUser">
                            Checkout
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="checkoutUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-white bg-success">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Congratulations</b></h5>
                                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img src="{{ asset('assets/img/centanghijauuu.png') }}" alt="centangHijau" width="120px" height="120px">
                                            <h5 class="berhasil" style="padding-top: 5px; color: grey">Pesananmu sudah berhasil dibuat!</h5>
                                            <h5 class="berhasil" style="padding-top: 5px; color: grey">Silahkan lanjutkan pembayaran</h5>
                                        </div>

                                        <div class="d-grid gap-2 col-6 mx-auto mb-2">
                                            <a class="btn btn-outline-success" href="/user/pemesanan/info_pembayaran" role="button">Pembayaran</a>
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
