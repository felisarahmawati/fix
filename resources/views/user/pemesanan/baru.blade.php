@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">

    <div class="container mt-2 mb-4" data-aos="fade-up">
        <div class="row row-layanan">
            <div class="col-7">
                <div class="card-body">
                    <h5 class="fw-bold">Detail Pemesanan</h5>

                    <div class="shadow bg-body rounded">
                        <div class="mt-4" style="max-width: 100%">
                            <div class="row g-0">
                                <div class="col-md-3 p-4 justify-content-center">
                                    <img src="{{ asset('assets/img/parkirmotor.jpg') }}" class="img-fluid rounded-start" style="width: 100%; margin-left: 10px">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-2">
                                                <p class="Pesanan fs-5"><b>Abah Titipsini</b></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="tglTransaksi" style="font-size: 14px">
                                                    Qty : <b>1x</b> | 
                                                    Penitipan : <b>4 hari</b> |
                                                    Subtotal layanan : <b>Rp 35.000</b> 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <p>Tanggal Masuk</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <p>Selasa, 15/11/2022</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Tanggal Keluar</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <p>Jumat, 18/11/2022</p>
                        </div>
                        <div class="col-6">
                            <p>Pick Up</p>
                        </div>
                        <div class="col-6 text-end">
                            <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#pickup">Pilih Pick Up</a>
                        </div>

                        <h6 class="fw-bold mt-4">Data Pemesanan</h6><hr>
                        <div class="col-6">
                            <p style="font-size: 15px"><b>Angel Silubun (Rumah)</b><br>
                                0832553141241
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-outline-success btn-sm" disabled>Utama</button>
                        </div>
                        <div class="col-12">
                            <p>Jl. Pandega Maharsi No.5B, Manggung, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="shadow bg-body rounded">
                    <div class="mt-4" style="max-width: 100%">
                        <div class="row g-0">
                            <div class="card-body">
                                <h6 class="fw-bold mt-1">Detail Pembayaran</h6><hr>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Sub total</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Rp 35.000 x 4</p>
                                    </div>
                                    <div class="col-6">
                                        <p>Biaya Penjemputan</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Rp 0</p>
                                    </div>
                                    <div class="col-6">
                                        <p>Kode Unik</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Rp 851</p>
                                    </div>
                                    <hr>
                                    <div class="col-6">
                                        <p>Total Pembayaran</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>Rp 155.000.851</p>
                                    </div>
                                    <div class="col-6">
                                        <p>Metode Pembayaran</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#paymentmethod">Pilih Metode</a>
                                    </div>
                                    <div class="d-grid gap-2 mb-2">
                                        <a class="btn btn-outline-success" href="/user/pemesanan/pembayaran" role="button">Bayar Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal-->
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

    <div class="modal fade" id="paymentmethod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-white bg-success">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Pilih Metode Pembayaran</b></h5>
                    <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">Transfer Bank</p><hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <img src="{{ asset('assets/img/bri.png') }}" class="img-fluid" style="width: 25px; margin-right:5px">Bank BRI
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <img src="{{ asset('assets/img/bnii.png') }}" class="img-fluid" style="width: 25px; margin-right:5px">Bank BNI
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <img src="{{ asset('assets/img/mandirii.png') }}" class="img-fluid" style="width: 25px; margin-right:5px">Bank Mandiri
                        </label>
                    </div>
                    <div class="form-check mt-2 mb-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <img src="{{ asset('assets/img/bcaa.png') }}" class="img-fluid" style="width: 25px; margin-right:5px">Bank BCA
                        </label>
                    </div>
                    <p class="fw-bold">Metode lain</p><hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Bayar di Tempat (COD)
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-success" href="/user/pemesanan/cod" role="button">Konfirmasi</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



