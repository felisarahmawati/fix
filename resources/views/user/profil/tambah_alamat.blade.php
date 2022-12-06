@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px; padding-left:100px">
    <div class="container mt-2 mb-4 row-layanan">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include('user.partials.p_customer')
            <div class="col" style="width: 730px">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h5 class="card-title fw-bold"><i class="bi bi-plus-circle-fill p-1"></i>Tambah Alamat</h5>
                    <hr width="100%" color="#c0c0c0">
                    <form action="{{ url('/user/profil/tambah_alamat') }}" method="POST" >
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-person-circle p-1"></i>Nama</label>
                            <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" aria-label="Disabled input example">
                        </div>
            
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" name="kontak" class="form-label"><i class="bi bi-phone-fill p-1"></i>Kontak</label>
                            <input class="form-control" type="text" name="no_telp" placan detail alamat, placeholder="Nomor Telepon" aria-label="Disabled input example">
                        </div>
            
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" name="alamat" class="form-label"><i class="bi bi-geo-fill p-1"></i>Alamat</label>
                            <input class="form-control" type="text" name="provinsi" placeholder="Provinsi" aria-label="Disabled input example">
                            <input class="form-control mt-3" type="text" name="kota_kabupaten" placeholder="Kota / Kabupaten" aria-label="Disabled input example">
                            <input class="form-control mt-3" type="text" name="kecamatan" placeholder="Kecamatan" aria-label="Disabled input example">
                            <input class="form-control mt-3" type="text" name="detail_alamat" placeholder="Nama Jalan" aria-label="Disabled input example">
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" ></textarea>
                                <label for="floatingTextarea2">Catatan</label>
                              </div>
                        </div>
            
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Atur sebagai alamat utama
                            </label>
                          </div>
            
                        <button type="submit" class="btn btn-outline-success col-md-12 mt-3">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection