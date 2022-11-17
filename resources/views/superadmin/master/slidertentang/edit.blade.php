<input type="hidden" name="id" value="{{ $data->id }}">
<input type="hidden" name="gambarLama" value="{{ $data->image }}">
<div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}{{ $data->judul }}">
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
    value="{{ old('deskripsi') }}" id="edit" >{!! $data->deskripsi !!}
    </textarea>
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="image_new"> Gambar </label>
    <input type="file" class="form-control  " name="image_new" id="image_new">
</div>

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('edit');
</script>
