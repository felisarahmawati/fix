<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="gambarLama" value="{{ $edit->image }}">
<div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}{{ $edit->judul }}">
    @error('judul')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" id="edit" >{{ $edit->deskripsi }}</textarea>
    @error('deskripsi')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label>Status Penitipan</label>
    <div>
        <select class="form-control mb-3" name="status">
            <option value="active">Active</option>
            <option value="deactive">Deactive</option>
        </select>
        @error('status')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="image_new"> Gambar </label>
    <br><br>
    <img src="{{ url('/storage/' .$edit->image)}}" style="width: 120px;">
    <br><br>
    <input type="file" class="form-control  " name="image_new" id="image_new">
</div>

<script>
    CKEDITOR.replace('edit');
</script>
