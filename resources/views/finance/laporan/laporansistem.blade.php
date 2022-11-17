@extends('finance.finance.dashboard_finance')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="cardHeader-title">
                <h2>Laporan Keuangan Sistem</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">

                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="cardHeader">
                                <div class="cardHeader">
                                    <!-- Search -->
                                    <div class="col-3 mb-3">
                                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Dari Tanggal</p>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-3 mb-3" style="margin-left: 35px">
                                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Sampai Tanggal</p>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-3 mb-3" style="margin-left: 35px">
                                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Periode</p>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Perminggu</option>
                                            <option value="1">Perbulan</option>
                                            <option value="2">Pertahun</option>
                                        </select>
                                    </div>
                                    <div class="col-2 mt-4" style="margin-left: 255px">
                                        <button type="button" class="btn btn-success">Tampilkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">

                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="cardHeader">
                                <div class="cardHeader">
                                    <dl class="row">
                                        <dt class="col-sm-3">Dari Tanggal</dt>
                                        <dd class="col-sm-9">: 1 Oktober 2022</dd>

                                        <dt class="col-sm-3">Sampai Tanggal</dt>
                                        <dd class="col-sm-9">: 31 Oktober 2022</dd>

                                        <dt class="col-sm-3">Periode</dt>
                                        <dd class="col-sm-9">: Perbulan</dd>
                                    </dl>

                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-block mb-3">
                                <button class="btn btn-success" type="button"><i class='bx bx-file p-1'></i>Cetak PDF</button>
                                <button class="btn btn-success" type="button"><i class="bi bi-file-excel p-1"></i>Export Excel</button>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Id</td>
                                        <td>Tanggal</td>
                                        <td>Pemasukan</td>
                                        <td>Potongan</td>
                                        <td>Jumlah Potongan</td>
                                        <td>Saldo</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>214213123123</td>
                                        <td>29/10/2022</td>
                                        <td>Rp 3.000.000</td>
                                        <td>10%</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 100.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>214213123123</td>
                                        <td>29/10/2022</td>
                                        <td>Rp 3.000.000</td>
                                        <td>10%</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 100.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>214213123123</td>
                                        <td>29/10/2022</td>
                                        <td>Rp 3.000.000</td>
                                        <td>10%</td>
                                        <td>Rp 50.000</td>
                                        <td>Rp 100.000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-1" style="margin-left: 10px">
                                    <p>Total</p>
                                </div>
                            </div>
                            <dl class="row" style="margin-left: 10px">
                                <dt class="col-sm-3">Pemasukan</dt>
                                <dd class="col-sm-9">Rp 3.000.000</dd>

                                <dt class="col-sm-3">Pengeluaran</dt>
                                <dd class="col-sm-9">Rp 1.600.000</dd>

                                <dt class="col-sm-3">Saldo</dt>
                                <dd class="col-sm-9">Rp 1.400.000</dd>
                            </dl>
                        </div>
                    </div>
                </div>
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
