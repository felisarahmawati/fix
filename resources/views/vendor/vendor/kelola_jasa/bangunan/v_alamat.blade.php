<div class="container mb-5 " style="width: 800px">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Atur Alamat
            </h5>
            <hr width="100%" color="#c0c0c0">
            <form action="{{ url('/vendor/kelola/'.$data_jasa->id.'/atur_alamat') }}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="alamat" class="form-label">
                        <b>Alamat</b>
                        <p>
                            Isikan alamat vendor Anda dibawah ini
                        </p>
                    </label>
                    <input class="form-control text-center" type="text" placeholder="Masukan link google maps alamatAnda" id="alamat" name="alamat">
                </div>
                <div class="col-md-12">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select id="provinsi" name="provinsi" class="form-select">
                        <option value="">- Pilih Provinsi -</option>
                        @foreach ($provinsi as $p)
                            <option value="{{ $p["id"] }}">
                                {{ $p["name"] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="kota_kab" class="form-label">Kota/Kabupaten</label>
                    <select id="kota_kab" name="kota_kab" class="form-select">
                        <option value="">- Pilih Kota / Kabupaten -</option>
                    </select>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select id="kecamatan" name="kecamatan" class="form-select">
                        <option value="">- Pilih Kecamatan -</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan</label>
                    <p>
                        <small class="text-muted">
                            Deskripsikan patokan agar layanan bangunan anda mudah ditemukan (opsional)
                        </small>
                    </p>
                    <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
                </div>

                <div class="row">
                    <label for="url_link">
                        <b>
                            Upload foto fasilitas yang tersedia di layanan Anda
                        </b>
                    </label>
                    <input type="url" class="form-control" id="url_link" name="url_link" placeholder="Masukan link google drive" >
                    <button type="submit" class="btn btn-success col-md-12 mt-3">
                        Selanjutnya
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
