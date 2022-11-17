@extends('layouts_user.main')
@extends('layouts_user.header')

@section('container')
    <section id="contact" class="contact section-bg" style="padding-top: 100px;">
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
                            <p>Gg. Puntodewo 212, Modalan, Banguntapan, Kec. Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198</p>
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
                        <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s" frameborder="0"></iframe>
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>

                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>

                        <div class="my-3">
                            <div class="loading">
                                Loading
                            </div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your message has been sent. Thank you!
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>titipsini.com</h3>
                            <p> Gg. Puntodewo 212, Modalan, Banguntapan, Kec. Banguntapan <br>
                                Bantul, Yogyakarta<br>
                                Indonesia, 55198<br><br>
                                <strong>Phone:</strong> +62 8589 5548 2234<br>
                                <strong>Email:</strong> titipsiniofficial@main.com<br>
                            </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media Kami</h4>
                            <p>follow sosial media kami untuk update berita terbaru</p>
                                <div class="social-links mt-3">
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
    </section><!-- End Contact Us Section -->
@endsection
