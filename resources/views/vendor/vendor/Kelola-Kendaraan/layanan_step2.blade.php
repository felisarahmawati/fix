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
                    <h2>Kelola Kendaraan</h2>
                </div>
            </div>
            <div class="">
                <div class="cardBox1">
                    <div class="card2">
                        <div>
                            <a href="/vendor/vendor/Kelola-barang/layanan_step1" style="text-decoration:none">
                                <div class="cardName2">Kendaraan
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="card1">
                        <div>
                            <a href="/vendor/vendor/Kelola-Bangunan/layanan_step1" style="text-decoration:none">
                                <div class="cardName1">Bangunan
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="card1">
                        <div>
                            <a href="/vendor/vendor/Kelola-Barang/layanan_step1" style="text-decoration:none">
                                <div class="cardName1">Barang
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card1">
                        <div>
                            <a href="/vendor/vendor/Kelola-PickUp/layanan_step1" style="text-decoration:none">
                                <div class="cardName1">Pick Up
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container mt-4 mb-5">
                    <div class="row justify-content-center">
                        <div class="card" style="background-color: #fff; width:70% ">
                            <div class="mt-3">
                                <p><b>Tambah layanan lahan parkir!</b>
                                <p class="text-muted">Daftarkan tempat parkir Anda dengan
                                    mengisi data dibawah ini</p><br>
                                </p>
                                <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px"
                                        fill="currentColor" class="bi bi-1-circle-fill p-2" viewBox="0 0 16 16"
                                        style="color:rgb(255, 221, 0)">
                                        <path fill-rule="evenodd"
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
                                    </svg><b>Alamat lahan parkir</b></h6>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="ps-4">Untuk mengatur lokasi dan detail alamat lahan parkir Anda</p>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="bi bi-check2-square"
                                            style="font-size: 37px; color:rgb(98, 212, 133);"></i>

                                    </div>
                                </div>
                                <hr>
                                <div class="">
                                    <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px"
                                            fill="currentColor" class="bi bi-2-circle-fill p-2" viewBox="0 0 16 16"
                                            style="color:rgb(255, 221, 0)">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z" />
                                        </svg><b>Jenis Kendaraan</b></h6>
                                    <div class="row">
                                        <div class="col-md-10 ">
                                            <p class="ps-4">Mengatur jenis kendaraan yang dititipkan</p>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><button
                                                    class="btn btn-success mb-3">Tambah</button></a>
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
        <!--modal pilih kendaraan-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="width:530px">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pilih Jenis Paket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mt-2" style="font-size: 15px">
                        <label for="exampleFormControlInput1" class="form-label"><b>Pilih kendaraan yang ada di
                                layanan Anda.</b>
                            <p class="text-muted">Silahkan centang fasilitas yang ada dan
                                sesuai untuk lahan anda </p>
                        </label>
                    </div>
                    <P style="font-size: 20px"><b>Kendaraan roda 2</b></P>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check" style="font-size:20px">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Motor
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <div class="box text-dark">
                                <div class="wrapper" style="width: 200px">
                                    <span class="minus">-</span>
                                    <span class="num">01</span>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="">harga penitipan perhari </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000"
                            disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check" style="font-size:20px">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Skuter
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <div class="box text-dark">
                                <div class="wrapper" style="width: 250px">
                                    <span class="minus">-</span>
                                    <span class="num">01</span>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-1">
                        <label for="">Masukan harga penitipan </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000" disabled>
                    </div>
                    <P style="font-size: 20px"><b>Kendaraan roda 4</b></P>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check" style="font-size:20px">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Mobil
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <div class="box text-dark">
                                <div class="wrapper" style="width: 200px">
                                    <span class="minus">-</span>
                                    <span class="num">01</span>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  mt-1">
                        <label for="">harga penitipan perhari </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000"
                            disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check" style="font-size:20px">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Truk
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <div class="box text-dark">
                                <div class="wrapper" style="width: 250px">
                                    <span class="minus">-</span>
                                    <span class="num">01</span>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  mt-1">
                        <label for="">harga penitipan perhari </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000" disabled>
                    </div>

                    <a href="/vendor/vendor/Kelola-Kendaraan/layanan_step4"><button type="button"
                            class="btn btn-success col-md-12 mt-3" data-bs-toggle="modal"
                            data-bs-target="#success">Lanjutkan</button><br><br></a>
                </div>
            </div>
        </div>
     
        {{-- modal success --}}
        <div class="modal fade" id="success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <i class="bi bi-check-circle" style="font-size: 80px; color:rgba(40, 181, 91, 0.891)"></i>
                        <p>Berhasil mengajukan layanan!!!</p>
                        <p>Tunggu konfirmasi hingga layanan diterima.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
