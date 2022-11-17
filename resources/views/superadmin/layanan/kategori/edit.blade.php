<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="kategori"> Kategori </label>
    <input type="text" class="form-control" name="kategori" id="kategori" value="{{ $edit->kategori }}">
</div>
<div class="form-group">
    <label for="image_new"> Gambar </label>
    <br><br>
    <img src="{{ url('/storage/' .$edit->image)}}" style="width: 20%;"><br><br>
    <input type="file" class="form-control" name="image_new" id="image_new">
</div>
