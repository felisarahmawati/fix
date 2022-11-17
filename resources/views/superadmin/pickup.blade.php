@extends("layouts_super.main")
@section("content")
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Orderan</h2>
            </div>
        </div>

        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="/superadmin/data/order" style="text-decoration:none">
                        <div class="cardName1">Kendaraan
                        </div>
                    </a>
                </div>
            </div>

            <div class="card1">
                <div>
                    <a href="/superadmin/data/order=bangunan" style="text-decoration:none">
                        <div class="cardName1">Bangunan
                        </div>
                    </a>
                </div>
                <!-- <div class="iconBx1">
                    <ion-icon name="cube-outline"></ion-icon>
                </div> -->
            </div>

            <div class="card1">
                <div>
                    <a href="/superadmin/data/order=barang" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
                <!-- <div class="iconBx1">
                    <ion-icon name="home-outline"></ion-icon>
                </div> -->
            </div>
            <div class="card2">
                <div>
                    <a href="/superadmin/data/order=pickup" style="text-decoration:none">
                        <div class="cardName2">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- data list -->
        <div class="details1 w-auto">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Data Orderan Pick Up</h2>
                    <a href="#" class="btn btn-thema">View All</a>
                </div>
                <table class="table-borderless mt-3 w-auto">
                    <thead>
                        <tr>
                            <td class="text-start">Nama</td>
                            <td class="text-start">No Hp</td>
                            <td class="text-start">Jenis Kendaraan</td>
                            <td class="text-start">Metode Pembayaran</td>
                            <td class="text-start">Pick Up</td>
                            <td class="text-start">Total Pembayaran</td>
                            <td class="text-start">Alamat</td>
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
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                        <tr>
                            <td>Robecca Howard</td>
                            <td>(307) 555 0133</td>
                            <td>Mobil Pick up</td>
                            <td>Transfer Bank</td>
                            <td>Yes</td>
                            <td>IDR 600.000</td>
                            <td>2118 Thornridge cir. Syracuse connecticut 35624</td>
                            <!-- <td><span class="status return">Return</span></td> -->
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- New Customer -->

            <!-- New Customer -->

        </div>
    </div>
</section>
@endsection
