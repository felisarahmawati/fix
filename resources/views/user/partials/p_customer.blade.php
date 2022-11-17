{{-- customer profile --}}
<div class="col card" style="width: 400px">

    <div class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column ">
        <div class="col-md-15 mt-5">
            @if (Auth::user()->photo)
                <img src="{{ asset('storage/photoscustomer/'. Auth::user()->photo) }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
            @else
                <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 50%;" class="img-thumbnail rounded mx-auto d-block">
            @endif

        </div>
        <div class="person-name">
            <h2 class="text-center fs-4 my-2">{{ Auth::user()->name }}</h2>
        </div>
        <div class="person-email">
            <h3 class="text-center fs-5 fw-normal mb-3">{{ Auth::user()->email }}</h3>
        </div>
        <div class="bt mb-2">
            <button onclick=""  data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btn btn-success fw-bold rounded-pill px-4 shadow float-end">
                Update
            </button>
        </div>

        <hr width="100%" color="#c0c0c0">
        <div class="card-body ">
            <h5 class="card-title">
                <b>Umum</b>
            </h5>
            <div class="row" style="width: 350px">
                <div class="col-md">
                    <p><i class="bi bi-geo-alt px-1"></i>Tambah Alamat</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/user/profil/alamat"><i class="bi bi-chevron-right"></i></a></p>
                </div>
            </div>

            <div class="row" style="width: 350px">
                <div class="col-md">
                    <p href=""><i class="bi bi-bell px-1"></i>Notifikasi</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/user/Notifikasi"><i class="bi bi-chevron-right"></i></a></p>
                </div>
            </div>
            <h5 class="card-title"><b>Privasi</b></h5>

            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-question-circle px-1"></i>Kebijakan Privasi</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/user/profil/kebijakanprivasi"><i class="bi bi-chevron-right"></i></a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-question-circle px-1"></i>Pusat Bantuan</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/user/profil/bantuan/bantuan"><i class="bi bi-chevron-right"></i></a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-info-circle px-1"></i></i>Tentang</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/user/profil/tentang/tentang"><i class="bi bi-chevron-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
