<div class="col-lg-8 col-md-6 mt-4 pe-2 ps-2 mb-1">
    <div class="card-profile d-flex flex-column px-0 py-4">
        <div class="id-user px-3">
            <h6 class="mb-0 fw-bold float-left">Account ID : {{ Auth::user()->id }}</h6>
        </div>
        <hr width="100%" color="#c0c0c0">
        <div class=" p-3">
            <form class="row g-3 fw-bold">
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail"
                        value="{{ old('email', Auth::user()->email )}}">
                </div>
                <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control input-text" id="username"
                    value="{{ old('username', Auth::user()->name) }}">
                </div>
                <div class="col-md-6">
                    <label for="no_telp" class="form-label">No Telepon</label>
                    <input type="text" class="form-control input-text" id="no_telp"
                        value="{{ old('no_telp', Auth::user()->no_telp) }}">
                </div>
                <div class="col-md-6">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control input-text" id="tgl_lahir"
                    value="{{ old('tgl_lahor', Auth::user()->tgl_lahir) }}">
                </div>
                <div class="col-12">
                    <label for="inputAlamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control input-text" id="inputAlamat"
                    value="{{ old('alamat', Auth::user()->alamat) }}">
                </div>
                <div class="col-12">
                    <label for="inputKelurahan" class="form-label">Desa</label>
                    <input type="text" class="form-control input-text" id="inputKelurahan" value="{{ old('kelurahan', Auth::user()->kelurahan) }}">
                </div>
                <div class="col-md-2">
                    <label for="inputKecamatan" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control input-text" id="inputKecamatan" value="{{ old('kecamatan', Auth::user()->kecamatan) }}">
                </div>
                <div class="col-md-6">
                    <label for="inputkota_kab" class="form-label">kota</label>
                    <input type="text" class="form-control input-text" id="inputkota_kab"
                    value="{{ old('kota_kab', Auth::user()->kota_kab) }}">
                </div>
                <div class="col-12 bt pt-2">
                    <button type="submit" class="btn btn-thema fw-bold">Update Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Form Edit User Profile --}}
