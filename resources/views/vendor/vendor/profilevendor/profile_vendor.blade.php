@extends('Layouts.dashboard_vendor')
@section('container')
    <section class="home-section">

        <div class="main">
            {{-- @include('admin.profile.partials') --}}
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

            <div class="container-fluid">

                {{-- Card User Profile --}}
                <div class="row g-3 mb-5" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
                    data-aos-duration="1000">
                    <div class="col-lg-4 col-md-6 mt-4 pe-2">
                        <div
                        class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                        <div class="person-img px-xl-5"><br>
                            <img src="{{ asset('../../assets/img/team-4.jpg') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="person-name">
                            <h2 class="text-center fs-4 my-2">CV. Braxy Panda</h2>
                        </div>
                        <hr width="100%" color="#c0c0c0"> 
             <div class="card-body " style="font-size: 18px">
           
             <div class="row" style="width: 300px; ">
                 <div class="col-md">
 
                     <p><i class="bi bi-geo-alt px-1"  style="color:rgb(85, 182, 91)"></i>Pengaturan profil</p>
                 </div>
                 <div class="col-md-3">
                     <p class="text-end" ><a href="/Vendor/Profile/edit_profilevendor"><i class="bi bi-chevron-right"></i></a></p>
                 </div>   
             </div>
 
             <div class="row" style="width: 300px">
                 <div class="col-md">
 
                     <p href=""><i class="bi bi-bell px-1"  style="color:rgb(85, 182, 91)"></i>Notifikasi</p>
                 </div>
                 <div class="col-md-3">
                     <p class="text-end"><a href="/Vendor/Profile/Notifikasi"><i class="bi bi-chevron-right"></i></a></p>
                 </div>   
             </div>
 
             <div class="row">
                 <div class="col-md">
                     <p><i class="bi bi-question-circle px-1" style="color:rgb(85, 182, 91)"></i>Kebijakan Privasi</p>
                 </div>
                 <div class="col-md-3">
                     <p class="text-end"><a href="/Vendor/Profile/Kebijakan_privasi"><i class="bi bi-chevron-right"></i></a></p>
                 </div>   
             </div>
 
             <div class="row">
                 <div class="col-md">
                     <p><i class="bi bi-question-circle px-1"  style="color:rgb(85, 182, 91)"></i>Ketentuan Layanan</p>
                 </div>
                 <div class="col-md-3">
                     <p class="text-end"><a href="/Vendor/Profile/Ketentuan_layanan"><i class="bi bi-chevron-right"></i></a></p>
                 </div>    
             </div>
           
             <div class="row">
                 <div class="col-md">
                     <p><i class="bi bi-question-circle px-1"  style="color:rgb(85, 182, 91)"></i>Pusat Bnatuan</p>
                 </div>
                 <div class="col-md-3">
                     <p class="text-end"><a href="/Vendor/Profile/Pusat_bantuan"><i class="bi bi-chevron-right"></i></a></p>
                 </div>    
             </div>
           
 
             </div>
           </div>   
                    </div>

                    {{-- FormProfile --}}
                    <div class="col-lg-8 col-md-6 mt-4 pe-2 ps-2 mb-5">
                        <div class="card-profile d-flex flex-column px-0 py-4" style="font-size: 18px">
                            <div class="id-user px-3">
                                <h6 class="mb-0 fw-bold float-left">Account ID {{Auth::user()->id}}</h6>
                            </div>
                            <hr width="100%" color="#c0c0c0">
                            <div class=" p-3">
                                <form class="row g-3 fw-bold">
                                    <div class="col-md-12">
                                        <label for="Name" class="form-label">Name</label>
                                        <input type="text" class="form-control input-text" id="Name"
                                            placeholder="name" value="{{Auth::user()->name}}">
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail"
                                            value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control input-text" id="username"
                                            placeholder="username" value="{{Auth::user()->name}}">
                                    </div>
                            
                                    <div class="col-md-12">
                                        <label for="inputState" class="form-label">Tgl. Lahir</label>
                                        <input type="date" class="form-control input-text" id="inputdate"
                                            placeholder="" value="{{Auth::user()->date}}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Kota</label>
                                        <input type="text" class="form-control input-text" id="inputCity"
                                            placeholder="city" value="{{Auth::user()->city}}">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Address</label>
                                        <input type="text" class="form-control input-text" id="inputAddress"
                                            placeholder="address" value="{{Auth::user()->address}}">
                                    </div>
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


