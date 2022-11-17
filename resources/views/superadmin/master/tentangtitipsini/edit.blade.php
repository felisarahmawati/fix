<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="gambarLama" value="{{ $edit->image }}">
<div class="form-group">
    <label for="image_new"> Gambar </label>
    <br><br>
    <img src="{{ url('/storage/' .$edit->image)}}" style="width: 20%;"><br><br>
    <input type="file" class="form-control" name="image_new" id="image_new">
</div>
<div class="form-group">
    <label for="judul"> Judul </label>
    <input type="text" class="form-control" name="judul" id="judul" value="{{ $edit->judul }}">
</div>
<div class="form-group">
    <label for="baris1"> Baris 1</label>
    <input type="text" class="form-control" name="baris1" id="baris1" value="{{ $edit->baris1 }}">
</div>
<div class="form-group">
    <label for="baris2"> Baris 2</label>
    <input type="text" class="form-control" name="baris2" id="baris2" value="{{ $edit->baris2 }}">
</div>
<div class="form-group">
    <label for="baris3"> Baris 3</label>
    <input type="text" class="form-control" name="baris3" id="baris3" value="{{ $edit->baris3 }}">
</div>
<div class="form-group">
    <label for="baris4"> Baris 4</label>
    <input type="text" class="form-control" name="baris4" id="baris4" value="{{ $edit->baris4 }}">
</div>
