@extends('finance.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="cardHeader-title">
                <h2>Detail Transaksi</h2>
            </div>
        </div>
        <div class="cardBox1">
            <div class="card2">
                <div>
                    <a href="#" style="text-decoration:none">
                        <div class="cardName2">User
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="#" style="text-decoration:none">
                        <div class="cardName1">Vendor
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="cardHeader3">
                                <!-- Search -->
                                <div class="search ml-2" data-aos="fade-left" data-aos-duration="1000">
                                    <label>
                                        <input type="text" placeholder="Cari Disini">
                                        <ion-icon name="search-outline"></ion-icon>
                                    </label>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Kode Transaksi</td>
                                        <td>Transaksi</td>
                                        <td>Tanggal</td>
                                        <td>Pengeluaran</td>
                                        <td>Saldo</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PT cinta sejati</td>
                                        <td>121324</td>
                                        <td>Rp50.000.000</td>
                                        <td>18.00 WIB</td>
                                        <td>pending</td>
        
                                        <td class="td" style="size: 30px;">
                                            {{-- <button class="btnedit">
                                                <i class='bx bx-edit'></i>
                                            </button> --}}
        
                                            {{-- <button class="btndelete">
                                                <i class='bx bx-trash'></i>
                                            </button> --}}
        
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
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
</section>
@endsection

@section('java')
<!-- DataTables -->
<script src="{!! asset('bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
<script type="text/javascript">
    $(function () {
        $('#example1').DataTable()
    })
</script>
@endsection
