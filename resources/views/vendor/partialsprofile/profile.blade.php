                {{-- Card User Profile --}}
                <div class="row g-3 mb-5" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <div class="col-lg-4 col-md-6 mt-4 pe-2">
                        <div class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                            <div class="col-md-15">
                                @if(Auth::user()->photo)
                                    <img src="{{ asset('storage/photos/'.Auth::user()->photo) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                @else
                                    <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                                @endif

                            </div>
                            <div class="person-name">
                                <h2 class="text-center fs-4 my-2">{{ Auth::user()->name }}</h2>
                            </div>
                            <div class="bt">
                                <button onclick="" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    Edit
                                </button>
                            </div>
                            <hr width="100%" color="#c0c0c0">

                            <div class="card-body " style="font-size: 18px">
                                {{-- <div class="row" style="width: 300px; ">
                                    <div class="col-md">
                                        <p><i class="bi bi-geo-alt px-1"  style="color:rgb(85, 182, 91)"></i>Pengaturan profil</p>
                                    </div>

                                    <div class="col-md-3">
                                        <p class="text-end" ><a href="/Vendor/profilevendor/pengaturanprofile"><i class="bi bi-chevron-right"></i></a></p>
                                    </div>
                                </div> --}}

                                {{-- <div class="row" style="width: 300px">
                                    <div class="col-md">
                                        <p href=""><i class="bi bi-currency-dollar" style="color:rgb(85, 182, 91)"></i>Rekening</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-end"><a href="#"><i class="bi bi-chevron-right"></i></a></p>
                                    </div>
                                </div> --}}

                                <div class="row" style="width: 300px">
                                    <div class="col-md">
                                        <p href=""><i class="bi bi-bell px-1"  style="color:rgb(85, 182, 91)"></i>Notifikasi</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-end"><a href="/vendor/vendor/profilevendor/Notifikasi"><i class="bi bi-chevron-right"></i></a></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <p><i class="bi bi-question-circle px-1" style="color:rgb(85, 182, 91)"></i>Kebijakan Privasi</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-end"><a href="/vendor/vendor/profilevendor/Kebijakan_privasi"><i class="bi bi-chevron-right"></i></a></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <p><i class="bi bi-question-circle px-1"  style="color:rgb(85, 182, 91)"></i>Ketentuan Layanan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-end"><a href="/vendor/vendor/profilevendor/Ketentuan_layanan"><i class="bi bi-chevron-right"></i></a></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md">
                                        <p><i class="bi bi-question-circle px-1"  style="color:rgb(85, 182, 91)"></i>Pusat Bantuan</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-end"><a href="/vendor/vendor/profilevendor/Pusat_bantuan"><i class="bi bi-chevron-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


