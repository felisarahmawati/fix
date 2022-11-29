<div class="p-5 container card mb-5 " style="width: 90%">
    <a href="{{ url('/vendor/kelola/' . $slug . '/layanan_step1') }}">
        <button class="btn btn-success p-2" style="font-size: 20px">
            <i class="bi bi-plus"></i>
            Tambah layanan
        </button>
    </a>
    <div class="details1 ">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Layanan Anda</h2>
                <a href="#" class="btn btn-thema">View All</a>
            </div>
            <table class="table-borderless mt-3 w-auto">
                <thead class="text-start">
                    <tr>
                        <td>Kategori</td>
                        <td class="col-md-2">link drive</td>
                        <td>Status</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody class="text-start">
                    @forelse($pesan_layanan as $data)
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
                                Detail
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">
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

                            <div class="col-md-6">
                                {{-- <p class="mb-2 mt-2" style="font-size: 18px; margin-bottom: 10px">
                                    | {{ $pl->getPaket->paket }}
                                </p> --}}
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
