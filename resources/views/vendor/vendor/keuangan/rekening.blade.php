@extends('vendor.vendor.dashboard_vendor')

@section('container')
    <section class="home-section">

        <div class="main">
            <div class="topbar">
                <!-- Extend Navbar >> bermasalah khusus dashboard -->
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <!-- Search -->
                <div class="search" data-aos="fade-left" data-aos-duration="1000">
                    <label>
                        <input type="text" placeholder="Cari Disini">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-10">
                    <div class="recentOrders">
                        <div class="details3">
                            <div class="recentOrders3">
                                <div class="rincian d-inline mb-2">
                                    <button type="button"class="btn btn-success float-end" style="border-radius: 10px;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"
                                            style="font-size:20px"></i>Tambah Rek. Baru</button>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <div class="card" style="border-radius: 30px;">
                                            <div class="card-body">
                                                <div class="row ">
                                                    <div class="col-md-4">
                                                        <img src="{{ asset('../../assets/img/mandiri.png') }}"
                                                            class="img-fluid rounded-start mt-5" alt="..."
                                                            style="padding-left:15px">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <p>D**A T*****I</p>
                                                            <p style="font-size: 15px"><b>BNK MANDIRI</b></p>
                                                            <p>35363463245</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card" style="border-radius: 30px;" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2">
                                            <div class="card-body">
                                                <div class="row ">
                                                    <div class="col-md-4">
                                                        <img src="{{ asset('../../assets/img/bca.png') }}"
                                                            class="img-fluid rounded-start mt-5" alt="..."
                                                            style="padding-left:15px">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <p>D**A T*****I</p>
                                                            <p style="font-size: 15px"><b>BCA</b> <span
                                                                    class="badge rounded-pill bg-danger">
                                                                    utama
                                                                </span></p>
                                                            <p>35363463245</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card" style="border-radius: 30px;">
                                            <div class="card-body">
                                                <div class="row ">
                                                    <div class="col-md-4">
                                                        <img src="{{ asset ('../../assets/img/bank bri.png') }}"
                                                            class="img-fluid rounded-start mt-5" alt="..."
                                                            style="padding-left:15px">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <p>D**A T*****I</p>
                                                            <p style="font-size: 15px"><b>BRI</b></p>
                                                            <p>35363463245</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="width: 700px">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-3 col-form-label" style="font-size:15px">Pilih
                                    Bank</label>
                                <div class="col-sm-9">
                                    <select class="form-select form-select-lg mb-3"
                                        aria-label=".form-select-lg size 3 select example">
                                        <option selected>Pilih Bank</option>
                                        <option value="1">BRI</option>
                                        <option value="3">BRI SYARIAH</option>
                                        <option value="2">BANK MANDIRI</option>
                                        <option value="3">BCA</option>
                                        <option value="3">BNI</option>
                                        <option value="3">BSI</option>
                                        <option value="3">BTN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Masukan Nama Pemilik Rek</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="nama pemikik rek">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Masukan No. Rekening</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Ketikan nomor rekening anda">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success col-md-12" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1">Lanjut</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Modal cek rekening -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="width: 700px">
                    <div class="modal-header">
                        <h5>Konfirmasi Data Pemilik Rekeneing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Nama Lengakap Pemilik No. Rek
                            </div>
                            <div class="col-md-6"> :
                                DILA TRIYANI
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                No. Rekening
                            </div>
                            <div class="col-md-6"> :
                                0459026586333
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Bank
                            </div>
                            <div class="col-md-6"> :
                                BCA
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="/vendor/vendor/keuangan/rekening"> <button type="button"
                                    class="btn btn-success md-12">Simpan</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Modal detail rek -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="width: 700px">
                    <div class="modal-header">
                        <h5>Detail Rekening Bank</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Nama Lengakap Pemilik No. Rek
                            </div>
                            <div class="col-md-6"> :
                                DILA TRIYANI
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                No. Rekening
                            </div>
                            <div class="col-md-6"> :
                                0459026586333
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Bank
                            </div>
                            <div class="col-md-6"> :
                                BCA
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Kota/kabupaten
                            </div>
                            <div class="col-md-6"> :
                                Bekasi
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                Cabang kantor
                            </div>
                            <div class="col-md-6"> :
                                Bekasi kota
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
