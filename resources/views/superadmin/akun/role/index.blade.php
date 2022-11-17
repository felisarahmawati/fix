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
                    <h2>Role</h2>
                </div>
            </div>

            <div class="details1">
                <div class="col-md-6">
                    <h5 class="card-title text-bold">
                        <i class="fa fa-plus"></i> Tambah Data
                        </h5>
                        <hr>
                        <form action="{{ url('/superadmin/akun/role') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="nama">Role</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                            </div>

                            <div class="form-group">
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-times"></i> Batal
                                </button>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus"></i> Tambah
                                </button>
                            </div>
                        </form>
                </div>

                <div class="card-block">
                    <table class="display table table-bordered" cellspacing="1" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $no = 0
                        @endphp
                        @foreach ($data_role as $data)
                            <tr>
                                <td class="text-center">{{ ++$no }}</td>
                                <td>{{ $data->nama }}</td>
                                <td style="size: 20px" >
                                    <div class="row">
                                        <div class="col-md-6 text-end">
                                            <button onclick="editRole({{$data->id}})" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btnedit">
                                                <i class='bx bx-edit'></i>
                                            </button>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('role.destroy', $data->id) }}" method="POST">
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

            <!-- Form Edit -->
            <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="width: 35%">
                    <div class="modal-content">
                        <div class="modal-header hader">
                            <h3 class="modal-title" id="exampleModalLabel">
                                Edit Layanan
                            </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="{{ url('/superadmin/akun/role/simpan') }}" method="POST" enctype="multipart/form-data">
                            @method("PUT")
                            {{ csrf_field() }}
                            <div class="modal-body" id="modal-content-edit">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    <i class="fa fa-times"></i> Kembali
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- END --}}
            @endsection

@section("js")

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function editRole(id) {
        $.ajax({
            url: "{{ url('/superadmin/akun/role/edit') }}",
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
