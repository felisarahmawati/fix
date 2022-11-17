@extends("layouts_super.main")
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Data Pengambilan</h2>
            </div>
        </div>
        <div class="details3">
            <div class="recentOrders3">
                <div class="cardHeader">
                    <h2>Data Transaksi Pengambilan Uang</h2>
                    <div class="card2">
                        <div>
                            <a href="/superadmin/vendor/data_trans=berlangsung" style="text-decoration:none">
                                <div class="cardName2">Berlangsung
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card1">
                        <div>
                            <a href="/superadmin/vendor/data_trans=selesai" style="text-decoration:none">
                                <div class="cardName1">Selesai
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Card Data -->
        <div iv class="cardBox01">
            <div class="card01">
                <div class="jml fw-bold">
                    <span>ID User :</span>
                    <span class="nomor">38472938</span>
                    <span class="pen fw-bold text-black rounded-pill px-4 p-1 float-end"> Pending</span>
                    <div class="jud">
                        <span>Jumlah Pengambilan</span>
                    </div>
                    <div class="jm" style="margin-top: 20px;">
                        <span>Jumlah</span>
                        <span class="pl"> Periode Pencairan Dana</span>
                    </div>

                    <div class="harga">
                        <span class="hrg">Rp 10.000.000</span>
                        <span class="periode"> 2 Hari</span>
                    </div>

                    <div class="bt mt-3 " >
                        <button type="button" class="btn btn-thema fw-bold rounded-pill px-5">Setuju</button>
                        <button type="button" class="btn btn-tolak fw-bold rounded-pill px-5 ms-4">Tolak</button>
                        <div class="rincian d-inline">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">Rincian</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel">Data Pengambilan Uang</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label class="label">User ID</label>
                <input class="form-control" type="text" id="id" placeholder="2374627">
                <label class="label">Nama</label>
                <input class="form-control" type="text" id="nama" placeholder="Ahmad Arif">
                <label class="label">Jumlah Dana</label>
                <input class="form-control" type="text" id="dana" placeholder="Rp 10,000,000">
                <label class="label mb-2">Status</label>
                <select class="form-select" id="status">
                    <option value="pending">Pending</option>
                    <option value="disetujui">Disetujui</option>
                    <option value="ditolak">Ditolak</option>
                </select>
            </div>
            <div class="modal-footer d-md-block">
                <button type="button" class="btn btn-primary btn-sm">SETUJU</button>
                <button type="button" class="btn btn-danger btn-sm">TIDAK</button>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
