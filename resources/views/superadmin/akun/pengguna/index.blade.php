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
                    <h2>Pengguna</h2>
                </div>
            </div>

            <div class="details1 ">
                <div class="recentOrders">
                    <div class="cardHeader" >
                        <h4>Data Pengguna</h4>
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
                                <td>Nama</td>
                                <td>Email</td>
                                <td>No Telepon</td>
                                <td class="col-md-3 text-center">Alamat</td>
                                <td class="col-md-3 text-center">Jabatan</td>
                                <td class="col-md-3 text-center">Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $index => $pengguna)
                            <tr>
                                <td scope="row">{{ $index + $user->firstItem() }}</td>
                                <td>{{ $pengguna->name }}</td>
                                <td>{{ $pengguna->email }}</td>
                                <td>{{ $pengguna->no_telp }}</td>
                                <td class="col-md-3 text-center">{{ $pengguna->alamat }}</td>
                                <td class="col-md-3 text-center">{{ $pengguna->id_role }}</td>
                                <td style="size: 20px;">
                                    <div class="row">
                                        <div class="col-md-10 text-end">
                                            <button onclick="" type="button" class="btndetail" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $pengguna->id }}">
                                                Detail
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="my-5">
                        {{ $user->links() }}
                    </div>

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
                    Tambah Pengguna
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/superadmin/akun/pengguna') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="name" name="name" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- <div class="form-group">
                    <label>
                        Tanggal Lahir :
                    </label>
                    <div class="col mb-6">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan tgl_lahir" required>
                    </div>
                </div> --}}

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control @error('nama') is-invalid @enderror" placeholder="E-Mail" aria-describedby="basic-addon1">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <div class="col mb-6">
                        <textarea name="alamat" class="form-control" id="alamat" rows="2" placeholder="Masukkan Alamat" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label>
                        No. Telepon
                    </label>
                    <div class="col mb-6">
                        <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="0" required min="1">
                    </div>
                </div>


                <div class="col mb-7">
                    <label for="password" class="col-sm-2 col-form-label">{{ __('New Password') }}</label>
                    <div class="col mb-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col mb-7">
                    <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>
                    <div class="col mb-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>

                {{-- <div class="form-group mb-3">
                    <label>Jabatan</label>
                    <div>
                        <select class="form-select" name="id_role" id="id_role">
                            <option value="">-- Pilih --</option>
                            @foreach ($user as $pengguna)
                         <option value="">{{ $pengguna->id_role }}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}
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
                    Edit Pengguna
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="" method="POST">
                @method("PATCH")
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

@foreach($user as $pengguna)
<div class="modal fade" id="exampleModal{{ $pengguna->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 40%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h2 class="modal-title" id="exampleModalLabel">Data {{ $pengguna->name }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label text-right">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" value="{{ $pengguna->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label text-right"> Email </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value="{{ $pengguna->email }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-2 col-form-label text-right">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_telp" value="{{ $pengguna->no_telp }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label text-right">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" value="{{ $pengguna->alamat }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

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

        function editPengguna(id) {
            $.ajax({
                url: "{{ url('/superadmin/akun/pengguna/edit') }}",
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
