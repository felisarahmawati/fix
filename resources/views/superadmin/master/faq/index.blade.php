@extends("layouts_super.main")
@section('content')
<section class="home-section">

<body>
<div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Pusat Bantuan</h2>
            </div>
        </div>

        <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader" >
                        <h4>Pusat Bantuan</h4>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal7" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end"><b>Tambah +</b></a>
                    </div>
                    <br>
                    <!--Alert-->
                    @if (session('berhasil'))
                        <div class="alert alert-success">
                            {{ session('berhasil') }}
                        </div>
                    @endif
                    <table>
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Pertanyaan</td>
                                <td>Jawaban</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($faq as $index)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{ $index->pertanyaan }}</td>
                                <td>{!! $index->jawaban !!}</td>
                                <td class="td" style="size: 25px;">
                                    <button onclick="editfaq({{$index->id}})" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    <button onclick="detailfaq({{$index->id}})" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" class="btndetail">
                                        <i class='bx bx-detail'></i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalHapus{{$index->id}}" class="btn btn-danger btn-sm fw-bold px-4">
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

        {{-- CREATE --}}
        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 50%">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">Tambah Pusat Bantuan</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ url('/faq')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                {{-- <input type="text" name="pertanyaan" class="form-control @error('pertanyaan') is-invalid @enderror" value="{{ old('judul') }}" required> --}}
                                <select class="form-select" aria-label="Default select example" name="pertanyaan" @error('pertanyaan') is-invalid @enderror>
                                    <option selected value="">-- Pertanyaan --</option>
                                    <option>Apa itu titipsini.com?</option>
                                    <option>Bagaimana cara membayar?</option>
                                    <option>Bagaimana melihat profil Anda?</option>
                                    <option>Bagaimana cara pesan penitipan?</option>
                                    <option>Mengapa saya tidak menerima kode OTP?</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="inputjawaban" class="form-label">Jawaban</label>
                                <textarea type="text" name="jawaban" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        {{-- EDIT --}}
        <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width:50%">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Pusat Bantuan</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('/superadmin/super/faq/simpan') }}" method="POST" enctype="multipart/form-data">
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
                        <h3 class="modal-title" id="exampleModalLabel">Detail Pusat Bantuan</h3>
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

        {{-- DELETE --}}
        @foreach ($faq as $data)
            <div class="modal fade" id="exampleModalHapus{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="width:45%">
                    <div class="modal-content">
                        <div class="modal-header hader">
                            <h3 class="modal-title" id="exampleModalLabel">
                                Hapus Data
                            </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('/faq/'.$data->id) }}" method="POST">
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

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <!-- Alert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<script type="text/javascript">
    function editfaq(id) {
        $.ajax({
            url: "{{ url('/superadmin/master/faq/edit') }}",
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
    function detailfaq(id) {
        $.ajax({
            url: "{{ url('/superadmin/master/faq/detail') }}",
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
</section>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
</script>
@endsection
