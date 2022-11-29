@extends('vendor.vendor.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Kelola {{ $slug }}</h2>
            </div>
        </div>
        <div class="cardBox1">
            @foreach ($vendor_jasa as $item)
            <div class="{{ $item->jasaLayanan->jasa == $slug ? 'card2' : 'card1' }}">
                <a href="{{ url('/vendor/kelola/'.$item->jasaLayanan->jasa.'/layanan_step1') }}" style="text-decoration:none">
                    <div class="{{ $item->jasaLayanan->jasa == $slug ? 'cardName2' : 'cardName1' }}">
                        {{ $item->jasaLayanan->jasa }}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @if($slug == "Kendaraan")

        @include("vendor.vendor.kelola_jasa.kendaraan.v_detail_kendaraan")

        @elseif($slug == "Bangunan")

        @include("vendor.vendor.kelola_jasa.bangunan.v_detail_bangunan")

        @elseif($slug == "Barang")

        @include("vendor.vendor.kelola_jasa.barang.v_detail_barang")

        @elseif($slug == "Pickup")

        @include("vendor.vendor.kelola_jasa.pickup.v_detail_pickup")

        @else
        -
        @endif
    </div>
</section>
@endsection
