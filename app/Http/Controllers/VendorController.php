<?php

namespace App\Http\Controllers;

use App\Models\Master\Jasa\JasaLayanan;
use App\Models\Master\Jasa\PesanLayanan;
use App\Models\Master\Paket\JenisPaket;
use App\Models\Master\Paket\Paket;
use App\Models\Master\Vendor\KelolaLayanan;
use App\Models\Master\Vendor\VendorJasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class VendorController extends Controller
{
    public function dashboard_ven()
    {
        return view("vendor.vendor.dashboard_vendor");
    }

    public function vendor_layanan($slug)
    {

        $data["session"] = session()->get("kelola_layanan");

        $data["id"] = session()->get("id");

        $data["vendor_jasa"] = VendorJasa::where("user_id", Auth::user()->id)->orderBy("created_at", "DESC")->get();
        $data["slug"] = $slug;

        $jasa = JasaLayanan::where("jasa", $slug)->first();

        $data["step1"] = KelolaLayanan::where("user_id", Auth::user()->id)
            ->where("jasa_layanan_id", $jasa->id)
            ->where("status", "step1")->first();

        $data["step2"] = KelolaLayanan::where("user_id", Auth::user()->id)
            ->where("jasa_layanan_id", $jasa->id)
            ->where("status", "step2")->first();

        $data["paket"] = Paket::get();

        return view("vendor.vendor.kelola_jasa.v_index", $data, compact("jasa"));
    }

    public function vendor_layanan_dua($slug)
    {
        echo "Ada";
    }

    public function vendor_atur_alamat($slug)
    {
        $data["vendor_jasa"] = VendorJasa::where("user_id", Auth::user()->id)->orderBy("created_at", "DESC")->get();
        $data["slug"] = $slug;

        $data["data_jasa"] = JasaLayanan::where("jasa", $slug)->first();

        $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json");

        $provinsi = $response->json();

        return view("vendor.vendor.kelola_jasa.v_alamat", $data, compact('provinsi'));
    }

    public function ambil_kota_kab(Request $request)
    {
        $id_kota_kab = $request->data;

        $res_kota_kab = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/".$id_kota_kab.".json");

        $data = $res_kota_kab->json();

        foreach ($data as $d) {
            echo "<option value=".$d["id"].">".$d["name"]."</option>";
        }
    }

    public function ambil_kecamatan(Request $request)
    {
        $id_kecamatan = $request->data;

        $res_kecamatan = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/districts/".$id_kecamatan.".json");

        $data = $res_kecamatan->json();

        foreach ($data as $d) {
            echo "<option value=".$d["id"].">".$d["name"]."</option>";
        }
    }

    public function kelola_layanan(Request $request, $slug)
    {
        $jasa = JasaLayanan::where("id", $slug)->first();

        $kl = new KelolaLayanan();
        $kl->jasa_layanan_id = $slug;
        $kl->user_id = Auth::user()->id;
        $kl->alamat = $request->alamat;
        $kl->provinsi = $request->provinsi;
        $kl->kota_kab = $request->kota_kab;
        $kl->kecamatan = $request->kecamatan;
        $kl->catatan = $request->catatan;
        $kl->panjang = $request->panjang;
        $kl->lebar = $request->lebar;
        $kl->url_link = $request->url_link;
        $kl->status = "step1";

        $kl->save();

        $var = $kl->id;

        $session = session()->put("kelola_layanan", $var);

        return redirect("/vendor/kelola/".$jasa->jasa."/layanan_step1")->with($session);
    }

    public function vendor_post_layanan(Request $request, $slug)
    {
        $jasa = JasaLayanan::where("jasa", $slug)->first();

        foreach ($request->nama_paket as $d)
        {
            PesanLayanan::create([
                "user_id" => Auth::user()->id,
                "jasa_layanan_id" => $jasa->id,
                "jenis_paket_id" => $d,
                "kelola_layanan_id" => $request->kelola_layanan_id,
                "qty" => 1,
                "status" => "Pending"
            ]);
        }

        KelolaLayanan::where("id", $request->kelola_layanan_id)->update([
            "status" => "step2"
        ]);

        session()->forget("kelola_layanan");

        $id_kelola_layanan = session()->put("id", $request->kelola_layanan_id);

        return back()->with($id_kelola_layanan);
    }

    public function verifikasi($slug, $id)
    {
        KelolaLayanan::where("id", $id)->update([
            "status" => "verifikasi"
        ]);

        session()->forget("id");

        return redirect("/vendor/kelola/" . $slug . "/detail");
    }

    public function detail_layanan($slug)
    {
        $data["vendor_jasa"] = VendorJasa::where("user_id", Auth::user()->id)->orderBy("created_at", "DESC")->get();

        $data["slug"] = $slug;

        $jasa = JasaLayanan::where("jasa", $slug)->first();

        $data["pesan_layanan"] = PesanLayanan::where("user_id", Auth::user()->id)->where("jasa_layanan_id", $jasa->id)->get();

        return view("vendor.vendor.kelola_jasa.v_detail", $data);
    }

    //LAYANAN BANGUNAN
    public function vendor_layanan_bangunan($slug)
    {
        if (session('kelola_layanan_bangunan')) {
            $data["kelola_layanan_bangunan_id"] = session('kelola_layanan_bangunan');
        } else if (session('id')) {
            $data["id"] = session("id");
        }

        $data["vendor_jasa"] = VendorJasa::where("user_id", Auth::user()->id)->orderBy("created_at", "DESC")->get();
        $data["slug"] = $slug;

        $jasa = JasaLayanan::where("jasa", $slug)->first();

        $data["step1"] = KelolaLayanan::where("user_id", Auth::user()->id)
            ->where("jasa_layanan_id", $jasa->id)
            ->where("status", "step1")->first();

        $data["step2"] = KelolaLayanan::where("user_id", Auth::user()->id)
            ->where("jasa_layanan_id", $jasa->id)
            ->where("status", "step2")->first();

        $data["paket"] = Paket::get();

        return view("vendor.vendor.kelola_jasa.v_index", $data, compact("jasa"));
    }

    public function kelola_layanan_bangunan(Request $request, $slug)
    {
        $jasa = JasaLayanan::where("id", $slug)->first();

        $bangunan = new KelolaLayanan();
        $bangunan->jasa_layanan_id = $slug;
        $bangunan->user_id = Auth::user()->id;
        $bangunan->alamat = $request->alamat;
        $bangunan->provinsi = $request->provinsi;
        $bangunan->kota_kab = $request->kota_kab;
        $bangunan->kecamatan = $request->kecamatan;
        $bangunan->catatan = $request->catatan;
        $bangunan->url_link = $request->url_link;
        $bangunan->status = "step1";

        $bangunan->save();

        $var = $bangunan->id;

        return redirect("/vendor/kelola/".$jasa->jasa."/layanan_step1")->with(["kelola_layanan" => $var]);
    }

    public function vendor_post_layanan_bangunan(Request $request, $slug)
    {
        $jasa = JasaLayanan::where("jasa", $slug)->first();

        foreach ($request->nama_paket as $dx)
        {
            PesanLayanan::create([
                "user_id" => Auth::user()->id,
                "jasa_layanan_id" => $jasa->id,
                "jenis_paket_id" => $dx,
                "kelola_layanan_id" => $request->kelola_layanan_id,
                "qty" => 1,
                "status" => "Pending"
            ]);
        }

        KelolaLayanan::where("id", $request->kelola_layanan_id)->update([
            "status" => "step2"
        ]);

        return back()->with(["id" => $request->kelola_layanan_id]);
    }

    //BARANG
    public function vendor_layanan_barang($slug)
    {
        if (session('kelola_layanan_barang')) {
            $data["kelola_layanan_barang_id"] = session('kelola_layanan_barang');
        } else if (session('id')) {
            $data["id"] = session("id");
        }

        $data["vendor_jasa"] = VendorJasa::where("user_id", Auth::user()->id)->orderBy("created_at", "DESC")->get();
        $data["slug"] = $slug;

        $jasa = JasaLayanan::where("jasa", $slug)->first();

        $data["step1"] = KelolaLayanan::where("user_id", Auth::user()->id)
            ->where("jasa_layanan_id", $jasa->id)
            ->where("status", "step1")->first();

        $data["step2"] = KelolaLayanan::where("user_id", Auth::user()->id)
            ->where("jasa_layanan_id", $jasa->id)
            ->where("status", "step2")->first();

        $data["paket"] = Paket::get();

        return view("vendor.vendor.kelola_jasa.v_index", $data, compact("jasa"));
    }

    public function kelola_layanan_barang(Request $request, $slug)
    {
        $jasa = JasaLayanan::where("id", $slug)->first();

        $brg = new KelolaLayanan();
        $brg->jasa_layanan_id = $slug;
        $brg->user_id = Auth::user()->id;
        $brg->alamat = $request->alamat;
        $brg->provinsi = $request->provinsi;
        $brg->kota_kab = $request->kota_kab;
        $brg->kecamatan = $request->kecamatan;
        $brg->catatan = $request->catatan;
        $brg->url_link = $request->url_link;
        $brg->status = "step1";

        $brg->save();

        $var = $brg->id;

        return redirect("/vendor/kelola/".$jasa->jasa."/layanan_step1")->with(["kelola_layanan" => $var]);
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
