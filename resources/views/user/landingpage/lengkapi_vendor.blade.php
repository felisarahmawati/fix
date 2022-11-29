@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50" data-aos="fade-up">

    <div class="container">
        <div class="row row-layanan">
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
                  <input type="text" class="form-control" id="inputAlamat" placeholder="1234 Main St">
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
                <div class="col-4 form-group">
                    <label for="image">Scan KTP</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="col-4 form-group">
                    <label for="image">Scan SKCK</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="col-4 form-group">
                    <label for="image">Scan KK</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
