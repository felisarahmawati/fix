<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="content1"> Slug 1 </label>
    <input type="text" class="form-control" name="content1" id="content1" value="{{ $edit->content1 }}">
</div>
<div class="form-group">
    <label for="content2"> Slug 2 </label>
    <input type="text" class="form-control" name="content2" id="content2" value="{{ $edit->content2 }}">
</div>
<div class="form-group">
    <label for="content3"> Slug 3 </label>
    <input type="text" class="form-control" name="content3" id="content3" value="{{ $edit->content3 }}">
</div>
<div class="form-group">
    <label for="image_new"> Gambar </label>
    <br><br>
    <img src="{{ url('/storage/' .$edit->image)}}" style="width: 20%;"><br><br>
    <input type="file" class="form-control" name="image_new" id="image_new">
</div>
