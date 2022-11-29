@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50" data-aos="fade-up">
        
    <div class="container">
        <div class="row row-layanan">
          <div class="col-8">
            <div class="card-body">
                <div class="shadow bg-body rounded">
                    <div style="max-width: 100%">
                        <div class="row g-0">
                          <form class="row">
                            <h5 class="card-title fw-bold">Lengkapi Data Diri</h5><hr>
                            <div class="col-md-6">
                              <label for="inputNamaVendor" class="form-label">Nama Vendor</label>
                              <input type="text" class="form-control" id="inputNamaVendor">
                            </div>
                            <div class="col-md-6">
                              <label for="inputNamaLengkap" class="form-label">Nama Lengkap Pemilik</label>
                              <input type="text" class="form-control" id="inputNamaLengkap">
                            </div>
                            <div class="col-12 mt-2">
                              <label for="inputAlamat" class="form-label">Alamat Vendor</label>
                              <input type="text" class="form-control" id="inputAlamat">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="inputTempat" class="form-label">Tempat</label>
                                <input type="text" class="form-control" id="inputTempat">
                              </div>
                            <div class="col-md-6 mt-2">
                                <p for="tanggalmasuk" class="form-label">Tanggal Lahir</p>
                                <input type="date" class="form-control" id="tanggal">
                            </div>
                            <div class="col-md-6 mt-2">
                              <label for="inputNIK" class="form-label">NIK</label>
                              <input type="text" class="form-control" id="inputNIK">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="inputLink" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="inputLink">
                            </div>
            
                            <h5 class="card-title fw-bold mt-4">Lampirkan Dokumen Pendukung</h5><hr>
                            <div class="col-6 form-group">
                                <label for="image">Scan KTP</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="col-6 form-group">
                                <label for="image">Scan SKCK</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="col-6 form-group mt-2 mb-3">
                                <label for="image">Scan KK</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="d-grid gap-2 col-12 mx-auto mb-3">
                              <button class="btn btn-success" type="button">Simpan</button>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-4">
            <div class="shadow bg-body rounded">
                <div class="mt-4" style="max-width: 100%">
                    <div class="row g-0">
                        <div class="card-body">
                            <h6 class="fw-bold mt-1">Aktifkan Layanan</h6><hr>
                            <p class="mt-1 text-muted text-center" style="font-size: 15px">
                              Silahkan pilih layanan
                              yang akan kamu aktifkan
                            </p>
                            <div class="row">
                              <div class="col-6">
                                <p>Kendaraan</p>
                              </div>
                              <div class="col-6 text-end">
                                <button class="btn btn-danger btn-sm" type="submit">Aktifkan</button>
                              </div>
                              <div class="col-6">
                                <p>Bangunan</p>
                              </div>
                              <div class="col-6 text-end">
                                <button class="btn btn-danger btn-sm" type="submit">Aktifkan</button>
                              </div>
                              <div class="col-6">
                                <p>Barang</p>
                              </div>
                              <div class="col-6 text-end">
                                <button class="btn btn-danger btn-sm" type="submit">Aktifkan</button>
                              </div>
                              <div class="col-6">
                                <p>Pick Up</p>
                              </div>
                              <div class="col-6 text-end">
                                <button class="btn btn-danger btn-sm" type="submit">Aktifkan</button>
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