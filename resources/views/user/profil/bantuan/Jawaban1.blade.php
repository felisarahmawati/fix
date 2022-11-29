@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px; padding-left:100px">
    <div class="container mt-4 mb-4 row-layanan">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col" style="width: 400px; margin-left:10px">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h5 class="card-title fw-bold">Pusat Bantuan</h5>
                    <hr width="100%" color="#c0c0c0">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action" href="/user/profil/bantuan/Jawaban1" role="button">Apa itu titipsini.com ?</a>
                        <a class="list-group-item list-group-item-action" href="#" role="button">Bagaimana cara membayar ?</a>
                        <a class="list-group-item list-group-item-action" href="#" role="button">Bagaimana melihat profile anda ?</a>
                        <a class="list-group-item list-group-item-action" href="#" role="button">Bagaimana cara pesan penitipan ?</a>
                        <a class="list-group-item list-group-item-action" href="#" role="button">Mengapa saya tidak menerima kode OTP ?</a>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 730px">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h5 class="card-title fw-bold">Bagaimana cara membayar pesanan ?</h5>
                    <div class="p-2">
                        <p class="text-middle" style="font-size: 13px">
                            <p style="font-size: 15px">Untuk membayar pesanan dengan Transfer Bank, pilih <strong>Metode Pembayaran</strong> > pada halaman
                                <strong>Detail Pemesanan</strong > > pilih <strong>Transfer Bank</strong > > pilih <strong>bank yang kamu gunakan</strong > > Pilih <strong>Konfirmasi</strong > > pilih <strong>Bayar</strong > >
                                lakukan pembayaran mengikuti petunjuk transfer yang tertera sesuai dengan metode transfer yang dipilih.
                            </p>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            1. <img src="{{ asset('assets/img/metod1.png') }}" alt="" style="width: 90%;" class="border">
                        </div>
                        <div class="col-6">
                            2. <img src="{{ asset('assets/img/metod2.png') }}" alt="" style="width: 90%;" class="border">
                        </div>
                        <div class="col-6 mt-3">
                            3. <img src="{{ asset('assets/img/metod3.png') }}" alt="" style="width: 90%;" class="border">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
