@extends('layoutsvendor.mainvendor')

<!-- ======= Hero Section ======= -->
@section('container')
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{{ $data['hero1'] }}</h1>

                    <h2>{{ $data['hero2'] }}</h2>

                    <h2>{{ $data['hero3'] }}</h2>
                    <div>
                        <a href="#services" class="btn-get-started scrollto">Titip Sekarang!</a>
                    </div>

                    <div class="icon" class="back-in-time" style="margin-top: 30px;">
                        <img src="assets/img/reload.png" width="37" height="37">
                        <span style="font-size: large;"> Melayani 24 Jam</span>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="assets/img/illust.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- End Hero -->

<!-- ======= Clients Section ======= -->
    @section('client')
        <div id="clients" class="clients section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <!-- <h2>Clients</h2> -->
                    <p>Partner Kami</p>
                </div>

                <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/gojek.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/grab.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/shopee.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/rog.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/suk.png" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="assets/img/clients/dana.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/indofod.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/garuda.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/2kl.webp" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/asus.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/nvidia.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/google.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/mikro.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/meta.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination">
                    </div>
                </div>
            </div>
        </div>
    @endsection
<!-- End Clients Section -->

