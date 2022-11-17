@extends('finance.finance.dashboard_finance')
@section('content')
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
        </div>

        <div class="cardBox" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 0,-</div>
                    <div class="cardName">Pemasukan hari ini</div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 0,-</div>
                    <div class="cardName">Pemasukan bulan ini</div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 0,-</div>
                    <div class="cardName">Pemasukan tahun ini</div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 0,-</div>
                    <div class="cardName">Pemasukan Keseluruhan</div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 0,-</div>
                    <div class="cardName">Pengeluran hari ini</div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 0,-</div>
                    <div class="cardName">Pengeluran minggu ini</div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 0,-</div>
                    <div class="cardName">Pengeluran tahun ini</div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">Rp 0,-</div>
                    <div class="cardName">Pengeluran keseluruhan</div>
                </div>
            </div>
        </div>

         <!-- Chart -->
         <div class="graphBox align-center">
            <div class="card border-0 w-auto">
                <canvas id="myChart"></canvas>
            </div>
            <div class="card border-0 w-auto">
                <canvas id="earning"></canvas>
            </div>
            {{-- <div class="card border-0 w-auto">
                <canvas id="earning"></canvas>
            </div> --}}
        </div>
    </div>
</section>
@endsection
