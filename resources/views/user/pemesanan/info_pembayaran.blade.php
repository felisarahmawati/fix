@extends('layouts_user.main')
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
    <div class="container mt-4 mb-4">
        <div class="card mb-3">
            <div class="card-header bg-white">
                <h5 class="text text-success"><b>Info Pembayaran</b></h5>
            </div>

            <div class="card-body">
                <div class="card text-center mb-3">
                    <div class="card-body" style="background: rgba(56, 218, 119, 0.3)">
                        <p class="mb-1">Segera lakukan pembayaran transaksi. Jika bukti transfer tidak di upload dalam waktu 24 jam maka pesanan
                            akan otomatis dibatalkan.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <p class="mb-1" style="font-size: 25px"><b>Total pembayaran</b></p>
                        <p class="text-success mb-1" style="font-size: 20px"><b>Rp 200.000</b></p>
                        <p class="mb-1 text-secondary" style="font-size: 17px;">Transfer dapat dilakukan ke nomor rekening Virtual Account BRI (BRIVA) berikut ini :</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 text-center mt-2">
                        <img src="{{ asset('assets/img/bca.png') }}" alt="bca" width="25%" style="margin-left: 105%">
                    </div>
                    <div class="col-4 text-center mt-1">
                        <p class="text-dark" style="font-size: 22px; margin-left: 30%">084-506 311 2 <i class="bi bi-clipboard"></i></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <p class="text-secondary text-center mb-1" style="font-size: 17px">Bayar sesuai dengan nominal yang tertera</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-white">
                <h5 class="text text-success"><b>Alur Pembayaran</b></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16" style="color: #F24E1E">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                        </svg>
                    </div>

                    <div class="col-11 mt-1">
                        <p style="margin-right: 20%">Gunakan ATM / iBanking / mBanking / setor tunai</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-2-circle-fill" viewBox="0 0 16 16" style="color: #F24E1E">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z"/>
                        </svg>
                    </div>

                    <div class="col-11 mt-1">
                        <p style="margin-right: 20%">Silahkan Upload bukti transfer sebelum 10-09-2021</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-3-circle-fill" viewBox="0 0 16 16" style="color: #F24E1E">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                        </svg>
                    </div>

                    <div class="col-11 mt-1">
                        <p style="margin-right: 20%">Demi keamanan transaksi mohon untuk tidak membagikan bukti atau Konfirmasi
                            pembayaran pesanan kepada siapa pun, selain mengunggahnya via
                            aplikasi titipsini.com
                        </p>
                    </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-outline-success" href="/user/pemesanan/konfirm_pembayaran" role="button">Upload bukti transfer</a>
                    {{-- <a class="btn btn-outline-secondary" href="#" role="button">Upload bukti transfer nanti</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
