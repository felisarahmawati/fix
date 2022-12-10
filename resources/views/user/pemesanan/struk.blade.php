@extends('layouts_user.main')
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
    <div class="container mt-4 mb-4" data-aos="fade-up">
        <div class="row row-layanan">

            <figure class="figure">
                <img src="{{ asset('assets/img/centanghijauuu.png') }}" class="figure-img img-fluid rounded" alt="..." style="width: 150px; margin-left: 43%; margin-top: 25px">
            </figure>

            <p class="text-center fs-4 fw-bold">
                PEMBAYARAN ANDA BERHASIL
            </p>

            <p class="text-center">
                <small class="fw-bold">Terimakasih atas kepercayaannya kepada Titipsini.com.<br>
                    Layanan Anda akan kami proses secepatnya</small>
            </p>

            <div class="container">
                <div class="card mb-3 mt-4">
                    <div class="card-body">
                        <dl class="row">
                            <p class="fw-bold">Informasi</p>

                            <dt class="col-sm-3">Tanggal : </dt>
                            <dd class="col-sm-9">22/10/2022</dd>
                          
                            <dt class="col-sm-3">Id Pembayaran :</dt>
                            <dd class="col-sm-9">1241241414141</dd>
                          
                            <dt class="col-sm-3">Pembayaran dari Bank :</dt>
                            <dd class="col-sm-9">Bank BRI/Alvi Nurbaetri</dd>
                          
                            <dt class="col-sm-3 text-truncate">Rekening tujuan :</dt>
                            <dd class="col-sm-9">Bank BCA/Abah Titipsini</dd>
                          
                            <dt class="col-sm-3">Total pembayaran :</dt>
                            <dd class="col-sm-9">Rp 155.000.851</dd>
                        </dl>
                    </div>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto mb-3">
                    <a class="btn btn btn-success" href="/user/layanan" role="button">Pesan Lagi</a>
                    <a class="btn btn-outline-success btn-sm" href="/user/pemesanan/history/on_progress" role="button">Pesanan Saya</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection