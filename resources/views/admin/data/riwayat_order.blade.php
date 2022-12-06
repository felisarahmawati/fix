@extends('layouts_admin.main')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>

        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Riwayat Order</h2>
                </div>
                <table class="table-borderless">
                    <thead>
                        <tr>
                            <td>ID Transaksi</td>
                            <td>Jenis Layanan</td>
                            <td>jumlah</td>
                            <td>Tanggal Penitipan</td>
                            <td>Tanggal Kembali</td>
                            <td>Vendor</td>
                            <td>Harga</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>KD123</td>
                            <td>Kendaraan</td>
                            <td>2</td>
                            <td>10-10-2022</td>
                            <td>12-10-2022</td>
                            <td>Parkir Aman</td>
                            <td>Rp 40.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
