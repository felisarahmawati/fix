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
            <div class="">
                <div class="cardBox1">
                    <div class="card1">
                        <div>
                            <a href="/vendor/vendor/Kelola-Kendaraan/layanan_step1" style="text-decoration:none">
                                <div class="cardName1">Kendaraan
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

                    <div class="card2 ">
                        <div>
                            <a href="/vendor/vendor/Kelola_Barang/layanan_step1" style="text-decoration:none">
                                <div class="cardName2">Barang
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


                <div class="container mb-4">
                    <div class="row justify-content-center">
                        <div class="card" style="background-color: #fff; width:80% ">
                            <div class="card-body">
                                <p><b>Tambah layanan penitipan barang!</b>
                                <p class="text-muted">Daftarkan gudang / tempat anda dengan
                                    mengisi data dibawah ini</p><br>
                                </p>
                                <h6><svg xmlns="http://www.w3.org/2000/svg" width="37px" height="37px"
                                        fill="currentColor"class="bi bi-1-circle-fill p-2" viewBox="0 0 16 16"
                                        style="color:rgb(255, 221, 0)">
                                        <path fill-rule="evenodd"
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
                                    </svg><b>Alamat lahan gudang</b></h6>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="ps-4">Untuk mengatur lokasi dan detail alamat gudang Anda</p>
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
                                        </svg><b>Jenis barang</b></h6>
                                    <div class="row">
                                        <div class="col-md-10 ">
                                            <p class="ps-4">Mengatur jenis barang yang dititipkan</p>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <i class="bi bi-check2-square"
                                                style="font-size: 37px; color:rgb(98, 212, 133);"></i>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <p><i class="bi bi-check-circle-fill p-2 mt-5"
                                        style="font-size: 25px; color:rgb(98, 212, 133);"></i>Dengan mengisi data ini, maka
                                    Anda setuju
                                    dengan <b>Syarat & Ketentuan Umum </b>
                                    Kebijakan Privasi</p>
                                <a href="/vendor/vendor/Kelola_Barang/setelah_input"><button type="button"
                                        class="btn btn-success col-md-12 mt-3" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalearning">Selanjutnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--modal selesai-->
        <div class="modal fade" id="exampleModalearning" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="text-center mt-4 mb-4">
                        <img src="{{ asset('assets/img/centanghijauuu.png') }}" alt="centangHijau" style="width: 100px; height:100px">
                        <p class="congratulations" style="padding-top: 20px"><b>Selamat!!!<b></p>
                        <h5 class="berhasil" style="padding-top: 5px; color: grey">Selamat anda telah berhasil
                            membuat layanan.!</h5>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
