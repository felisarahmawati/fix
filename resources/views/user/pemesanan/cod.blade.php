@extends('layouts_user.main')
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">

    <div class="container mt-4 mb-4" data-aos="fade-up">
        <div class="row row-layanan">
            <img src="{{ asset('assets/img/cod.jpg') }}" class="card-img-top" alt="bca" style="width: 30%; margin-left: 35%">
            <p class="text-center fs-4 mt-4">
                <small class="fw-bold">Selamat, transaksi mu berhasil!</small>
            </p>
            <div class="col text-center">
                <div class="estimasi mt-2">
                    <p class="fw-bold text-muted" style="font-size: 16px">Pembayaran berhasil diverifikasi. Mohon untuk menyiapkan uang sejumlah informasi dibawah ini<br>
                        pada saat vendor mengambil layanan
                    </p>
                </div>
            </div>
            <p class="text-center" style="font-size: 15px">
                Nomor order
                <small class="fw-bold">012414122131231</small>
            </p>
            <p class="text-center">
                TOTAL PEMBAYARAN <br>
            </p>
            <p class="text-center text-success fs-3">
                Rp 155.000
            </p>

            <div class="d-grid gap-2 col-4 mx-auto">
                <a class="btn btn btn-success" href="/user/layanan" role="button">Pesan Lagi</a>
                <a class="btn btn-outline-success btn-sm" href="/user/pemesanan/History/on" role="button">Pesanan Saya</a>
            </div>
        </div>
    </div>
</section>
@endsection
