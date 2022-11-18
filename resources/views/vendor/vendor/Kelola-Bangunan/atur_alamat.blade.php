@extends('vendor.vendor.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Atur alamat </h2>
            </div>
        </div>
    <div class="">
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-Kensaraan/kelola_kendaraanstep1" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>

            <div class="card2">
                <div>
                    <a href="Vendor/Kelola-Bangunan/kelola_bangunanstep1" style="text-decoration:none">
                        <div class="cardName2">Bangunan
                        </div>
                    </a>
                </div>
            </div>

            <div class="card1">
                <div>
                    <a href="Vendor/Kelola_Barang/kelola_barangstep1" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="Vendor/Kelola-PickUp/kelola_pickupstep1" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="container mb-5 " style="width: 800px">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Atur Alamat</h5>
                <hr width="100%" color="#c0c0c0">
                <form action="">
                  <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"><b>Alamat</b><p>Isikan alamat vendor Anda dibawah ini</p></label>
                      <input class="form-control text-center" type="text" placeholder="Masukan link google maps alamatAnda">
                  </div>


                 <div class="col-md-12">
                     <label for="inputState" class="form-label">Provinsi</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih provinsi</option>
                          <option>DKI Jakarta</option>
                          <option>Jawa Barat</option>
                          <option>Jawa Tengah</option>
                          <option>DI Yogyakarta</option>
                          <option>Jawa Timur</option>
                          <option>Kalimantan Timur</option>

                        </select>
                      </div>

                      <div class="col-md-12">
                        <label for="inputState" class="form-label">Kabupaten</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih Kabupaten</option>
                          <option>Bantul</option>
                          <option>Sleman</option>
                          <option>Kulon Progo</option>
                          <option>Gunung Kidul</option>
                          <option>Kota Yogyakarta</option>

                        </select>
                      </div>

                      <div class="col-md-12">
                        <label for="inputState" class="form-label">Kecamatan</label>
                        <select id="inputState" class="form-select">
                          <option selected>Pilih Kecamatan</option>
                          <option>Baguntapan</option>
                          <option>Bambanglipuro</option>
                          <option>Bantul</option>
                          <option>Dlingo</option>
                          <option>Imogiri</option>
                          <option>Jetis</option>
                          <option>Kasihan</option>
                          <option>Kretek</option>
                          <option>Pajangan</option>
                          <option>Pandak</option>
                          <option>Piyungan</option>
                          <option>Pundong</option>
                          <option>Sanden</option>
                          <option>Sedayu</option>
                          <option>Sewon</option>
                          <option>Srandakan</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                        <p><small class="text-muted">Deskripsikan patokan agar layanan bangunan anda
                            mudah ditemukan (opsional)</small></p>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                      <div class="row">
                        <label for=""><b>Upload foto fasilitas yang tersedia di layanan Anda</b></label>
                        <input type="text" class="form-control text-center" id="exampleFormControlTextarea1" value="Masukan link google drive Anda">
                      </div>
                      <a href="/Vendor/Kelola-Bangunan/layanan_step2"><button type="button" class="btn btn-success col-md-12 mt-3">Selanjutnya</button></a>
                </form>
            </div>
          </div>

        </div>

</div>

</section>
@endsection
