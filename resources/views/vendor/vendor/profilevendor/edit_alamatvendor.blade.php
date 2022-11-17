@extends('vendor.vendor.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="align-items-center">
<div class="container mt-4 mb-4">

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col" style="width: 400px">

            <div
                       class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                       <div class="person-img px-xl-5"><br>
                           <img src="{{ asset('../../assets/img/team-4.jpg') }}" class="img-fluid rounded-circle" alt="">
                       </div>
                       <div class="person-name">
                           <h2 class="text-center fs-4 my-2">Admin</h2>
                       </div>
                       <div class="person-email">
                           <h3 class="text-center fs-5 fw-normal mb-3">Admin@gmail.com</h3>
                       </div>
                       <div class="bt">
                           <button class="btn btn-outline-thema"> Edit </button>
                       </div>
                       <hr width="100%" color="#c0c0c0">
            <div class="card-body ">
              <h5 class="card-title"><b>Umum</b></h5>

            <div class="row" style="width: 300px">
                <div class="col-md">

                    <p href=""><i class="bi bi-geo-alt px-1"></i>Alamat saya</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><i class="bi bi-chevron-right"></i></p>
                </div>
            </div>

            <div class="row" style="width: 300px">
                <div class="col-md">

                    <p href=""><i class="bi bi-bell px-1"></i>Notifikasi</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><i class="bi bi-chevron-right"></i></p>
                </div>
            </div>
            <h5 class="card-title"><b>Privasi</b></h5>

            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-question-circle px-1"></i>Kebijakan Privasi</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><i class="bi bi-chevron-right"></i></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-question-circle px-1"></i>Pusat Bantuan</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><i class="bi bi-chevron-right"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-info-circle px-1"></i></i>Tentang</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><i class="bi bi-chevron-right"></i></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <p><i class='bx bx-log-out nav__icon' ></i>Logout</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><i class="bi bi-chevron-right"></i></p>
                </div>
            </div>

            </div>
          </div>
        </div>
        <div class="col" style="width: 700px">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Edit Alamat</h5>
              <hr width="100%" color="#c0c0c0">
              <form action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input class="form-control" type="text" placeholder="Rebecca Howard" aria-label="Disabled input example" disabled>

                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kontak</label>
                        <input class="form-control" type="text" placeholder="089598374543" aria-label="Disabled input example" disabled>
                    </div>


                  <div class="mb-3">
                    <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                    <div>
                        <p href=""><i class="bi bi-geo-alt px-1"></i>Pilih Lokasi Kamu</p>
                    </div>
                        <input class="form-control" type="text" placeholder="Tembelang,Jombang, Jawa Timur 123422" aria-label="Disabled input example" disabled>


                        <input class="form-control" type="text" placeholder="Jln. Sukonandi No. 121 Santrean" aria-label="Disabled input example" disabled>


                        <input class="form-control" type="text" placeholder="Masuk Gng Depan" aria-label="Disabled input example" disabled>
                  </div>
                  <div class="cardHeader1" style="margin-top: 30px;">
                    <h6>Pilih sebagai alamat utama</h6>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>

                <button type="button" class="btn btn-outline-success col-md-12 mt-3">Hapus Alamat</button>
                <button type="button" class="btn btn-success col-md-12 mt-3">Simpan</button>
              </form>

          </div>
        </div>

      </div>

</div>
</section>
@endsection
