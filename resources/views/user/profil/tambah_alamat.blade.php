@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px; padding-left:185px">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include('user.partials.p_customer')
            <div class="col" style="width: 730px">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h5 class="card-title fw-bold"><i class="bi bi-plus-circle-fill p-1"></i>Tambah Alamat</h5>
                    <hr width="100%" color="#c0c0c0">
                        <form action="{{ url('/user/profil/tambah_alamat') }}" method="POST" >
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" aria-label="Disabled input example">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" name="kontak" class="form-label">Kontak</label>
                                <input class="form-control" type="text" name="no_telp" placan detail alamat, placeholder="Nomor Telepon" aria-label="Disabled input example">
                            </div>

                            <div class="mb-3">
                                <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                                <input class="form-control mt-3" type="text" name="provinsi" placeholder="Provinsi" aria-label="Disabled input example">
                                <input class="form-control mt-3" type="text" name="kota_kabupaten" placeholder="Kota / Kabupaten" aria-label="Disabled input example">
                                <input class="form-control mt-3" type="text" name="kecamatan" placeholder="Kecamatan" aria-label="Disabled input example">
                                <input class="form-control mt-3" type="text" name="detail_alamat" placeholder="Nama Jalan" aria-label="Disabled input example">
                                <input class="form-control mt-3" type="text" name="catatan" placeholder="catatan : masuk gang depan" aria-label="Disabled input example" >
                            </div>

                            <div class="cardHeader1" style="margin-top: 30px;">
                                <h6>
                                    Pilih sebagai alamat utama
                                </h6>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
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
    </div>
</section>
@endsection
