@extends('layouts_user.main')
    <!-- card pemesanan barang -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">

        <div class="container mt-4 mb-4" data-aos="fade-up">
            <div class="row row-layanan">
                <div class="bg-success p-2 text-white bg-opacity-75 text-center">MOHON SEGERA SELESAIKAN PEMBAYARAN</div>
                <p class="text-center fs-5 mt-4">
                    Transfer dana anda sebelum
                    <small class="fw-bold">23 Oktober 2022 23:59 Wib</small>
                </p>
                <div class="col text-center">
                    <div class="estimasi mt-4">
                        <p class="fw-bold text-muted fs-2">03:23:30:19</p>
                    </div>
                </div>
                <p class="text-center fs-5 mt-4">
                    TOTAL PEMBAYARAN <br>
                </p>
                <p class="text-center text-success fs-3">
                    Rp 155.000
                </p>
                <p class="text-center fs-6 mt-3 fw-bold">
                    Harap transfer sesuai jumlah pembayaran hingga digit terakhir<br>
                    <small class="text-muted">Jika jumlah yang ditransfer tidak sesuai,proses verifikasi pembayaran anda dapat terhambar</small>
                </p>
                <div class="card mb-3" style="width: 35%; margin-left: 420px">
                    <img src="{{ asset('assets/img/bca.png') }}" class="card-img-top" alt="bca" style="width: 35%; margin-left: 33%; margin-top: 25px">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-5">86 000 442 79 00</p>
                        <p class="text-center text-muted fs-6 fw-bold">Atas Nama : Leon Penitipan</p>
                    </div>
                </div>
                <!-- Button trigger modal -->

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-cloud-arrow-up-fill p-2"></i>Konfirmasi Pembayaran
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header text-white bg-success">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Upload bukti transfer & Konfirmasi pembayaran</b></h5>
                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Bank Tujuan</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Bank BCA</option>
                                <option value="1">Bank Mandiri</option>
                                <option value="2">Bank BRI</option>
                                <option value="3">Bank BNI</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jumlah ditransfer</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pilih file bukti transfer</label>
                            <input type="file" class="form-control" id="inputGroupFile02">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success" href="/user/pemesanan/struk" role="button">Konfirmasi Pembayaran</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



