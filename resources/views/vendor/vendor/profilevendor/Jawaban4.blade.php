@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center  services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
<div class="container mt-4 mb-4">

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col" style="width: 400px">


            <div class="row ">
                <div class="col-md-12">
                    <div class="card" style="background-color: #fff;">
                        <div class="card-body">
                        <form action="/signup/index" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="faq" class="form-label"><b>FAQ</b></label><hr>
                        <div class="card">
                            <div class="card-body">
                            <p><a href="/vendor/vendor/profilevendor/Jawaban1">Apa itu titipsini.com?</a></p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p><a href="/vendor/vendor/profilevendor/Jawaban2">Bagaimana mengkonfirmasi ulang KTP? ?</a></p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p><a href="/vendor/vendor/profilevendor/Jawaban3">Bagaimana cara menambahkan layanan?</a></p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p><a href="/vendor/vendor/profilevendor/Jawaban4"></a>Bagaimana jika KTP dan KK tidak sinkron?</p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                               <p> <a href="/vendor/vendor/profilevendor/Jawaban5">Mengapa saya tidak bisa membatalkan
                                pesanan yang terlanjur diambil?</a></p>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-body">
                               <p> <a href="/vendor/vendor/profilevendor/Jawaban6">Mengapa saya tidak mendapatkan
                                notifikasi penarikan?</a></p>
                            </div>
                        </div>
                        <br>
                        <label for="faq" class="form-label">Hubungi Kami</label><br>
                        <a href="#" class="btn btn-success"><i class="bi bi-envelope"></i> Send E-mail</a>
                        <a href="#" class="btn btn-success"><i class="bi bi-telephone"></i> Call Us</a>
                        <div class="d-grid gap-2 mt-2">
                            <button class="btn btn-success" type="button"  href="#"><i class="bi bi-whatsapp" style="font-size: 20px"></i><b> WhatsApp</b></button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

          </div>
        </div>
        <div class="col" style="width: 700px">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Bagaimana jika KTP dan KK tidak sinkron?</h5>
              <hr width="100%" color="#c0c0c0">
            <div class="p-3">
                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum ullamcorper urna mollis augue rhoncus, ac.</p>
            </div>

              <a href=""><p>Apakah jawaban ini membantu?</p></a>
          </div>
        </div>

      </div>

</div>
</section>
@endsection
