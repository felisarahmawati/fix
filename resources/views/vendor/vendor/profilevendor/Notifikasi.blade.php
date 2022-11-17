@extends('vendor.vendor.dashboard_vendor')
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
                <div class="row">
                    <div class="col-8 ms-4">
                        <p class="mb-0">OVERVIEW</p>
                        <h3>Profile Vendor</h3>
                    </div>
                </div>

                @include("vendor.partialsprofile.profile")

        <div class="col" style="width: 700px">
         <div class="card">
            <div class="card-body">

              <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Notifikasi</h5>
              <hr width="100%" color="#c0c0c0">
            <div class=" mb-3" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-1">
                    <img src="{{ asset('../../assets/img/notif.png') }}" class="img-fluid rounded-start" style="width:30px"alt="...">
                  </div>
                    <div class="col-md ">
                        <p><b>Update Penting</b></p>
                        <p class="card-text pl-8 mt-1"><small class="text-muted">Berisi update perihal pesanan, penitipan, transaksi, <br>dan info akun. Jadi harus diaktifin. </small></p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-1">
                  <img src="{{ asset('../../assets/img/mail.png') }}" class="img-fluid rounded-start" style="width:30px" alt="...">
                </div>
                  <div class="col-md ">
                      <p><b>Email</b></p>
                      <p class="card-text pl-8 mt-1"><small class="text-muted">Berisi update perihal perubahan akun, <br>password, dan perubahan data pengguna.  </small></p>
                  </div>

                <div class="col-md-2">
                     <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                    </label>
                </div>

            </div>
            <div class="row g-0">
                <div class="cardHeader1" style="margin-top: 30px;">
                <div class="col-md-1">
                    <img src="{{ asset('../../assets/img/pesan.png') }}" class="img-fluid rounded-start" style="width:30px" alt="...">
                </div>
                <div class="col-md">
                         <p><b>Pesan</b></p>
                    <p class="card-text mt-1"><small class="text-muted">Berisi update perihal perubahan akun, <br>password, dan perubahan data pengguna. </small></p>
                </div>
                <div class="col-md-2">

                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>

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
