<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="gambarLama" value="{{ $edit->image }}">
<div class="form-group">
    <label>nama vendor</label>
    <input type="text" name="nama_vendor" class="form-control @error('nama_vendor') is-invalid @enderror" value="{{ old('nama_vendor') }}{{ $edit->nama_vendor }}">
    @error('nama_vendor')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group mb-3">
    <label>Kategori</label>
    <div>
        <select class="form-select" name="kategori_id" id="kategori_id">
            <option value="">{{ $edit->kategori->kategori }}</option>
            @foreach ($kategori as $sdata)
             <option value="{{ $sdata->id }}">{{ $sdata->kategori }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Masukan Harga" value="{{ old('harga') }}{{ $edit->harga }}">
    @error('harga')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukan alamat lengkap" value="{{ old('alamat') }}{{ $edit->alamat }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Deskripsi</label>
    {{-- <input name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
    value="{{ old('deskripsi') }} {{ $edit->deskripsi }}" id="edit" > --}}
    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="edit" >{!! $edit->deskripsi !!}</textarea>
    @error('deskripsi')

    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukan alamat" value="{{ old('alamat') }}{{ $edit->alamat }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="image_new"> Gambar </label>
    <br><br>
    <img src="{{ url('/storage/' .$edit->image)}}" style="width: 20%;">
    <br><br>
    <input type="file" class="form-control " name="image_new" id="image_new">
</div>

<script>
    CKEDITOR.replace('edit');
</script>
