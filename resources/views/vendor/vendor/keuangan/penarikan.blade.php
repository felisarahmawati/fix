{{-- @extends('Layouts.dashboard_vendor')
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
        
        <div class="cardBox" data-aos="fade-up" data-aos-delay="100">
          

            <div class="card border-0" >
                <div class="card-body">
                    <div class="numbers">230.000</div>
                    <div class="cardName">Pemasukan</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <a href="/vendor/pemasukan"><ion-icon name="archive-outline" ></ion-icon></a>
                </div>
            </div>
                <div class="card border-0" style="background-color:#00B56A;">
                    <div class="card-body">
                        <div class="numbers" style="color:white">Rp200.000</div>
                        <div class="cardName" style="color:white">Penarikan</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                       <a href="/vendor/penarikan"><ion-icon name="browsers" style="color:white"></ion-icon></a> 
                    </div>
                </div>

            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp4.000.000</div>
                    <div class="cardName">Saldo</div>
                </div>
                <div class="iconBx card-img-overlay">
                    <a href="/vendor/saldo"><ion-icon name="card"></ion-icon></a>
                </div>
            </div>
        </div>
   
    
        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="rincian d-inline mb-2">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success fw-bold px-2 shadow float-end"><a href="/finance/DataPenarikan/konfirmasi">Konfirmasi</a></button>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>ID transaksi</td>
                                        <td>Tanggal</td>
                                        <td>Rek penerima dana</td>
                                        <td>Jumlah Dana</td>
                                        <td>Keterangan</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Penarikan dana berhasil</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Di proses oleh bank</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>gagal</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Penatikan dana berhasil</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Gagal</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>Penarikan dana berhasil</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1234456789090</td>
                                        <td>23/08/22</td>
                                        <td>123456763865322</td>
                                        <td>Rp3.300.000</td>
                                        <td>penarikan dana berhasil</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    </div>
     
    {{-- modal detail --}}
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
          <div class="modal-content" style="width:110%">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-end">
                    27/08/2022
                    08:30:00
                </div>

        <div class="row mt-3 text-muted">
            <div class="col-md-6">
                ID Transaksi 
            </div>
            <div class="col-md-6 text-end">
                1234567890900
            </div>  
        </div>   
           
        <div class="row mt-3 text-muted">
            <div class="col-md-4">
                rekening penerima dana
            </div>
            <div class="col-md-8 text-end">
                98475906527236
                <p>Bank Mandiri</p>
            </div>
        </div>
        <div class="row mt-2 mb-3 text-muted">    
            <div class="col-md-6">
                Keterangan
            </div>
            <div class="col-md-6 text-end">
                Penarikan dana Berhasil
            </div>
        </div><hr>
        <div class="row mt-3 mb-3" style="font-size:25px; color:#00B56A">
            <div class="col-md-6">
                Total Penarikan 
            </div >
            <div class="col-md-6 text-end">
                Rp3.300.000
            </div>
        </div>
            </div>
          
          </div>
        </div>
      </div>
</section>
@endsection --}}
