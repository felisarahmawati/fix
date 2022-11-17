@extends('layouts_super.main')
@section('content')
    <section class="home-section">

    <body>
        <div class="main">
            <div class="topbar">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
            </div>

            <div class="details3">
                <div class="recentOrders3">
                    <div class="cardHeader" >
                        <h4>Provinsi</h4>
                        <a href="" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal7" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end"><b>Tambah +</b></a>
                    </div>
                    <br>
                    <!--Alert-->
                    @if($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                    <table>
                        <thead>
                            <tr class="col-md-12">
                                <td>No.</td>
                                <td class="col-md-3">Provinsi</td>
                                <td class="col-sm-3 text-center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_provinsi as $data)
                                <tr>

                                    <td style="size: 20px;">{{ ++$no }}</td>
                                    <td style="align-content: center">{{ $data->nama_provinsi }}</td>
                                    <td class="text-end" style="size: 30px;">
                                    <button onclick="editProvinsi({{ $data->id }})" class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalHapus{{ $data->id }}" class="btn btn-danger btn-sm fw-bold px-4">
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

        <!-- Modal Create -->
        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 50%">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">Tambah Provinsi</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ url('superadmin/master/provinsi') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label for="inputnama_provinsi" class="form-label">Provinsi</label>
                                <input type="text" name="nama_provinsi" class="form-control @error('nama_provinsi') is-invalid @enderror" value="{{ old('nama_provinsi') }}" placeholder="Masukkan Nama Provinsi">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

         <!-- Modal Edit-->
         <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width:35%">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Provinsi</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('superadmin/master/provinsi/simpan') }}" method="POST" enctype="multipart/form-data">
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

        {{-- DELETE --}}
        @foreach ($data_provinsi as $data)
            <div class="modal fade" id="exampleModalHapus{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="width:35%">
                    <div class="modal-content">
                        <div class="modal-header hader">
                            <h3 class="modal-title" id="exampleModalLabel">
                                Hapus Data
                            </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('/provinsi/'.$data->id) }}" method="POST">
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
         {{-- <script src="assets/js/main.js"></script> --}}

         <!--Jquery-->
         <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
         <!-- Alert -->
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <!-- Toastr -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>

    <script>
        $(document).ready(function(){
            $('#deleteprovinsi').click(function(){
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
    </script>

    <script type="text/javascript">
        function editProvinsi(id) {
            $.ajax({
                url: "{{ url('/superadmin/master/provinsi/edit') }}",
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
    </script>


    </section>

@endsection
