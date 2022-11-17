@extends('vendor.vendor.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Kelola kendaraan</h2>
            </div>
        </div>
        <div class="">
            <div class="cardBox1">
                <div class="card2">
                    <div>
                        <a href="/vendor/vendor/Kelola-Kendaraan/layanan_step1" style="text-decoration:none">
                        <div class="cardName2">
                            Kendaraan
                        </div>
                        </a>
                    </div>
                </div>

                <div class="card1">
                    <div>
                        <a href="/vendor/vendor/Kelola-Bangunan/layanan_step1" style="text-decoration:none">
                        <div class="cardName1">
                            Bangunan
                        </div>
                        </a>
                    </div>
                </div>

                <div class="card1">
                    <div>
                        <a href="/vendor/vendor/Kelola_Barang/layanan_step1" style="text-decoration:none">
                        <div class="cardName1">
                            Barang
                        </div>
                        </a>
                    </div>
                </div>

                <div class="card1">
                    <div>
                        <a href="/vendor/vendor/Kelola-Pickup/layanan_step1" style="text-decoration:none">
                        <div class="cardName1">
                            Pick Up
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container mb-5" style="width: 800px">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></i>Atur Alamat</h5>
                        <hr width="100%" color="#c0c0c0">
                        <form action="">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">
                                    <b>Alamat</b>
                                    <p>Isikan alamat lahan parkir Anda di bawah sini</p>
                                </label>
                                <input type="text" class="form-control" id="" placeholder="Masukan lokasi anda" name="link_lokasi" value="">
                            </div>

                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Provinsi</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pilih provinsi</option>
                                    <option>DKI Jakarta</option>
                                    <option>Jawa Barat</option>
                                    <option>Jawa Tengah</option>
                                    <option>DI Yogyakarta</option>
                                    <option>Jawa Timur</option>
                                    <option>Kalimantan Timur</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Kabupaten</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pilih Kabupaten</option>
                                    <option>Bantul</option>
                                    <option>Sleman</option>
                                    <option>Kulon Progo</option>
                                    <option>Gunung Kidul</option>
                                    <option>Kota Yogyakarta</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Kecamatan</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pilih Kecamatan</option>
                                    <option>Baguntapan</option>
                                    <option>Bambanglipuro</option>
                                    <option>Bantul</option>
                                    <option>Dlingo</option>
                                    <option>Imogiri</option>
                                    <option>Jetis</option>
                                    <option>Kasihan</option>
                                    <option>Kretek</option>
                                    <option>Pajangan</option>
                                    <option>Pandak</option>
                                    <option>Piyungan</option>
                                    <option>Pundong</option>
                                    <option>Sanden</option>
                                    <option>Sedayu</option>
                                    <option>Sewon</option>
                                    <option>Srandakan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                                <p><small class="text-muted">Deskripsikan Alamat lahan parkir Anda agar mudah
                                    ditemukan(opsional)</small></p>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for=""><b>Ukuran Lahan Parkir</b></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Panjang</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="25">
                                    </div>
                                    <div class="col-md-1 mt-5 text-center">
                                        X
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Lebar</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="25">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label for=""><b>Upload foto Lokasi Lahan parkir Anda</b></label>
                                <div class="col-md-3">
                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>+</h3>
                                            </div>
                                        </div>
                                        <p class="text-center">Kanan</p>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>+</h3>
                                            </div>
                                        </div>
                                        <p class="text-center">Kiri</p>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>+</h3>
                                            </div>
                                        </div>
                                        <p class="text-center">Depan</p>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>+</h3>
                                            </div>
                                        </div>
                                        <p class="text-center">Dalam</p>
                                        <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="/vendor/vendor/Kelola-Kendaraan/layanan_step2"><button type="button" class="btn btn-success col-md-12 mt-3">Selanjutnya</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
