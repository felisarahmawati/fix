<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="gambarLama" value="{{ $edit->image }}">
<div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}{{ $edit->judul }}">
    @error('judul')
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
    <label for="image_new"> Gambar </label>
    <br><br>
    <img src="{{ url('/storage/' .$edit->image)}}" style="width: 20%;">
    <br><br>
    <input type="file" class="form-control " name="image_new" id="image_new">
</div>




<script>
    CKEDITOR.replace('edit');
</script>
