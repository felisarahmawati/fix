@extends("layouts_super.main")

@section("content")

<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Detail Layanan</h2>
            </div>
        </div>
        <div class="details1 ">
            <div class="recentOrders">
                <div class="cardHeader" >
                    <h4>Detail Layanan</h4>
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
                            <td>Nama Vendor</td>
                            <td>Kategori</td>
                            <td>Harga</td>
                            <td>Alamat</td>
                            <td>Deskripsi</td>
                            <td>Status</td>
                            <td class="col-md-3 text-center">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail as $d)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{ url('/storage/' .$d->image)}}" style="width: 120px;"></td>
                            <td>{{ $d->nama_vendor }}</td>
                            <td>{{ $d->kategori->kategori }}</td>
                            {{-- <td>{{ $d->kategori->kategori}}</td> --}}
                            <td>{{ $d->harga }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>{!! $d->deskripsi !!}</td>
                            <td>{{ $d->status }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4 text-end">
                                        <button onclick="editD({{$d->id}})" type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button onclick="detailD({{$d->id}})" type="button" class="btndetail" data-bs-toggle="modal" data-bs-target="#exampleModalDetail">
                                            <i class='bx bx-detail'></i>
                                        </button>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('detlayanan.destroy', $d->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btndelete" type="submit">
                                                <i class='bx bxs-trash'></i>
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
                    Tambah Detail
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/layanan/detlayanan')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Vendor</label>
                        <input type="text" name="nama_vendor" class="form-control @error('nama_vendor') is-invalid @enderror" placeholder="Masukan nama vendor" value="{{ old('nama_vendor') }}">
                        @error('nama_vendor')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                        value="{{ old('deskripsi') }}" placeholder="Masukan deskripsi" id="tambah">
                        </textarea>
                        @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Status Penitipan</label>
                        <div>
                            <select class="form-control mb-3" name="status">
                                <option>-- Pilih saja --</option>
                                <option value="tersedia">Tersedia</option>
                                <option value="tidak tersedia">Tidak Tersedia</option>
                            </select>
                            @error('status')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Kategori</label>
                        <div>
                            <select class="form-select" name="kategori_id" id="kategori_id">
                                <option value="">-- Pilih --</option>
                                @foreach ($kategori as $sdata)
                                 <option value="{{ $sdata->id }}">{{ $sdata->kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukan alamat lengkap" value="{{ old('alamat') }}">
                        @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Masukan Harga" value="{{ old('harga') }}">
                        @error('harga')
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
                    Edit Detail
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/layanan/detlayanan/simpan') }}" method="POST" enctype="multipart/form-data">
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

{{-- Form Detail --}}
<div class="modal fade" id="exampleModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 40%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Detail Sub Layanan</h3>
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
{{-- END --}}

@endsection

@section('js')

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('tambah');
</script>

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

    function editD(id) {
        $.ajax({
            url: "{{ url('/superadmin/layanan/detlayanan/edit') }}",
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

    function detailD(id) {
        $.ajax({
            url: "{{ url('/superadmin/layanan/detlayanan/detail') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-detail").html(data);
                return true;
            }
        });
    }
</script>

@endsection
