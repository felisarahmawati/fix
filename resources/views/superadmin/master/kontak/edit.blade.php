<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="gambarLama" value="{{ $edit->image }}">
<div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="edit"  value="{{ old('alamat') }}{{ $edit->alamat }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}{{ $edit->email }}">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Telp</label>
    <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp') }}{{ $edit->telp }}">
    @error('telp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="image_new"> Gambar </label>
    <br><br>
    <img src="{{ url('/storage/' .$edit->image)}}" style="width: 20%;"><br><br>
    <input type="file" class="form-control  " name="image_new" id="image_new">
</div>
