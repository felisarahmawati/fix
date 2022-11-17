<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="mb-3">
    <label for="inputnama_provinsi" class="form-label">Provinsi</label>
    <input type="text" name="nama_provinsi" class="form-control @error('nama_provinsi') is-invalid @enderror" value="{{ $edit->nama_provinsi }}" placeholder="Masukkan Nama Provinsi">
</div>