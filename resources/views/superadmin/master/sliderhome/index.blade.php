@extends('layouts_super.main')

@section("content")
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Slider Home</h2>
            </div>
        </div>
        <div class="details1 ">
            <div class="recentOrders">
                <div class="cardHeader" >
                    <h4>Slider Home</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModalTambah" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">Tambah</a>
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
                            <td>No</td>
                            <td class="col-md-2">Gambar</td>
                            <td>Judul</td>
                            <td>Deskripsi</td>
                            <td class="col-md-3 text-center">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_sliderhome as $sliderhome)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{ url('/storage/' .$sliderhome->image)}}" style="width: 120px;"></td>
                            <td>{{ $sliderhome->judul }}</td>
                            <td>{!! $sliderhome->deskripsi !!}</td>
                            <td style="size: 20px;">
                                <div class="row">
                                    <div class="col-md-7 text-end">
                                        <button onclick="editSliderHome({{ $sliderhome->id }})" type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <form onsubmit="return confirm('Apakah anda yakin ?');" action="{{ route('sliderhome.destroy', $sliderhome->id)}}" method="POST">
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
</section>

<!-- Form Tambah -->
<div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">
                    Tambah Layanan
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/master/sliderhome')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                        @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                        value="{{ old('deskripsi') }}" id="create" >
                        </textarea>
                        @error('deskripsi')
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
<!-- END -->

<!-- Form Edit -->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">
                    Edit Layanan
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/master/sliderhome/simpan')}}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @csrf
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

@section('js')

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

    function editSliderHome(id) {
        $.ajax({
            url: "{{ url('/superadmin/master/sliderhome/edit') }}",
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

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('create');
</script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
