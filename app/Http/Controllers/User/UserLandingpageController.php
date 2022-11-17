<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserLandingpageController extends Controller
{
    public function home()
    {
        return view("user.landingpage.home");
    }

    public function kontak()
    {
        return view("user.landingpage.kontak");
    }

    public function tentang()
    {
        return view("user.landingpage.tentang");
    }

    public function layanan()
    {
        return view("user.layanan.layanan");
    }
    public function kendaraan()
    {
        return view("user.layanan.kendaraan");
    }
    // public function barang()
    // {
    //     return view("user.layanan.barang");
    // }
    // public function bangunan()
    // {
    //     return view("user.layanan.bangunan");
    // }
    public function d_kendaraan()
    {
        return view("user.layanan.detail_layanan.kendaraan");
    }
    // public function d_bangunan()
    // {
    //     return view("user.layanan.detail_layanan.bangunan");
    // }
    // public function d_barang()
    // {
    //     return view("user.layanan.detail_layanan.barang");
    // }

    public function i_pembayaran()
    {
        return view("user.pemesanan.info_pembayaran");
    }

    public function struk()
    {
        return view("user.pemesanan.struk");
    }

    public function baru()
    {
        return view("user.pemesanan.baru");
    }


    public function o_progress()
    {
        return view("user.pemesanan.history.on_progress");
    }

    public function l_progress()
    {
        return view("user.pemesanan.history.last_progress");
    }

    public function pmsnB()
    {
        return view('user.pemesanan.pemesananB');
    }

    public function pmsnBarang()
    {
        return view('user.pemesanan.pemesananBarang');
    }

    public function pembayaran()
    {
        return view('user.pemesanan.pembayaran');
    }

    public function kebijakan()
    {
        return view("user.profil.kebijakanprivasi");
    }

    public function tentangtitipsini()
    {
        return view("user.profil.tentang.tentang");
    }

    public function bantuan()
    {
        return view("user.profil.bantuan.bantuan");
    }

    public function jwb1()
    {
        return view('user.profil.bantuan.Jawaban1');
    }

    public function jwb2()
    {
        return view('user.profil.bantuan.Jawaban2');
    }

    public function jwb3()
    {
        return view('user.profil.bantuan.Jawaban3');
    }

    public function jwb4()
    {
        return view('user.profil.bantuan.Jawaban4');
    }

    public function jwb5()
    {
        return view('user.profil.bantuan.Jawaban5');
    }

    public function subbaru()
    {
        return view('user.sub.baru');
    }

    public function subbangunan()
    {
        return view('user.sub.bangunan');
    }

    public function subbarang()
    {
        return view('user.sub.barang');
    }

    public function katdetail()
    {
        return view('user.kategori.detail');
    }

    public function katbangunan()
    {
        return view('user.kategori.bangunan');
    }

    public function katbarang()
    {
        return view('user.kategori.barang');
    }
}
