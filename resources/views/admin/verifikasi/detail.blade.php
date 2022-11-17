<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label text-right">Nama</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="name" value="{{ $detail->name }}" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right"> Email </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="email" value="{{ $detail->email }}" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="kecamatan" class="col-sm-2 col-form-label text-right"> Kecamatan </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="kecamatan" value="{{ $detail->kecamatan }}" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="kota_kabupaten" class="col-sm-2 col-form-label text-right"> Kota / Kabupaten
    </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="kota_kab"
            value="{{ $detail->kota_kab }}" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="kelurahan" class="col-sm-2 col-form-label text-right"> Kelurahan
    </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="kelurahan"
            value="{{ $detail->kelurahan }}" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="no_telp" class="col-sm-2 col-form-label text-right">No. Telp</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="no_telp" value="{{ $detail->no_telp }}" readonly>
    </div>
</div>
<div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label text-right">Alamat</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="alamat" value="{{ $detail->alamat }}" readonly>
    </div>
</div>
