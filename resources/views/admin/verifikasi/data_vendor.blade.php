@extends('layouts_admin.main')
@section('content')
<section class="home-section">
    <div class="main">

        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>

        <!-- top nav -->

        <!-- data list -->
        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Data Vendor</h2>
                </div>

                <table class="table-borderless mt-3 w-auto">
                    <thead>
                        <tr>
                            <td>Nama Vendor</td>
                            <td>Nama Pemilik</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                        <tr>
                            <td>{{ $data->nama_vendor }}</td>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td class="td" style="size: 30px;">
                                <button onclick="detail" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDetail{{ $data->id }}">
                                    Detail
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

{{-- Detail --}}
@foreach ($user as $data)
    <div class="modal fade" id="exampleModalDetail{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header hader text-center">
                <h3 class="modal-title" id="exampleModalLabel">Detail Vendor</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <h5>Nama Vendor</h5>
                            <label>{{ $data->nama_vendor }}</label>

                            <h5 class="mt-4">Username</h5>
                            <label for="">{{ $data->name }}</label>

                            <h5 class="mt-4">Email</h5>
                            <label for="">{{ $data->email }}</label>
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Pemilik</h5>
                            <label for="">{{ $data->nama_lengkap }}</label>

                            <h5 class="mt-4">NIK</h5>
                            <label for="">{{ $data->no_ktp }}</label>

                            <h5 class="mt-4">Tempat, Tanggal Lahir</h5>
                            <label for="">{{ $data->tmpt_lahir }}, {{ $data->tmpt_lahir }}</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="text-center mt-4">
                            <b>Link google drive</b>
                        </p>
                        <p class="text-center">
                            {{ $data->image_ktp }}
                        </p>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-6 mt-4">
                            <p class="text-center">KTP</p>
                            <img src="{{ asset('storage/ktp/'.$data->image_ktp) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                        </div>

                        <div class="col-md-6 mt-4">
                            <p class="text-center">SKCK</p>
                            <img src="{{ asset('storage/skck/'.$data->image_skck) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- End --}}
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

    function detail{
        $.ajax({
            url: "{{ url('/admin/data/data_vendor_details') }}",
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

