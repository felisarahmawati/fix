@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px; padding-left:100px">
    <div class="container mt-4 mb-4 row-layanan">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include("user.partials.p_customer")
            <div class="col" style="width: 730px">
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
        </div>
    </div>
</section>
