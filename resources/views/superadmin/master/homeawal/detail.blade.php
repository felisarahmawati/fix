<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center card">

    <div class="container ">
        <div class="row p-3">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>{{ $detail->content1 }}</h1>

                <h2>{{ $detail->content2 }}</h2>

                <h2>{{ $detail->content3 }}</h2>
                <div>
                    <a href="#services" class="btn-get-started scrollto">Titip Sekarang!</a>
                </div>

                <div class="icon" class="back-in-time" style="margin-top: 30px;">
                    <img src="{{ asset ('/assets/img/reload.png') }}" style="width: 35px; height: 30px" >
                    <span style="font-size: large;"> Melayani 24 Jam</span>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{ url('/storage/' .$data->image)}}" style="width: 40%;">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->
