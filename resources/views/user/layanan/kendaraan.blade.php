@extends('layouts_user.main')

@section('container')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
        <div class="container mt-2 mb-2">
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

        <div class="container mt-2">
            <div class="col-12 mb-3">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nama kota, kabupaten, kecamatan" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="container mt-2">
            <div class="card">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col" style="width: 400px">
                        <div class="">
                            <div class="col-6" style="width: 100%">
                                <div class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                                    <div class="card-body">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="/user/layanan">Layanan</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                                            </ol>
                                        </nav>
                                        <h5 class="card-title text-success"><b>Kategori <i class="bi bi-grid-fill"></i></b></h5>
                                        <hr>
                                        <div class="row" style="width: 300px">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Kendaraan
                                                        </button>
                                                    </h2>

                                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="/user/layanan/detail_layanan/kendaraan/" role="button">Kendaraan golongan 1</a>
                                                        </div>
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="#" role="button">Kendaraan golongan 2</a>
                                                        </div>
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="#" role="button">Kendaraan golongan 3</a>
                                                        </div>
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="#" role="button">Kendaraan golongan 4</a>
                                                        </div>
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="#" role="button">Kendaraan golongan 5</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Bangunan
                                                    </button>
                                                    </h2>

                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="/user/subkategori/bangunan/apartement" role="button">Apartement</a>
                                                        </div>
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="/user/subkategori/bangunan/kost" role="button">Kost</a>
                                                        </div>
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="/user/subkategori/bangunan/kontrakan" role="button">Kontrakan</a>
                                                        </div>
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="/user/subkategori/bangunan/rumah" role="button">Rumah pribadi</a>
                                                        </div>
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="/user/subkategori/bangunan/rumahsusun" role="button">Rumah susun</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Barang
                                                    </button>
                                                    </h2>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="/user/subkategori/barang/perpaket" role="button">Per paket</a>
                                                        </div>
                                                        <div class="accordion-body">
                                                            <a class="btn btn-white" href="/user/subkategori/barang/perbarang" role="button">Per barang</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col" style="width: 700px">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <p class="card-title mt-4 text-success" style="font-size: 20px"><b>Kendaraan golongan 1</b></p>
                                </div>
                                <div class="col-3">
                                    <select class="form-select form-select-sm mt-4" aria-label=".form-select-sm example">
                                        <option selected>Jarak</option>
                                        <option value="1">Terdekat</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select class="form-select form-select-sm mt-4" aria-label=".form-select-sm example">
                                        <option selected>Jam Buka</option>
                                        <option value="1">Buka sekarang</option>
                                        <option value="1">Buka 24 jam</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <div class="card" style="width: 13.5rem;">
                                        <a href="/user/layanan/detail_layanan/kendaraan"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="/user/layanan/detail_layanan/kendaraan"><p class="card-title"><b>Wijaya motor</b></p></a>
                                                </div>
                                                <div class="col-2">
                                                    <h5><i class="bi bi-suit-heart"></i></h5>
                                                </div>
                                                <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                    <b>IDR 70.000 - 200.000 / hari</b>
                                                </p>
                                            </div>

                                            <div class="rate text-warning">
                                                <p>3,5
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i> (70)
                                                </p>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="alamat">
                                                        <p style="font-size: 13px">Kec. Cempaka putih (1.4 km)</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="oc">
                                                        <p style="font-size: 15px">Buka</p>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="oc">
                                                        <p style="font-size: 15px; color: #00B56A"><b>Tersedia</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card" style="width: 13.5rem">
                                        <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="#"><p class="card-title"><b>Pelita | titip</b></p></a>
                                                </div>
                                                <div class="col-2">
                                                    <h5><i class="bi bi-suit-heart"></i></h5>
                                                </div>
                                                <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                    <b>IDR 65.000 - 150.000 / hari</b>
                                                </p>
                                            </div>

                                            <div class="rate text-warning">
                                                <p>4,5
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i> (270)
                                                </p>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="alamat">
                                                        <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="oc">
                                                        <p style="font-size: 15px">Tutup</p>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="oc">
                                                        <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="card" style="width: 13.5rem">
                                        <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="#"><p class="card-title"><b>Tirex - titipsini</b></p></a>
                                                </div>
                                                <div class="col-2">
                                                    <h5><i class="bi bi-suit-heart"></i></h5>
                                                </div>
                                                    <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                        <b>IDR 65.000 - 150.000 / hari</b>
                                                    </p>
                                            </div>

                                            <div class="rate text-warning">
                                                <p>4,5
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i> (270)
                                                </p>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="alamat">
                                                        <p style="font-size: 13px">Kec. Babarsari (1.4 km)</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="oc">
                                                        <p style="font-size: 15px">Tutup</p>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="oc">
                                                        <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end mt-3">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
