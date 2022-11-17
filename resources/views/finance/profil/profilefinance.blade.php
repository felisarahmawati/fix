@extends('finance.finance.dashboard_finance')

@section('content')
    <section class="home-section">
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <!-- Search -->
                <div class="search" data-aos="fade-left" data-aos-duration="1000">
                    <label>
                        <input type="text" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>

            <div class="container-fluid mb-2">
                <div class="row">
                    <div class="col-8 ms-4">
                        <p class="mb-0">OVERVIEW</p>
                        <h3>Admin Profile</h3>
                    </div>
                </div>
            </div>
                {{-- Card User Profile --}}
                <div class="row g-3 mb-3" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <div class="col-lg-4 col-md-6 mt-4 pe-2">
                        <div class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                            <div class="person-img px-xl-5">
                                <img src="{{ asset('assets/img/foto1.jpg') }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="person-name">
                                <h2 class="text-center fs-4 my-2">{{Auth::user()->name}}</h2>
                            </div>
                            <div class="person-email">
                                <h3 class="text-center fs-5 fw-normal mb-3">{{Auth::user()->email}}</h3>
                            </div>
                            <div class="bt">
                                <a href="{{ url('add-profile') }}" class="btn btn-outline-thema">Update</a>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class="person-description">
                                <p class="mb-1" style="text-align: left;">Description</p>
                                <p class="text-black-50 text-wrap">
                                    {{Auth::user()->description}}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- User Profile --}}
                    <div class="col-lg-8 col-md-6 mt-4 pe-2 ps-2 mb-1">
                        <div class="card-profile d-flex flex-column px-0 py-4">
                            <div class="id-user px-3">
                                <h6 class="mb-0 fw-bold float-left">Account ID {{Auth::user()->id}}</h6>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class=" p-3">
                                <form class="row g-3 fw-bold">

                                    <div class="col-md-12">
                                        <label for="username" class="form-label">Nama Pengguna</label>
                                        <input type="text" class="form-control input-text" id="username"
                                            placeholder="username" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">Nama</label>
                                        <input type="text" class="form-control input-text" id="firstName"
                                            placeholder="first name" value="{{Auth::user()->first_name}}">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail"
                                            value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Alamat</label>
                                        <input type="text" class="form-control input-text" id="inputAddress"
                                            placeholder="address" value="{{Auth::user()->address}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control input-text" id="inputCity"
                                            placeholder="city" value="{{Auth::user()->city}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">State</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose your state</option>
                                            <option>Indonesia</option>
                                            <option>Malaysia</option>
                                            <option>Australia</option>
                                            <option>United State</option>
                                        </select>
                                    </div>
                                    {{-- <div class="col-md-2">
                                        <label for="inputnotelp" class="form-label">No Telp</label>
                                        <input type="number" class="form-control" id="inputnoTelp">
                                    </div> --}}
                                    <div class="col-9">
                                        <label for="inputDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="inputDescription" placeholder="Description" value="">{{Auth::user()->description}}</textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Form Edit User Profile --}}
                </div>
                {{-- End User Profile --}}
            </div>
    </section>
@endsection
