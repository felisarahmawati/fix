@extends('layouts_finance.main')
@section('content')
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="home-content" id="liveToastBtn">
                <i class='bx bx-bell' style="font-size: 35px; cursor: pointer; margin-top:13px; margin-left:1650%"></i>
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
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <strong class="me-auto">Notifikasi Baru</strong>
            <small>11 menit yang lalu</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Layanan mu akan segera selesai
          </div>
        </div>
    </div>
    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')
        if(toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                const toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
            })
        }
    </script>
</section>
@endsection
