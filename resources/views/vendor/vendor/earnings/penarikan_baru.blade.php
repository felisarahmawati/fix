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
                    <h2>Penarikan</h2>
                </div>
            </div>
    <div class="">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-6 mt-4 pe-2">
                    <div class="card-packing d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                        <div class="card">
                            <p class="card-header bg-white text-success"><b>Penarikan Uang :</b></p>
                            <div class="card-body">
                              <p class="card-text">Pilih nominal yang ingin anda ambil atau masukan jumlah yang ingin anda
                                masukan sesuai saldo yang tersedia.</p>
                            </div>
                            <div class="container">
                                <p class="text-success"><b>Pilih Nominal : </b></p>
                                <div class="row justify-content-md-center">
                                    <div class="col-4">
                                        <button type="button" class="btn btn-outline-success">Rp 100.000</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-outline-success">Rp 150.000</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-outline-success">Rp 200.000</button>
                                    </div>
                                </div><br>
                                <div class="row justify-content-md-center">
                                    <div class="col-4">
                                        <button type="button" class="btn btn-outline-success">Rp 100.000</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-outline-success">Rp 150.000</button>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-outline-success">Rp 200.000</button>
                                    </div>
                                </div><br>
                                <div class="row justify-content-md-center">
                                    <div class="d-grid col-8">
                                        <input type="penarikan" class="form-control" id="inputPenarikan" placeholder="atau isi sendiri disini">
                                    </div>
                                    <div class="col-md-2 text-success">
                                        <a href="/earning">
                                        <h3><i class="bi bi-arrow-right-circle"></i></h3>
                                        </a>
                                    </div>
                                </div><br>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card form layanan --}}
                <div class="col-md-6 mt-4 pe-10 ps-2 mb-1 container">
                    <div class="card-jumlah d-flex flex-column px-0 py-4">
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
                                    <div class="col-md-3">
                                        <button class="btn bg-white" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal33">No Rek</button>
                                        <div class="modal fade" id="exampleModal33" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header text-white bg-success">
                                                        <h5 class="modal-title">Masukan no rekening tujuan</h5>
                                                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success">Oke</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <p>Penarikan di Bank</p>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn bg-white" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal44">Pilih Bank</button>
                                        <div class="modal fade" id="exampleModal44" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header text-white bg-success">
                                                        <h5 class="modal-title">Pilih Bank</h5>
                                                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                              Bank BRI
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                              Bank BNI
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                              Bank Mandiri
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Bank BCA
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success">Oke</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <p>Jumlah Penarikan</p>
                                    </div>
                                    <div class="col-md-3">
                                        Rp 1.000.000
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <p>Biaya Admin</p>
                                    </div>
                                    <div class="col-md-3">
                                        Rp 10.000
                                    </div>
                                </div>
                                <hr width="100%" color="#c0c0c0">
                                <div class="row">
                                    <div class="col-md">
                                        <p>Total</p>
                                    </div>
                                    <div class="col-md-3">
                                        Rp 1.010.000
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="row justify-content-between">
                                        <div class="d-grid gap-2 col-6" style="padding-top: 10px">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalnorek">
                                                Edit No.Rek
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalnorek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <p class="modal-title" id="exampleModalLabel"><b>Masukan No Rekening Tujuan</b></p>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="button" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 col-6" style="padding-top: 10px">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalpilihbank">
                                                Edit Pilih Bank
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalpilihbank" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <p class="modal-title" id="exampleModalLabel"><b>Pilih Bank</b></p>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Bank BRI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Bank BNI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                Bank Mandiri
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Bank BCA
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <button type="button" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 col-6 mx-auto" style="padding-top: 12px">
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalearning">
                                            Konfirmasi
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalearning" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="card rounded-3 text-center">
                                                        <div class="card-body">
                                                          <img src="assets/img/centanghijauuu.png" alt="centangHijau" width="20%" height="20%">
                                                          <p class="congratulations" style="padding-top: 20px"><b>Congratulations!!!<b></p>
                                                          <p class="berhasil" style="padding-top: 5px; color: grey">
                                                            Konfirmasi penarik sudah berhasil. Saatnya sekarang tunggu notifikasi dari aplikasi ya!
                                                          </p>
                                                          <div class="d-grid gap-2 col-6 mx-auto">
                                                            <a class="btn btn-success" href="/info_penarikan" role="button">Info Penarikan</a>
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
            </div>
        </div>
    </section>

@endsection
