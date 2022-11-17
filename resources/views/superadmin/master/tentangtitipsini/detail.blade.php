<div class="" style="width: 700px">
    <div class="card col-sm-12">
        <div class="card-body">
            <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Tentang</h5>
            <hr width="100%" color="#c0c0c0">
            <div class="row">
                <div class="col-md-10">
                    <div class="tentang" style="margin-left: 120px">
                        <img src="{{ Storage::url('public/app/tentangtitipsini/').$detail->gambar }}" class="img-tentang mx-auto d-block">
                        <p class="text-center text-success" style="font-size: 20px"><b>{{ $detail->judul }}</b></p>
                    </div>
                    <div class="desc mb-4" style="margin-left: 120px">
                        <h6 class="text-center">
                            <b>{{ $detail->baris1 }}</b>
                        </h6>
                    </div>
                    <div class="tntng" style="margin-left: 120px">
                        <p>{{ $detail->baris2 }}</p>
                        <p>{{ $detail->baris3 }}</p>
                    </div>
                    <div class="pntp" style="margin-left: 150px">
                        <h5 class="text-center text-success"><b>{{ $detail->baris4 }}</b></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>         
</div>
{{-- @extends("layouts.user")
@section('container')
    
    <section id="services" class="services " style="padding-top: 100px;">
        <div class="container mt-4 mb-4">
            <div class="row row-cols-1 row-cols-md-2 g-4">

                @include('partials.profile')

                    <div class="" style="width: 700px">
                        <div class="card col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Tentang</h5>
                                <hr width="100%" color="#c0c0c0">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="tentang" style="margin-left: 120px">
                                            <img src="{{ Storage::url('public/app/tentangtitipsini/').$detail->gambar }}" class="img-tentang mx-auto d-block">
                                            <p class="text-center text-success" style="font-size: 20px"><b>Titipsini.com</b></p>
                                        </div>
                                        <div class="desc mb-4" style="margin-left: 120px">
                                            <h6 class="text-center">
                                                <b>{{ $detail->baris1 }}</b>
                                            </h6>
                                        </div>
                                        <div class="tntng" style="margin-left: 120px">
                                            <p>{{ $detail->baris2 }}</p>
                                            <p>{{ $detail->baris3 }}</p>
                                        </div>
                                        <div class="pntp" style="margin-left: 150px">
                                            <h5 class="text-center text-success"><b>baris4</b></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>         
                    </div>
            </div>
        </div>
    </section>
@endsection --}}