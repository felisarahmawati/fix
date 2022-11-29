@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50" data-aos="fade-up">

    <div class="container">
        <div class="row-layanan">
            <img src="{{ asset('assets/img/vc.jpg') }}" class="card-img-top" alt="bca" style="width: 50%; margin-left: 25%">
            <p class="text-center fs-4 mt-4">
                <small class="fw-bold">Selamat Datang di Titipsini.com!</small>
            </p>
            <div class="col text-center">
                <div class="estimasi mt-2">
                    <p class="text-muted" style="font-size: 16px">Untuk memulai layanan, daftar sebagai vendor dengan <br>
                         melengkapi informasi yang diperlukan
                    </p>
                </div>
                <div class="d-grid gap-2 col-2 mx-auto">
                    <a class="btn btn-success" href="/user/lengkapi_vendor" role="button">Mulai Pendaftaran</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
