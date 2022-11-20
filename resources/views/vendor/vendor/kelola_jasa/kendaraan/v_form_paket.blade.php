@php
    use App\Models\Master\Paket\JenisPaket;
@endphp

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ url('/vendor/kelola/'.$slug.'/layanan_step1') }}" method="POST">
            @csrf
            <input type="hidden" name="kelola_layanan_id" value="{{ empty($kelola_layanan_id) ? '' : $kelola_layanan_id }}">
            <div class="modal-content" style="width:530px">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Pilih Jenis Paket
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="mt-2" style="font-size: 15px">
                    <label for="exampleFormControlInput1" class="form-label">
                        <b>
                            Pilih kendaraan yang ada di layanan Anda.
                        </b>
                        <p class="text-muted">
                            Silahkan centang fasilitas yang ada dan sesuai untuk lahan anda
                        </p>
                    </label>
                </div>
                @foreach ($paket as $p)
                <p style="font-size: 20px">
                    <b>
                        {{ $p->paket }}
                    </b>
                    @php
                        $jenis_paket = JenisPaket::where("paket_id", $p->id)->get();
                    @endphp
                    @foreach ($jenis_paket as $jp)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check" style="font-size:20px">
                                <input class="form-check-input" type="checkbox" id="nama_paket" name="nama_paket[]" value="{{ $jp->id }}">
                                <label class="form-check-label" for="nama_paket">
                                    {{ $jp->nama_paket }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <div class="box text-dark">
                                <div class="wrapper" style="width: 200px">
                                    <span class="minus">-</span>
                                    <span class="num">01</span>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="view_harga">harga penitipan perhari </label>
                        <input type="text" class="form-control" id="view_harga" value="Rp. {{ number_format($jp->harga) }}"
                        disabled>
                    </div>
                    <input type="hidden" name="harga" value="{{ $jp->harga }}">
                    @endforeach
                </p>
                @endforeach

                <button type="submit" class="btn btn-success col-md-12 mt-3">
                    Lanjutkan
                </button>
                <br>
                <br>
            </div>
        </form>
    </div>
</div>
