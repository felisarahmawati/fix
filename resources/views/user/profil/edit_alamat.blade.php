@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include('user.partials.p_customer')
            <div class="col" style="width: 700px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-arrow-left px-2 "></i>Edit Alamat</h5>
                        <hr width="100%" color="#c0c0c0">
                        {{-- <form action="{{ url('/user/profil/tambah_alamat') }}" method="POST">
                            @csrf --}}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input class="form-control" type="text" name="nama_lengkap" value="{{  }}" aria-label="Disabled input example">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" name="kontak" class="form-label">Kontak</label>
                                <input class="form-control" type="text" name="no_telp" placan detail alamat, placeholder="Nomor Telepon" aria-label="Disabled input example">
                            </div>

                            <div class="mb-3">
                                <label for="text" class="col-sm-2 col-form-label">Alamat </label>
                                <select class="form-control mb-3" name="id_provinsi">
                                    <option value="1">Jawa Barat</option>
                                    <option value="2">Jawa Tengah</option>
                                    <option value="3">Jawa Timur</option>
                                    <option value="4">Papua</option>
                                    <option value="5">Lampung</option>
                                </select>

                                <input class="form-control" type="text" name="kota_kabupaten" placeholder="Kota / Kabupaten" aria-label="Disabled input example">
                                <input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan" aria-label="Disabled input example">
                                <input class="form-control" type="text" name="detail_alamat" placeholder="Nama Jalan" aria-label="Disabled input example">
                                <input class="form-control" type="text" name="catatan" placeholder="catatan : masuk gang depan" aria-label="Disabled input example" >
                            </div>

                        {{--<div>
                                <p href=""><i class="bi bi-geo-alt px-1"></i>Pilih Lokasi Kamu</p>
                                <iframe style="width:100%" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Jalan%20Janti%2C%20Gang%20Arjuna%2059%2C%20Karangjambe%2C%20Banguntapan%2C%20Bantul&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="%3$s" aria-label="%3$s" frameborder="0"></iframe>
                            </div> --}}

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
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
