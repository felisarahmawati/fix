<div class="p-5 container card" style="width: 90%">
    <a href="{{ url('/vendor/kelola/' . $slug . '/layanan_step1') }}">
        <button class="btn btn-success p-2" style="font-size: 20px">
            <i class="bi bi-plus"></i>
            Tambah layanan
        </button>
    </a>
    <div class="details1">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Detail Kelola {{ $slug }}</h2>
                <a href="#" class="btn btn-thema">View All</a>
            </div>
            <table class="table-borderless mt-3 w-auto">
                <thead class="text-start">
                    <tr>
                        <td class="colsm-4">Jenis Bangunan</td>
                        <td>Link Drive</td>
                        <td>Status</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody class="text-start">
                    @forelse ($pesan_layanan as $data)
                    <tr>
                        <td>{{ $data->getJenisPaket->nama_paket }}</td>
                        <td>
                            {{ $data->getKelolaLayanan->url_link }}
                        </td>
                        @if ($data->status == "Pending")
                        <td style="color: yellow; font-weight: bold;">
                            Pending
                        </td>
                        @else
                        <td style="color: rgb(205, 26, 26)">

                        </td>
                        @endif
                        <td class="col-md-2 text-end">
                            <button class="btn btn-info " data-bs-toggle="modal" data-bs-target="#ModalDetail-{{ $data->id }}">
                                <i class="bi bi-info-circle p-1"></i>
                                Detail
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">
                            <i>
                                <strong>
                                    Data Tidak Ada
                                </strong>
                            </i>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Detail Modal -->
@foreach ($pesan_layanan as $pl)
<div class="modal fade" id="ModalDetail-{{ $pl->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width:auto">
        <div class="modal-content" style="width:auto">
            <div class="container mt-4 mb-4">
                <div class="col-md-12">
                    <div class="card-body">
                        @if ($pl->status == "Pending")
                        <div class="alert alert-warning" role="alert">
                            Tunggu Konfirmasi Dari Admin
                        </div>
                        @else
                        <div class="alert alert-success" role="alert">
                            Layanan Anda tidak memenuhi persyaratan!
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <p class="mb-2" style="font-size: 23px; margin-bottom: 10px">
                                    <b>
                                        {{ $pl->getJenisPaket->nama_paket }}
                                    </b>
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <p>
                                <b>Kapasitas </b> :
                                <span class="num">01</span>
                            </p>
                        </div>
                        <div class="col-12">
                            <p class="text-success" style="font-size: 18px; margin-bottom: 10px">
                                <b>Link drive</b>
                            </p>
                            <p>
                                {{ $pl->getKelolaLayanan->url_link }}
                            </p>
                        </div>
                        <div class="col-12">
                            <p class="text-success" style="font-size: 18px; margin-bottom: 10px">
                                <b>Link google Maps</b>
                            </p>
                            <p>
                                {{ $pl->getKelolaLayanan->alamat }}
                            </p>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <i class="bi bi-geo-alt-fill"
                                style="font-size: 35px; color:#eab449; margin-bottom: 10px;"></i>
                            </div>
                            <div class="col-md-10">
                                <p class="mb-2 mt-2" style="font-size: 12px; margin-bottom: 10px">
                                    Karangjambe, Gg Arjuna No.59, Jaranan,Banguntapan,
                                    kec.Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198
                                </p>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button class="btn btn-success col-md-5">Ajukan Kembali</button>
                            <button class="btn btn-danger col-md-5 " data-bs-toggle="modal"
                            data-bs-target="#Modal">HAPUS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- END -->
<!--MODAL HAPUS-->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><b>Anda yakin ingin menghapus data ini? </b></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!--modal edit-->
<div class="modal fade" id="Edit" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Form Edit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <h3 style="color:  #999">Edit Alamat</h3>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-12 g-4">
                <form action="">
                    <div class="col-sm-12">
                        <label for="inputState" class="form-label">Provinsi</label>
                        <select id="inputState" class="form-select" placeholder="DI Yogyakarta">
                            <option selected>Pilih provinsi</option>
                            <option>DKI Jakarta</option>
                            <option>Jawa Barat</option>
                            <option>Jawa Tengah</option>
                            <option>DI Yogyakarta</option>
                            <option>Jawa Timur</option>
                            <option>Kalimantan Timur</option>

                        </select>
                    </div>

                    <div class="col-sm-12">
                        <label for="inputState" class="form-label">Kabupaten</label>
                        <select id="inputState" class="form-select" placeholder="Bantul">
                            <option selected>Pilih Kabupaten</option>
                            <option>Bantul</option>
                            <option>Sleman</option>
                            <option>Kulon Progo</option>
                            <option>Gunung Kidul</option>
                            <option>Kota Yogyakarta</option>

                        </select>
                    </div>

                    <div class="col-sm-12">
                        <label for="inputState" class="form-label">Kecamatan</label>
                        <select id="inputState" class="form-select" placeholder="Banguntapan">
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
                        <label for="exampleFormControlTextarea1"
                        class="form-label">Catatan</label>
                        <p><small class="text-muted">Deskripsikan Alamat gudang Anda agar mudah
                            ditemukan(opsional)</small></p>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Karangjambe, Gg Arjuna No.59, Jaranan"></textarea>
                        </div>
                        <h3 style="color:  #999">Jenis bangunan</h3>
                        <div class="col-sm-12 mt-3">
                            <label for="inputState" class="form-label">
                                <h6>Pilih Jenis banguan yang ada di layanan anda</h6>
                            </label>
                            <select>
                                <option selected>Pilih Kategori</option>
                                <option>Rumah</option>
                                <option>Apartement</option>
                                <option>Kost-Kostan</option>
                                <option>Kontrakan</option>
                                <option>Rumah sususn</option>

                            </select>
                        </div><br>
                        <div class="mb-2">
                            <label for="">Harga penitipan perhari </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Rp20.000">
                        </div>
                        <div class="mb-3">
                            <label for="">Deskripsi</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis quisque vitae arcu massa.">
                        </div>
                    </div>
                    <div>
                        <a href=" "><button type="button"
                            class="btn btn-outline-success col-md-12 mt-3">Save</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
