<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function dashboard_ven()
    {
        return view("vendor.vendor.dashboard_vendor");
    }

    public function index()
    {
        return view('vendor.vendor.homelagi');
    }

    public function Notifikasi()
    {
        return view('vendor.vendor.profilevendor.notifikasi');
    }

    public function Setting()
    {
        return view('vendor.vendor.setting');
    }

    public function OrderanBaru()
    {
        return view('vendor.vendor.order.kendaraan.orderan_baru');
    }

    public function OrderanBarubangunan()
    {
        return view('vendor.vendor.order.bangunan.orderan_bangunan');
    }

    public function OrderanBarubarang()
    {
        return view('vendor.vendor.order.barang.orderan_barang');
    }

    public function OrderanBarupickup()
    {
        return view('vendor.vendor.order.pickup.orderan_pickup');
    }

    public function RincianBaru()
    {
        return view('vendor.vendor.order.kendaraan.rincian_baru');
    }

    public function ProfileVendor()
    {
        return view('vendor.profilevendor.profile_vendor');
    }

    public function EditAlamat()
    {
        return view('vendor.vendor.Profile.edit_alamatvendor');
    }

    public function KebijakanPrivasi()
    {
        return view('vendor.vendor.profilevendor.Kebijakan_privasi');
    }

    public function KetentuanLayanan()
    {
        return view('vendor.vendor.profilevendor.Ketentuan_layanan');
    }

    public function PusatBantuan()
    {
        return view('vendor.vendor.profilevendor.Pusat_bantuan');
    }

    public function aturalamatken()
    {
        return view('vendor.vendor.Kelola-Kendaraan.atur_alamat');
    }

    public function rincian()
    {
        return view('vendor.vendor.Kelola-Kendaraan.Rincian_lahan');
    }

    public function stlinput()
    {
        return view('vendor.vendor.Kelola-Kendaraan.setelah_input');
    }

    public function lyn1()
    {
        return view('vendor.vendor.Kelola-Kendaraan.layanan_step1');
    }

    public function lyn2()
    {
        return view('vendor.vendor.Kelola-Kendaraan.layanan_step2');
    }

    public function lyn4()
    {
        return view('vendor.vendor.Kelola-Kendaraan.layanan_step4');
    }

    public function lynbangunan1()
    {
        return view('vendor.vendor.Kelola-Bangunan.layanan_step2');
    }

    public function lynbangunan2()
    {
        return view('vendor.vendor.Kelola-Bangunan.layanan_step2');
    }

    public function lynbangunan3()
    {
        return view('vendor.vendor.Kelola-Bangunan.layanan_step3');
    }

    public function stlinputbangunan()
    {
        return view('vendor.vendor.Kelola-Bangunan.setelah_input');
    }

    public function historybaru()
    {
        return view('vendor.vendor.history.kendaraan.historybaru');
    }

    public function lynbarang1()
    {
        return view('vendor.vendor.Kelola_Barang.layanan_step1');
    }

    public function lynbarang2()
    {
        return view('vendor.vendor.Kelola_Barang.layanan_step2');
    }

    public function lynbarang4()
    {
        return view('vendor.vendor.Kelola_Barang.layanan_step4');
    }

    public function stlinputbarang()
    {
        return view('vendor.vendor.Kelola_Barang.setelah_input');
    }

    public function aturalamatbrg()
    {
        return view('vendor.vendor.Kelola_Barang.atur_alamat');
    }

    public function lynpickup1()
    {
        return view('vendor.vendor.Kelola-Pickup.layanan_step1');
    }

    public function lynpickup2()
    {
        return view('vendor.vendor.Kelola-Pickup.layanan_step2');
    }

    public function lynpickup3()
    {
        return view('vendor.vendor.Kelola-Pickup.layanan_step3');
    }

    public function aturalamatpickup()
    {
        return view('vendor.vendor.Kelola-Pickup.atur_alamat');
    }

    public function stlinputpickup()
    {
        return view('vendor.vendor.Kelola-Pickup.setelah_input');
    }

    //KEUANGAN
    public function pemasukan()
    {
        return view('vendor.vendor.keuangan.pemasukan');
    }

    public function penarikan()
    {
        return view('vendor.vendor.keuangan.penarikan');
    }

    public function penghasilan()
    {
        return view('vendor.vendor.keuangan.penghasilan');
    }

    public function tarikdana()
    {
        return view('vendor.vendor.keuangan.tarikdana');
    }

    public function saldo()
    {
        return view('vendor.vendor.keuangan.saldo');
    }

    public function rekening()
    {
        return view('vendor.vendor.keuangan.rekening');
    }

    public function historypenarikan()
    {
        return view('vendor.vendor.keuangan.history_penarikan');
    }

    public function jawaban1()
    {
        return view('vendor.vendor.profilevendor.Jawaban1');
    }

    public function jawaban2()
    {
        return view('vendor.vendor.profilevendor.Jawaban2');
    }

    public function jawaban3()
    {
        return view('vendor.vendor.profilevendor.Jawaban3');
    }

    public function jawaban4()
    {
        return view('vendor.vendor.profilevendor.Jawaban4');
    }

    public function jawaban5()
    {
        return view('vendor.vendor.profilevendor.Jawaban5');
    }
    public function jawaban6()
    {
        return view('vendor.vendor.profilevendor.Jawaban6');
    }

    //LENGKAPI DATA DIRI
    public function lengkapidata()
    {
        return view('vendor.vendor.login.datadiri');
    }
}
