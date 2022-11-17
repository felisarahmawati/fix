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
                    <h4>Layanan</h4>
                </div>
            </div>

            <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader">
                        <h4>Slidernya layanan</h4>
                        <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModalTambah" class="btn btn-primary fw-bold
                        rounded-pill px-4 shadow float-end"><i class='bx bx-plus'></i> Tambah</a>
                    </div>
                    <br>
                    @if(session('berhasil'))
                        <div class="alert alert-success">
                            {{ session('berhasil')}}
                        </div>
                    @endif
                    <table>
                        <thead>
                            <tr class="col-md-12">
                                <td>No</td>
                                <td>Image</td>
                                <td>Judul</td>
                                <td>Slug</td>
                                <td>Deskripsi</td>
                                <td>Status</td>
                                <td class="col-md-3 text-center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanan_slider as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ url('/storage/' .$data->image)}}" style="width: 120px;"></td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->slug}}</td>
                                <td>{!!$data->deskripsi !!}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button onclick="editLayananSlider({{$data->id}})" type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                                <i class='bx bx-edit'></i>
                                            </button>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('layanan_slider.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btndelete" type="submit">
                                                    <i class='bx bxs-trash'></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <button onclick="detailLayananSlider({{$data->id}})" class="btndetail" data-bs-toggle="modal" data-bs-target="#exampleModalDetail">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </button>
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
                    Tambah Layanan Slider
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/layanan/layanan_slider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul">judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul"
                            @error('judul') is-invalid @enderror value="{{ old('judul') }}">
                            @error('judul')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}" id="tambah" ></textarea>
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
    <div class="modal-dialog modal-lg" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">
                    Edit Layanan Slider
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/layanan/layanan_slider/simpan') }}" method="POST" enctype="multipart/form-data">
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

<!-- Modal Detail-->
<div class="modal fade" id="exampleModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 40%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Detail Layanan Slider</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-content-detail">

            </div>
            <div class="modal-footer d-md-block">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
            </div>
        </div>
    </div>
</div>
<!-- END -->

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('tambah');
</script>

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

    function editLayananSlider(id) {
        $.ajax({
            url: "{{ url('/superadmin/layanan/layanan_slider/edit') }}",
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

    function detailLayananSlider(id)
    {
        $.ajax({
            url: "{{ url('/superadmin/layanan/layanan_slider/detail') }}",
            type: "GET",
            data: {
                id:id
            },
            success: function(data) {
                $("#modal-content-detail").html(data);
                return true;
            }
        })
    }
</script>

@endsection
