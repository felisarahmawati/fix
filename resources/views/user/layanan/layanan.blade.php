@extends('layouts_user.main')
@extends('layouts_user.header')

@section('container')
    <section id="services" class="services section-bg" style="padding-top: 70px;">
        <div class="mb-5" data-aos="fade-up">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h5 class="layanan">Silahkan Pilih</h5>
                <p class="layanan">Layanan yang kamu butuhkan</p>
            </div>
            <div class="row align-items-center" style=" margin-left:70px;">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="img mb-3">
                            <a href="/user/sub/baru"><img src="{{ asset('assets/img/icon_kendaraan.png') }}" alt="..."></a>
                        </div>
                        <h4 class="title"><a href="/user/sub/baru">Kendaraan</a></h4>
                        <b>
                            <p class="description">
                                Layanan yang kami sediakan
                            </p>
                        </b>
                        <p class="description">
                            - Free cuci kendaraan<br>
                            - Kendaraan dibersihkan<br>
                            - Kontrol mesin setiap pagi<br>
                            - Keamanan terjaga<br>
                            - Konsultasi & Support</p>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="img mb-3">
                            <a href="/user/sub/bangunan"><img src="{{ asset('assets/img/icon_bangunann.png') }}" alt="..."></a>
                        </div>
                        <h4 class="title">
                            <a href="/user/sub/bangunan">
                                Bangunan
                            </a>
                        </h4>
                        <b>
                            <p class="description">
                                Layanan yang kami sediakan
                            </p>
                        </b>
                        <p class="description">
                            - Rumah bersih<br>
                            - Kontrol rumah setiap pagi<br>
                            - Rumah dibersihkan<br>
                            - Konsultasi & Support<br>
                            - Keamanan terjaga</p>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="img mb-3">
                            <a href="/user/sub/barang"><img src="{{ asset('assets/img/icon_barang.png') }}" alt="..."></a>
                        </div>
                        <h4 class="title">
                            <a href="/user/sub/barang">
                                Barang
                            </a>
                        </h4>
                        <b>
                            <p class="description">
                                Layanan yang kami sediakan
                            </p>
                        </b>
                        <p class="description">
                            - Barang terjaga setiap hari<br>
                            - Kontrol setiap pagi<br>
                            - Barang dibersihkan boong<br>
                            - Keamanan terjaga<br>
                            - Konsultasi & Support</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
