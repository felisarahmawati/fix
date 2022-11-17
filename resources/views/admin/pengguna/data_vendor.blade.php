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

        <!-- data list -->
        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Verifikasi Vendor</h2>
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
                        @foreach ($user as $vendor)
                            <tr>
                                <td>{{ $vendor->nama_vendor }}</td>
                                <td>{{ $vendor->nama_lengkap }}</td>
                                <td>{{ $vendor->name }}</td>
                                <td>{{ $vendor->email }}</td>
                                <td class="td" style="text-align: center">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDetail{{$vendor->id}}"
                                        class="btndetail">
                                        <i class='bx bx-detail'></i>
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
@foreach($user as $vendor)
<div class="modal fade" id="exampleModalDetail{{$vendor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label>{{ $vendor->nama_vendor }}</label>

                            <h5 class="mt-4">Username</h5>
                            <label for="">{{ $vendor->name }}</label>

                            <h5 class="mt-4">Email</h5>
                            <label for="">{{ $vendor->email }}</label>
                        </div>

                        <div class="col-md-6">
                            <h5>Nama Pemilik</h5>
                            <label for="">{{ $vendor->nama_lengkap }}</label>

                            <h5 class="mt-4">NIK</h5>
                            <label for="">{{ $vendor->no_ktp }}</label>

                            <h5 class="mt-4">Tempat, Tanggal Lahir</h5>
                            <label for="">{{ $vendor->tmpt_lahir }}, {{ $vendor->tgl_lahir }}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <p class="text-center">KTP</p>
                            <img src="{{ asset('storage/ktp/'.$vendor->image_ktp) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                        </div>

                        <div class="col-md-6 mt-4">
                            <p class="text-center">SKCK</p>
                            <img src="{{ asset('storage/skck/'.$vendor->image_skck) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block mt-2 mb-2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-end">
                            <button onclick="verifikasi" type="button" class="btn btn-success mt-4 end" data-bs-toggle="modal" data-bs-target="#verifikasi">
                                Verifikasi
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button onclick="tolak" type="button" class="btn btn-danger mt-4 end" data-bs-toggle="modal" data-bs-target="#tolak">
                                 Tolak
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-md-block">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
            </div>
        </div>
    </div>
</div>
@endforeach
{{-- End --}}

{{-- Verifikasi --}}
<div class="modal fade" id="verifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Verifikasi Vendor</h4>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body text-center">
                    <p><b> Yakin verifikasi vendor ini?</b></p>
                    <button type="button" class="btn btn-success btn-sm" >verifikasi</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End --}}

{{-- Tolak --}}
<div class="modal fade" id="tolak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:30%">
        <div class="modal-content">
            <h4 class="modal-title text-center" id="exampleModalLabel">Konfirmasi Tolak Pengguna</h4>
            <div class="modal-body" id="modal-content-detail">
                <div class="card-body text-center">
                    <p><b>Alasan menolak pengguna ini?</b></p>
                    <form>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Alasan"></textarea>
                    </form>
                    <button type="button" class="btn btn-success btn-sm" >verifikasi</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail" aria-label="Close">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>
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

