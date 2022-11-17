@extends("layouts_user.main")

@section('container')
    <section id="services" class="services " style="padding-top: 100px;">
        <div class="container mt-4 mb-4">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @include('user.partials.p_customer')
                <div class="" style="width: 700px">
                    <div class="card col-sm-12">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Tentang</h5>
                            <hr width="100%" color="#c0c0c0">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="tentang" style="margin-left: 120px">
                                        <img src="{{ asset('assets/img/titip.png') }}" class="img-tentang mx-auto d-block">
                                        <p class="text-center text-success" style="font-size: 20px"><b>Titipsini.com</b></p>
                                    </div><br>

                                    <div class="desc mb-4" style="margin-left: 120px">
                                        <h6 class="text-center">
                                            <b>Layanan penitipan <span class="text-success"> PERTAMA </span> di Indonesia yang terdaftar dan telah dipercaya kredibilitasnya</b>
                                        </h6>
                                    </div><br>

                                    <div class="tntng" style="margin-left: 120px">
                                        <p>Kami menyediakan jasa penitipan barang bagi anda yang mau menitipkan barangnya</p>
                                        <p>Selain itu juga kami menyediakan jasa penitipan rumah dan kendaraan anda</p>
                                    </div><br>

                                    <div class="pntp" style="margin-left: 150px">
                                        <h6 class="text-center text-success"><b>Kami tersedia di berbagai kota di Indonesia</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
