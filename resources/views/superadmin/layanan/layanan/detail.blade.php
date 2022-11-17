
<div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
    <div class="icon-box">
        <div class="img mb-3">
            <a href="#"><img src="{{ url('/storage/' .$detail->image)}}" style="width: 80px;"></a>
        </div>
        <h4 class="title">{{ $detail->judul }}</h4>
            <b>
                {{-- <p class="description">Layanan yang kami sediakan</p> --}}
            </b>
            <p class="description"></p>
            <p class="description">{!! $detail->deskripsi !!}</p>
    </div>
            <!-- <a href="#services" class="btn btn-primary" style="margin-top: 10px; background:#00B56A;">Pilih Paket</a> -->
</div>
