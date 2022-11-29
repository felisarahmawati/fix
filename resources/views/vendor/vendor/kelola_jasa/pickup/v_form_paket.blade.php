@php
    use App\Models\Master\Paket\JenisPaket;
@endphp

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ url('/vendor/kelola/'.$slug.'/layanan_step1') }}" method="POST">
            @csrf
            <input type="hidden" name="kelola_layanan_id" value="{{ $session }}">
            <div class="modal-content" style="width: 530px">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Pilih Jenis Pick Up
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">
                        <b>
                            Pilih kendaraan yang anda sediakan
                        </b>
                        <p class="text-muted">
                            Silahkan centang fasilitas yang ada dan sesuai.
                        </p>
                    </label>
                </div>
                    @php
                        $jenis_paket = JenisPaket::where("jasa_layanan_id", $jasa->id)->get();
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
                    <div class="row">
                        <div class="col-md-4">
                            <label for="view_harga">harga penitipan perhari </label>
                            <input type="text" class="form-control" id="view_harga" value="{{ $jp->harga }}"
                            disabled>
                        </div>
                        <input type="hidden" name="harga" value="{{ $jp->harga }}">
                    </div>
                    <br>
                    @endforeach
                <button type="submit" class="btn btn-success col-md-12 mt-3">
                    Lanjutkan
                </button>
                <br>
            </div>
        </form>
    </div>
</div>
