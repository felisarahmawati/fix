@extends("layouts_super.main")

@section("content")

<section class="home-section">
    <body>
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="cardHeader-title">
                    <h2>Kategori Layanan</h2>
                </div>
            </div>
            <div class="details1 ">
                <div class="recentOrders">
                    <div class="cardHeader" >
                        <h4>Layanan</h4>
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
                                <td>Slug</td>
                                <td>Deskripsi</td>
                                <td class="col-md-3 text-center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanan as $layanan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{ url('/storage/' .$layanan->image)}}" style="width: 80px;"></td>
                                <td>{{ $layanan->judul }}</td>
                                <td>{{ $layanan->slug }}</td>
                                <td>{!! $layanan->deskripsi !!}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4 text-end">
                                            <button onclick="editLayanan({{$layanan->id}})" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalEdit"
                                                class="btnedit">
                                                <i class='bx bx-edit'></i>
                                            </button>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('layanan.destroy', $layanan->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btndelete" type="submit">
                                                    <i class='bx bxs-trash'></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <button onclick="detailLayanan({{$layanan->id}})" class="btndetail" data-bs-toggle="modal" data-bs-target="#exampleModalDetail">
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
            <form action="{{ url('/superadmin/layanan/layanan')}}" method="POST" enctype="multipart/form-data">
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
                        value="{{ old('deskripsi') }}" id="tambah" >
                        </textarea>
                        @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image"> Gambar </label>
                        <input type="file" class="form-control  " name="image" id="image">
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
            <form action="{{ url('/superadmin/layanan/layanan/simpan')}}" method="POST" enctype="multipart/form-data">
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
{{-- END --}}

<!-- Form Detail-->
<div class="modal fade" id="exampleModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 40%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Detail Layanan</h3>
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

{{-- Hapus --}}


{{-- CK EDITOR --}}
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('tambah');
</script>

@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function previewImage() {
        const image = document.querySelector("#image");
        const imgPreview = document.querySelector(".gambar-preview");
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

    function editLayanan(id) {
        $.ajax({
            url: "{{ url('/superadmin/layanan/layanan/edit') }}",
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

    function detailLayanan(id)
    {
        $.ajax({
            url: "{{ url('/superadmin/layanan/layanan/detail') }}",
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
