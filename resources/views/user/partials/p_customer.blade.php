{{-- customer profile --}}
<div class="col" style="width: 400px; margin-left:10px">
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="person-img px-xl-5">
            @if (Auth::user()->photo)
                <img src="{{ asset('storage/photoscustomer/'. Auth::user()->photo) }}" alt="" style="width: 65%;" class="img-fluid rounded-circle mx-auto d-block">
            @else
                <img src="{{ asset('assets/img/profile.png') }}" alt="" style="width: 80%;" class="img-fluid rounded-circle mx-auto d-block">
            @endif
        </div>
        <div class="person-name">
            <h2 class="text-center fs-5 my-2">{{ Auth::user()->name }}</h2>
        </div>
        <div class="person-email">
            <h3 class="text-center fs-6 fw-normal mb-3">{{ Auth::user()->email }}</h3>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto mb-3">
            <button onclick="" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" class="btn btn-success fw-bold rounded-pill px-4 shadow">
                Update
            </button>
        </div>
        <hr width="100%" color="#c0c0c0">
        <div class="card-body">
            <h5 class="card-title">
                <b>Umum</b>
            </h5>
            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-geo-alt px-1"></i>Tambah Alamat</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/user/profil/alamat"><i class="bi bi-chevron-right"></i></a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <p href=""><i class="bi bi-bell px-1"></i>Ketentuan Layanan</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/user/profil/ketentuan_layanan"><i class="bi bi-chevron-right"></i></a></p>
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
