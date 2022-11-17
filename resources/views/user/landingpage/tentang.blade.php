
@extends('layouts_user.main')
@extends('layouts_user.header')

<!-- ======= About Section ======= -->
@section('container')
    <section id="about" class="about" style="padding-top: 150px">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" width="100%">
                    <img src="../assets/img/about-p.png" class="img-fluid" width="100%" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h3 data-aos="fade-up">Tentang Kami</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Layanan penitipan pertama di Indonesia yang
                        terdaftar dan telah dipercaya kredibilitasnya</p>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Kami menyediakan jasa penitipan barang bagi anda yang mau menitipkan barangnya.
                        Selain itu juga kami menyediakan jasa penitipan rumah dan kendaraan anda. Tersedia di 3 Kota
                        Besar.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- End About Section -->
