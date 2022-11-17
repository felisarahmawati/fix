<div class="col" style="width: 400px">
    <div class="row ">
        <div class="col-md-12">
            <div class="card" style="background-color: #fff;">
                <div class="card-body">
                    <form action="/signup/index" method="POST" enctype="multipart/form-data">
                        @csrf
                            <label for="faq" class="form-label"><b>Pusat Bantuan</b></label><hr>
                            <div class="card">
                                <div class="card-body">
                                <p>Apa itu titipsini.com ?</P>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-body">
                                    <p><a href="/vendor/vendor/profilevendor/Jawaban2">Bagaimana mengkonfirmasi ulang KTP?</a></p>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-body">
                                    <p><a href="/vendor/vendor/profilevendor/Jawaban3">Bagaimana cara menambahkan layanan</a></p>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-body">
                                    <p><a href="/vendor/vendor/profilevendor/Jawaban4">bagaimana cara pesan penitipan ?</a></p>
                                </div>
                            </div>

                            <div class="card mt-2">
                                <div class="card-body">
                                <p><a href="/vendor/vendor/profilevendor/Jawaban5">Mengapa saya tidak menerima kode OTP?</a></p>
                                </div>
                            </div><br>

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
