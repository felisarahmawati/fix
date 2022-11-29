@extends('layouts_user.index')
@section('container')

<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Bingung Mau nitip barang dimana?</h1>

                <h2>Titipsini aja</h2>

                <h2>Semua bisa dititipkan termasuk barang, rumah
                    atau kendaraan.</h2>
                <div>
                    <a href="/user/layanan" class="btn-get-started scrollto">Titip Sekarang!</a>
                </div>

                <div class="icon" class="back-in-time" style="margin-top: 30px;">
                    <img src="../assets/img/reload.png" width="37" height="37">
                    <span style="font-size: large;"> Melayani 24 Jam</span>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="../assets/img/illust.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>

<main id="main">
    <section id="about" class="about">

        <div class="container">

            <div class="row justify-content-between">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" width="100%">
                    <img src="{{ asset('assets/img/about-p.png') }}" class="img-fluid" width="100%" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Tentang Kami</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Layanan penitipan pertama di Indonesia yang
                        terdaftar dan telah dipercaya kredibilitasnya</p>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Kami menyediakan jasa penitipan barang bagi anda yang mau menitipkan barangnya.
                        Selain itu juga kami menyediakan jasa penitipan rumah dan kendaraan anda. Tersedia di 3 Kota
                        Besar.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services section-bg" style="padding-top: 70px;">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
              <h5>Layanan</h5>
              <p class="layanan">Silahkan pilih layanan yang kamu butuhkan</p>
          </div>
          <div class="row align-items-center" style=" margin-left:70px;">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                  <div class="img mb-3">
                      <a href="/user/sub/baru"><img src="{{ asset('assets/img/icon_kendaraan.png') }}" alt="..."></a>
                  </div>
                  <h4 class="title"><a href="/user/sub/baru">Kendaraan</a></h4>
                  <b>
                    <p class="description">Layanan yang kami sediakan</p>
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
                      <a href="/user/sub/baru"><img src="{{ asset('assets/img/icon_bangunann.png') }}" alt="..."></a>
                  </div>
                  <h4 class="title"><a href="/user/sub/baru">Bangunan</a></h4>
                  <b>
                    <p class="description">Layanan yang kami sediakan</p>
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
                      <a href="/user/sub/baru"><img src="{{ asset('assets/img/icon_barang.png') }}" alt="..."></a>
                  </div>
                  <h4 class="title"><a href="/user/sub/baru">Barang</a></h4>
                  <b>
                    <p class="description">Layanan yang kami sediakan</p>
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
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Hubungi Kami</p>
            </div>
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Gg. Puntodewo 212, Modalan, Banguntapan, Kec. Banguntapan, Bantul, Daerah Istimewa
                                Yogyakarta 55198</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>titipsiniofficial@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 8589 5548 2234</p>
                        </div>
                        <iframe scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                            title="%3$s" aria-label="%3$s" frameborder="0"></iframe>
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                    data-aos-delay="200">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="footer-contact">
                        <h3 class="text-center"><b>Titipsini.com</b></h3>
                        <p class="text-center">
                            Gg. Puntodewo 212, Modalan, Banguntapan, Kec. Banguntapan
                            Bantul, Yogyakarta<br>
                            <strong>Phone:</strong> +62 8589 5548 2234<br>
                            <strong>Email:</strong> titipsiniofficial@main.com<br>
                        </p>
                    </div>

                    <div class="text-center footer-links">
                        <h4>Sosial Media Kami</h4>
                        <div class="social-links mt-3">
                            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                            <a href="https://m.facebook.com/profile.php?id=100060690075937" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/titipsini.co/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCuAqwTJYTXP9i45XLeNVYlQ"
                                class="youtube"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>titipsini.com</span></strong>. All Rights Reserved
            </div>

        </div>

    </footer>
</main>
@endsection
