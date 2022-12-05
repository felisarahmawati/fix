@extends("layouts_user.main")

@section('container')
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50" data-aos="fade-up">

        <div class="container layanan">
            <div class="row-layanan">
              <div class="row">
                  <div class="col-3">
                      <div style="width: 18rem;">
                          <div class="card-body">
                              <div class="col-12">
                                <form class="d-flex mb-3" role="search">
                                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                  <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
                                </form>
                              </div>
                          </div>
                      </div>

                      <div style="width: 18rem;">
                          <div class="card-body">
                              <h5 class="card-title fw-bold text-muted">Filter Berdasarkan <i class="bi bi-menu-button-wide-fill" style="margin-left: 45px"></i></h5>
                              <hr>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                      Jarak Terdekat
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-9">
                      <div class="container mt-3 mb-3">
                          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                              <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="{{ asset('assets/img/topi.png') }}" class="d-block w-100">
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

                          <div class="row row-cols-1 row-cols-md-3 g-3">
                              <div class="col">
                                  <div class="card mt-4 card-layanan">
                                      <figure class="figure">
                                              <a href="/user/kategori/bangunan"><img src="{{ asset('assets/img/rumah1.jpg') }}" class="figure-img img-fluid rounded" alt="kendaraan" style="border-radius: 5px; width:300px"></a>
                                      </figure>
                                      <div class="card-body">
                                          <p class="card-title fw-bold fs-6">Titip bangunan</p>
                                          <p class="text-success"><b style="font-size: 16px">Rp 35.000/hari</b><br>
                                          <small><span class="d-inline-block text-truncate text-muted" style="max-width: 230px;">
                                              Jl. Perkutut Gg. Rumah Pengadilan No.1, Demangan, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55221
                                          </span></small>
                                          </p>
                                          <div class="hstack gap-2">
                                          <div class="fw-bold text-muted justify-content-start" style="font-size: 15px">1,4 Km</div>
                                          <div class="vr"></div>
                                          <div class="fw-bold text-success" style="font-size: 15px">Tersedia</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card mt-4 card-layanan">
                                      <figure class="figure">
                                              <a href="/user/kategori/barang"><img src="{{ asset('assets/img/rumah2.jpg') }}" class="figure-img img-fluid rounded" alt="kendaraan" style="border-radius: 5px; width:300px"></a>
                                      </figure>
                                      <div class="card-body">
                                          <p class="card-title fw-bold fs-6">Nitip banget</p>
                                          <p class="text-success"><b style="font-size: 16px">Rp 35.000/hari</b><br>
                                          <small><span class="d-inline-block text-truncate text-muted" style="max-width: 230px;">
                                              Jl. Demangan Baru Jl. Cenderawasih No.13, Demangan Baru, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
                                          </span></small>
                                          </p>
                                          <div class="hstack gap-2">
                                          <div class="fw-bold text-muted justify-content-start" style="font-size: 15px">1,4 Km</div>
                                          <div class="vr"></div>
                                          <div class="fw-bold text-success" style="font-size: 15px">Tersedia</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="card mt-4 card-layanan">
                                      <figure class="figure">
                                          <a href="/user/kategori/barang"><img src="{{ asset('assets/img/rumah1.jpg') }}" class="figure-img img-fluid rounded" alt="kendaraan" style="border-radius: 5px; width:300px"></a>
                                      </figure>
                                      <div class="card-body">
                                        <a href="/user/kategori/barang"><p class="card-title fw-bold fs-6 text-dark">Iya titip aja</p></a>
                                        <p class="text-success"><b style="font-size: 16px">Rp 35.000/hari</b><br>
                                          <small><span class="d-inline-block text-truncate text-muted" style="max-width: 230px;">
                                            Jl.sukaria No.62A, RT.15/RW.19, Nanggulan, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282
                                          </span></small>
                                        </p>
                                        <div class="hstack gap-2">
                                          <div class="fw-bold text-muted justify-content-start" style="font-size: 15px">2,5 Km</div>
                                          <div class="vr"></div>
                                          <div class="fw-bold text-success" style="font-size: 15px">Tersedia</div>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
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
    </section>
@endsection
