@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px; padding-left:180px">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include("user.partials.p_customer")
            <div class="col" style="width: 730px">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h5 class="card-title">Alamat Saya</h5>
                    <hr width="100%" color="#c0c0c0">
                    <div class="row" style="width: 650px">
                        <div class="col-md">
                            <p><b>{{ Auth::user()->name }}</b></p>
                            <p>{{ Auth::user()->no_telp}}</p>
                            <p>{{ Auth::user()->alamat}}</p>
                            <p>{{ Auth::user()->kecamatan}}</p>
                            <p>{{ Auth::user()->kota_kabupaten}}</p>
                        </div>
                    </div>

                    @foreach ($alamat as $item)
                    <div class="row" style="width: 650px">
                        <div class="col-md-10">
                            <p>
                                <b>{{ $item->nama_lengkap }}</b>
                            </p>
                            <p>{{ $item->no_telp}}</p>
                            <p>{{ $item->detail_alamat}}</p>
                            <p>{{ $item->kecamatan}}</p>
                            <p>{{ $item->kota_kabupaten}}</p>
                            <p class="card-text"><small class="text-muted">Catatan :{{ $item->catatan}}</small></p>
                        </div>
                        <div class="col-1 text-end" style="font-size: 25px">
                            <p><a href="/user/profil/edit_alamat"><i class="bi bi-pencil-square"></i></a></p>
                        </div>

                        <div class="col-1 text-end" style="font-size: 25px">
                            <p><a href="/user/profil/edit_alamat" data-bs-toggle="modal" data-bs-target="#hapusAlamat"><i class="bi bi-trash"></i></a></p>
                        </div>
                    </div>
                    @endforeach
                    <a href="/user/profil/tambah_alamat"><button type="button" class="btn btn-outline-success col-md-12 mt-3">Tambah Alamat Baru</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
