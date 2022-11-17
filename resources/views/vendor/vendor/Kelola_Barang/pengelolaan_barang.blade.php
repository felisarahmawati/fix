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
                    <h2>Kelola Barang</h2>
                </div>
            </div>
            <div class="card">
                <div class="cardBox1">
                    <div class="card1">
                        <div>
                            <a href="/Vendor/Kelola-Kendaraan/layanan_step1" style="text-decoration:none">
                                <div class="cardName1">Kendaraan
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="card1">
                        <div>
                            <a href="/Vendor/Kelola-Bangunan/layanan_step1" style="text-decoration:none">
                                <div class="cardName1">Bangunan
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="card2">
                        <div>
                            <a href="/Vendor/Kelola_Barang/layanan_step1" style="text-decoration:none">
                                <div class="cardName2">Barang
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card1">
                        <div>
                            <a href="/Vendor/Kelola-PickUp/layanan_step1" style="text-decoration:none">
                                <div class="cardName1">Pick Up
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="p-5 container card" style="width: 70%">
                    <div class="card ">
                        <h5 class="card-header">Pilih jenis pengelolaan barang</h5>
                        <div class="card-body">
                            <div class="mb-3 p-3" style="max-width: auto;">

                                <p><b>Pengelolaan Barang!</b>
                                <p class="text-muted">Masukkan data layanan barang yang akan dikelola</p>
                                </p><br>
                                <h6 class="mt-3"><i class="bi bi-plus-circle-fill"
                                        style="font-size: 25px; color:#198754; p-3"></i><b>
                                        Pilih Barang</b></h6>
                                <div class="row ">
                                    <div class="col-md-11 mb-3">
                                        <p class="">Mengatur jenis barang yang dititipkan</p>
                                    </div>
                                    <div class="col-md-1">
                                        <i class="bi bi-chevron-right" style="font-size: 25px; color:black; p-2"
                                            data-bs-toggle="modal" data-bs-target="#Modal"></i>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="mb-3"><b><i class="bi bi-plus-circle-fill"
                                            style="font-size: 25px; color:#198754; p-3"></i>
                                        Pilih Paket Barang</b></h6>
                                <div class="row ">
                                    <div class="col-md-11 mb-3">
                                        <p class="">Menambah paket barang yang
                                            bisa dititipkan</p>
                                    </div>
                                    <div class="col-md-1">
                                        <i class="bi bi-chevron-right" style="font-size: 25px; color:black; p-2"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!--modal pilih baragng-->
        <div class="modal fade p-5" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class=" mt-3">
                        <label for="exampleFormControlInput1" class="form-label"><b>Pilih barang yang ada di layanan
                                Anda.</b>
                            <p class="text-muted">Silahkan centang barang yang ada dan
                                sesuai untuk lahan anda </p>
                        </label>
                    </div>
                    <form action="">
                        <div class="mb-3 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Tuliskan barang yang akan ditambahkan
                                di layanan
                                Anda</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Laptop">
                        </div>
                        <div class="col-sm-12">
                            <label for="inputState" class="form-label">Pilih Kategori</label>
                            <select>
                                <option selected>Pilih Kategori</option>
                                <option>Elektronik</option>
                                <option>Furniture</option>
                                <option>Fashion</option>
                                <option>Aksesoris</option>
                                <option>Surat berharga</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Masukan harga penitipan </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000">
                        </div>
                        <div class="mb-3">
                            <label for="">Deskripsi produk</label>
                            <textarea type="text" class="form-control" id="exampleFormControlInput1" placeholder=""></textarea>
                        </div>


                        <a href="/Vendor/Kelola_Barang/layanan_step4"><button type="button"
                                class="btn btn-success col-md-12 mt-3">Lanjutkan</button><br><br></a>

                    </form>
                </div>
            </div>
        </div>
        </div>



        <!--modal pilih paket-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pilih Jenis Paket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="">
                        <label for="exampleFormControlInput1" class="form-label"><b>Pilih barang yang ada di layanan Anda
                                sesuai
                                dengan keinginan Anda.</b>
                            <p class="text-muted">Pilih fasilitas yang ada dan sesuai dengan lahan yang terserdia</p>
                        </label>

                    </div>

                    <P style="font-size: 20px"><b>Jenis paket</b></P>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="avatar form-check-label" for="flexCheckDefault" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="isi : Kulkas, lemari, kasur,
     1 set kursi dan meja">
                                    Paket Barang 1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="isi : Kulkas, lemari, kasur,
     1 set kursi dan meja">
                                    Paket Barang 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="isi : Kulkas, lemari, kasur,
    1 set kursi dan meja">
                                    Paket Barang 3
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="isi : Kulkas, lemari, kasur,
     1 set kursi dan meja">
                                    Paket Barang 4
                                </label>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="isi : Kulkas, lemari, kasur,
     1 set kursi dan meja">
                                    Rumah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="isi : Kulkas, lemari, kasur,
     1 set kursi dan meja">
                                    Kost-Kostan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault" data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title="isi :
     Kulkas, lemari, kasur,1 set kursi dan meja">
                                    Apartement
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label " data-bs-toggle="tooltip" for="flexCheckDefault">
                                    Kontrakan
                                </label>
                            </div><br>

                        </div>

                        <div class="mb-1">
                            <label for="">Masukan harga penitipan </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Rp20.000">
                        </div>
                        <div class="mb-1">
                            <label for="">Deskripsi Layanan </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-sm-12">
                            <a href="" class="btn btn-success col-md-12 " data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">Ajukan
                                Paket Baru</a>
                            <a href="/Vendor/Kelola_Barang/layanan_step4"><button type="button"
                                    class="btn btn-success col-md-12 mt-3">Lanjutkan</button><br><br></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- pengajuan paket baru --}}
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-light p-2 text-dark bg-opacity-30">
                    <div class="modal-header">
                        <h5>Paket Anda</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="">Ajukan paket yang Anda inginkan </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Paket jumbo">
                        </div>
                        <div class="mb-3">
                            <label for="">Deskripsi/ Isi paket Anda</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder=" Lemari, tas, baju">
                        </div>
                        <div class="mb-3">
                            <label for="">Harga paket</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder=" 50.000">
                        </div>
                        <div class="mb-1">
                            <label for="">Deskripsi Layanan </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                    <button class="col-md-12 btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Ajukan</button>
                </div>
            </div>
        </div>

        {{-- modal detail --}}
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-light p-2 text-white bg-opacity-50">
                    <div class="modal-header">
                        <h5>Detail isi paket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Terdapat 1 meja lipat, 1 koper beserta isinya, 2 pasang sepatu, 1 set alat makan
                    </div>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Kembali</button>
                </div>
            </div>
        </div>

        <!-- Generated markup by the plugin -->

    </section>
@endsection
