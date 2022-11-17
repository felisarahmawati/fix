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

        <!-- top nav -->
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="/data/data_order/kendaraan" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>

            <div class="card2">
                <div>
                    <a href="/data/data_order/bangunan" style="text-decoration:none">
                        <div class="cardName2">Bangunan</div>
                    </a>
                </div>
            </div>

            <div class="card1">
                <div>
                    <a href="/data/data_order/barang" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>

            <div class="card1">
                <div>
                    <a href="/data/data_order/pickup" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- data list -->
        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Data Orderan Bangunan</h2>
                </div>
                <table class="table-borderless mt-3 w-auto">
                    <thead class="text-start">
                        <tr>
                            <td>Nama</td>
                            <td>No Hp</td>
                            <td>Jenis Bangunan</td>
                            <td>Metode Pembayaran</td>
                            <td>Pick Up</td>
                            <td>Total Pembayaran</td>
                            <td>Alamat</td>
                        </tr>
                    </thead>
                    <tbody class="text-start">
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
