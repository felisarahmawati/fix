@extends('finance.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="cardHeader-title">
                                <h2>Vendor Konfirmasi Penarikan</h2>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Nama user</td>
                                        <td>ID</td>
                                        <td>Total</td>
                                        <td>Jam</td>
                                        <td>Jumlah</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Samantha william</td>
                                        <td>T120917243434</td>
                                        <td>Rp 500.000</td>
                                        <td>20:59 WIB</td>
                                        <td>200.000</td>
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
                                        <td>Kevin Andreson</td>
                                        <td>T120917243434</td>
                                        <td>Rp 500.000</td>
                                        <td>20:59 WIB</td>
                                        <td>200.000</td>
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
</section>
@endsection
