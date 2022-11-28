@php
use App\Models\Master\Paket\JenisPaket;
@endphp

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ url('/vendor/kelola/' . $slug . '/layanan_step1') }}" method="POST">
            @csrf
            <input type="hidden" name="kelola_layanan_id" value="{{ $session }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Layanan Barang
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p style="font-size: 20px">
                            Centang Layanan Anda
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            Harga Penitipan per kg
                        </p>
                    </div>
                </div>
                @php
                $jenis_paket = JenisPaket::where("jasa_layanan_id", $jasa->id)->get();
                @endphp
                @foreach ($jenis_paket as $jp)
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-check" style="font-size:20px">
                            <input class="form-check-input" type="checkbox" value="{{ $jp->id }}" id="nama_paket" name="nama_paket[]">
                            <label class="form-check-label" for="nama_paket">
                                {{ $jp->nama_paket }}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000" disabled>
                    </div>
                </div>
                @endforeach
                <button type="submit" class="btn btn-success col-md-12 mt-3">
                    Lanjutkan
                </button>
            </div>
        </form>
    </div>
</div>
