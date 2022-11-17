@extends('layouts_super.main')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Layanan</h2>
            </div>
        </div>
        <div class="details1 ">
            <div class="recentOrders">
                <div class="cardHeader" >
                    <h4>Sub Layanan</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal7" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">Tambah</a>
                </div>
                <br>
                @if (session('berhasil'))
                <div class="alert alert-success">
                    {{ session('berhasil') }}
                </div>
                @endif
                <table>
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Gambar</td>
                            <td>Nama Vendor</td>
                            <td>Harga</td>
                            <td>Diskon</td>
                            <td>Alamat</td>
                            <td>Deskripsi</td>
                            <td>Status Tersedia</td>
                            <td>Status Penitipan</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sublayanan as $sub)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{url('/storage/' .$sub->gambar)}}" style="width:50px;"></td>
                            <td>{{ $sub->nama }}</td>
                            <td>{{ $sub->harga }}</td>
                            <td>{{ $sub->alamat }}</td>
                            <td>{{ $sub->deskripsi }}</td>
                            <td>{{ $sub->status1 }}</td>
                            <td>{{ $sub->status2 }}</td>
                            <td class="td" style="size: 30px;">
                                <button onclick="editSubLayanan({{$sub->id}})" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button onclick="detailSubLayanan({{$sub->id}})" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" class="btndetail">
                                    <i class='bx bx-detail'></i>
                                </button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalHapus{{ $sub->id }}" class="btn btn-danger btn-sm fw-bold px-4">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ($sublayanan as $item)
    <div class="modal fade" id="exampleModalHapus{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:45%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">
                        Hapus Data
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/sublayanan/'.$item->id) }}" method="POST">
                    @method("DELETE")
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-content-hapus">
                        Apakah Yakin Untuk Menghapus Data Ini?
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
                        <button type="button" class="btn btn-danger btn-sm">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
 
    <!-- Modal Create -->
    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Tambah Sub-Layanan</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ url('/sublayanan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Vendor</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" required>
                            @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" required>
                            @error('harga')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                            @error('alamat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi') }}">
                            @error('deskripsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label>Status Ketersedian</label>
                            <div>
                                <select class="form-control mb-3" name="status2">
                                    <option value="buka">Buka</option>
                                    <option value="tutup">Tutup</option>
                                </select>
                                @error('status2')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Status Penitipan</label>
                            <div>
                                <select class="form-control mb-3" name="status1">
                                    <option value="tersedia">Tersedia</option>
                                    <option value="tidak tersedia">Tidak Tersedia</option>
                                </select>
                                @error('status1')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 form-label" for="inputgambar" >Slider Image</label>
                            <input type="file" class="form-control" name="gambar" required>
                            @error('gambar')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="modal-footer d-md-block">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <button type="button" class="btn btn-danger btn-sm">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:45%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">Edit Kategori</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/sublayanan/simpan') }}" method="POST" enctype="multipart/form-data">
                    @method("PUT")
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-content-edit">

                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
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
                    <h3 class="modal-title" id="exampleModalLabel">DetailKategori</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-content-detail">

                </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-danger btn-sm"data-bs-dismiss="modal" aria-label="Close">Kembali</button>
                </div>
            </div>
        </div>
    </div>


</section>

{{-- JS delete --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('#deletekategori').click(function(){
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
        const gambar = document.queryselector('#gambar');
        const imgPreview = document.queryselector('.img-preview');

        imgPreview.styp.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

{{-- JS CKeditor --}}
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
</script>
<script>
    CKEDITOR.replace('my-edit');
</script>
@endsection

@section('js')

<script type="text/javascript">
    function editSubLayanan(id) {
        $.ajax({
            url: "{{ url('/sublayanan/edit') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-edit").html(data);
                return true;
            }
        })
    }

    function detailSubLayanan(id) {
        $.ajax({
            url: "{{ url('/sublayanan/detail') }}",
            type: "GET",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal-content-detail").html(data);
                return true;
            }
        })
    }
</script>

@endsection
