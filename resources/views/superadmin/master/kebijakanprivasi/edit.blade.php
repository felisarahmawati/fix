<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ $edit->judul }}" required>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="inputisi" class="form-label">Isi</label>
    <textarea name="isi" class="form-control @error('isi') is-invalid @enderror" id="ubah" >{!! $edit->isi !!}</textarea>
</div>
<script>
    CKEDITOR.replace('ubah');
</script>
