@extends("layouts_user.main")

@section('container')
<section class="align-items-center services section-bg"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="container mt-9 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="background-color: #fff;">
                    <div class="card-body">
                        <nav aria-label="breadcrumb " class="card-header" style="height: 40px; width:100%">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="/user/profil/profil">Profile</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                            </ol>
                        </nav>
                    <form action="/signup/index" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card">
                        <div class="card-body">
                            <a href="/user/profil/bantuan/Jawaban1">Apa itu titipsini.com?</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="card-body">
                            <a href="/user/profil/bantuan/Jawaban2">Bagaimana cara membayar ?</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="card-body">
                            <a href="/user/profil/bantuan/Jawaban3">Bagaimana melihat profil anda ?</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="card-body">
                            <a href="/user/profil/bantuan/Jawaban4">Bagaimana cara pesan penitipan ?</a>
                        </div>
                    </div>

                    <div class="card mt-2">
                        <div class="card-body">
                            <a href="/user/profil/bantuan/Jawaban5">Mengapa saya tidak menerima kode OTP?</a>
                        </div>
                    </div>
                    <br>
                    <label for="faq" class="form-label">Hubungi Kami</label><br><br>
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
</section>
@endsection

