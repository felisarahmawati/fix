@extends("layouts_super.main")

@section("title", "Kategori")

@section("content")

<section class="home-section">
    <body>
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class="bx bx-menu"></i>
                </div>
                <div class="cardHeader-title">
                    <h4>Kategori</h4>
                </div>
            </div>

            <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader">
                        <h4>Kategori aja</h4>
                        <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModalTambah" class="btn btn-primary fw-bold
                        rounded-pill px-4 shadow float-end">Tambah</a>
                    </div>
                    <br>
                    @if (session('berhasil'))
                    <div class="alert alert-success">
                        {{ session('berhasil')}}
                    </div>
                    @endif
                    <table>
                        <thead>
                            <tr class="col-md-12">
                                <td>No</td>
                                <td>Image</td>
                                <td>Kategori</td>
                                <td>Slug</td>
                                <td class="col-md-3 text-center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_kategori as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ url('/storage/' .$data->image)}}" style="width: 35%;"></td>
                                <td>{{ $data->kategori }}</td>
                                <td>{{ $data->slug}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button onclick="editKategori({{$data->id}})" type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                <i class='bx bx-edit'></i>
                                            </button>
                                        </div>
                                        <div class="col-md-4">
                                            <form onsubmit="return confirm('Apakah anda yakin ?');" action="{{ route('kategori.destroy', $data->id)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button class="btndelete" type="submit" >
                                                    <i class="bx bxs-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</section>

{{-- Modal Tambah --}}
<div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header hader">
            <h3 class="modal-title" id="exampleModalLabel">
                Tambah Layanan
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('/superadmin/layanan/kategori')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan Kategori"
                    @error('kategori') is-invalid @enderror" value="{{ old('kategori') }}">
                    @error('kategori')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image"> Gambar </label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
            </div>
            <div class="modal-footer d-md-block">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <button type="button" class="btn btn-danger btn-sm">Batal</button>
            </div>
        </form>
      </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 40%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">
                    Edit Kategori
                </h3>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/layanan/kategori/simpan') }}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                {{ csrf_field() }}
                <div class="modal-body" id="modal-content-edit">
                </div>
                <div class="modal-footer d-md-block">
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->

@endsection

@section("js")

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function previewImage() {
        const image = document.querySelector("#image");
        const imgPreview = document.querySelector(".image-preview");
        imgPreview.style.display = "block";
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            $("#tampilGambar").addClass('mb-3');
            $("#tampilGambar").width("100%");
            $("#tampilGambar").height("300");
        }
    }

    function editKategori(id) {
        $.ajax({
            url: "{{ url('/superadmin/layanan/kategori/edit') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        });
    }
</script>

@endsection
