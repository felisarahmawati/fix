@extends("layouts_super.main")

@section("title", "Tentang Titipsini")

@section("content")

<section class="home-section">
    <body>
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class="bx bx-menu"></i>
                </div>
                <div class="cardHeader-title">
                    <h4>Tentang Titipsini</h4>
                </div>
            </div>

            <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader">
                        <h4>Tentang Titipsini</h4>
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
                            <tr>
                                <td>No.</td>
                                <td>Gambar</td>
                                <td>Judul</td>
                                <td>Baris 1</td>
                                <td>Baris 2</td>
                                <td>Baris 3</td>
                                <td>Baris 4</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_tentang as $index)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ url('/storage/' .$index->image) }}" style="width: 45px;"></td>
                                <td>{{ $index->judul }}</td>
                                <td>{{ $index->baris1 }}</td>
                                <td>{{ $index->baris2 }}</td>
                                <td>{{ $index->baris3 }}</td>
                                <td>{{ $index->baris4 }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4 text-end">
                                            <button onclick="edittentangtitipsini({{ $index->id }})" type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                <i class='bx bx-edit'></i>
                                            </button>
                                        </div>
                                        {{-- <div class="col-md-4 text-end">
                                            <form onsubmit="return confirm('Apakah anda yakin ?');" action="{{ route('tentangtitipsini.destroy', $index->id)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button class="btndelete" type="submit" >
                                                    <i class="bx bxs-trash"></i>
                                                </button>
                                            </form>
                                        </div> --}}
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
                Tambah Tentang
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('/superadmin/master/tentangtitipsini')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="image"> Gambar </label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul"
                    @error('judul') is-invalid @enderror value="{{ old('judul') }}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="baris1">Baris 1</label>
                    <input type="text" class="form-control" name="baris1" id="baris1" placeholder="Masukkan baris1"
                    @error('baris1') is-invalid @enderror value="{{ old('baris1') }}">
                    @error('baris1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="baris2">Baris 2</label>
                    <input type="text" class="form-control" name="baris2" id="baris2" placeholder="Masukkan baris2"
                    @error('baris2') is-invalid @enderror value="{{ old('baris2') }}">
                    @error('baris2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="baris3">Baris 3</label>
                    <input type="text" class="form-control" name="baris3" id="baris3" placeholder="Masukkan baris3"
                    @error('baris3') is-invalid @enderror value="{{ old('baris3') }}">
                    @error('baris3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="baris4">Baris 4</label>
                    <input type="text" class="form-control" name="baris4" id="baris4" placeholder="Masukkan baris4"
                    @error('baris4') is-invalid @enderror value="{{ old('baris4') }}">
                    @error('baris4')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
    <div class="modal-dialog modal-lg" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">
                    Edit Tentangtitipsini
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/master/tentangtitipsini/simpan') }}" method="POST" enctype="multipart/form-data">
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
    function edittentangtitipsini(id) {
        $.ajax({
            url: "{{ url('/superadmin/master/tentangtitipsini/edit') }}",
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
