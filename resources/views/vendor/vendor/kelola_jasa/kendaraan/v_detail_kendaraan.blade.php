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
                        <td>Jenis Kendaraan</td>
                        <td>Kategori</td>
                        <td class="col-md-2">link drive</td>
                        <td>Status</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody class="text-start">
                    @forelse($pesan_layanan as $data)
                    <tr>
                        <td>{{ $data->getPaket->paket }}</td>
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
                            <a href="" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#Modal2">Detail</a>
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
