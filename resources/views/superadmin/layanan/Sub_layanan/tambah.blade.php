@extends("layouts_super.main")

@section("content")

<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Sub-Layanan</h2>
            </div>
        </div>
        <div class="details1 ">
            <div class="recentOrders">
                <div class="cardHeader" >
                    <h4>Sub-Layanan</h4>
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
                            <td>Status</td>
                            <td class="col-md-3 text-center">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sub_layanan as $sublayanan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{ url('/storage/' .$sublayanan->image)}}" style="width: 120px;"></td>
                            <td>{{ $sublayanan->nama_vendor }}</td>
                            <td>{{ $sublayanan->kategori->kategori }}</td>
                            <td>{{ $sublayanan->harga }}</td>
                            <td>{{ $sublayanan->status }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4 text-end">
                                        <button onclick="editSub({{$sublayanan->id}})" type="button" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button onclick="detailSubLayanan({{$sublayanan->id}})" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" class="btndetail">
                                            <i class='bx bx-detail'></i>
                                        </button>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('sublayanan.destroy', $sublayanan->id) }}" method="POST">
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
                    Tambah Sub-Layanan
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/layanan/sublayanan')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Vendor</label>
                        <input type="text" name="nama_vendor" class="form-control @error('nama_vendor') is-invalid @enderror" value="{{ old('nama_vendor') }}" placeholder="Masukan nama vendor">
                        @error('nama_vendor')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" placeholder="Masukan harga">
                        @error('harga')
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
                    Edit Sub-Layanan
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/layanan/sublayanan/simpan') }}" method="POST" enctype="multipart/form-data">
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

@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('#deletesublayanan').click(function(){
                var id = $(this).attr('rel');
                var deleteFunction = $(this).attr('rel1')
                swal({
                    title: "Are you sure?",
                    text: "Your will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    window.location.href="/delete/"+deleteFunction+"/"+id;
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });
        });

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

    function editSub(id) {
        $.ajax({
            url: "{{ url('/superadmin/layanan/sublayanan/edit') }}",
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

    function detailSubLayanan(id)
    {
        $.ajax({
            url: "{{ url('/superadmin/layanan/sublayanan/detail') }}",
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
