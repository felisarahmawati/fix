<?php

namespace App\Http\Controllers\Akun;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function post_login(Request $request)
    {
        $req = $this->validate($request, [
            "email" => "required",
            "password" => "required"
        ]);

        $password = $request->password;
        $user = User::where("email", $request->email)->first();

        if ($user) {
            $cek_password = Hash::check($password, $user->password);

            if (!$cek_password) {
                return back();
            } else {
                if ($user->status == 0) {
                    return back()->with('gagal', 'Ups, Akun sedang diproses. Mohon tunggu sebentar!');
                } else {
                    Auth::attempt($req);
                    if ($user->id_role == 1) {
                        return redirect()->intended("/superadmin/dashboard");
                    } else if ($user->id_role == 5) {
                        return redirect("/admin/dashboard_admin");
                    } else if ($user->id_role == 3) {
                        return redirect("/finance/dashboard_finance");
                    } else if ($user->id_role == 4) {
                        return redirect("/vendor/dashboard_vendor");
                    } else if ($user->id_role == 2) {
                        return redirect("/user/home");
                    } else {
                        return back();
                    }
                }
            }
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function buat_akun()
    {
        $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/34.json");

        $kota_kab = $response->json();

        return view("auth.buat_akun", compact('kota_kab'));
    }

    public function post_register(Request $request)
    {
        // dd($request->all());
        $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/34.json");

        $kota_kab = $response->json();

        foreach ($kota_kab as $desa) {
            if ($desa["id"] == $request->id_kota_kab) {
                $nama_kab = $desa["name"];
                $id = $desa["id"];
            }
        }

        $res_kelurahan = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/districts/".$id.".json");

        $kelurahan = $res_kelurahan->json();

        foreach ($kelurahan as $kel) {
            if ($kel["id"] == $request->id_kecamatan) {
                $kecamatan = $kel["name"];
            }
        }

        if($request->password != $request->password) {
            return back();
        } else {
            User::create([
                "name" => $request->name,
                "tgl_lahir" => $request->tgl_lahir,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "alamat" => $request->alamat,
                "kelurahan" => $request->id_kelurahan,
                "kecamatan" => $kecamatan,
                "kota_kab" => $nama_kab,
                "id_kodepos" => $request->id_kodepos,
                "no_telp" => $request->no_telp,
                "id_role" => 2,
                "status" => 0,
            ]);

            return redirect("/login");
        }
    }

    public function kecamatan(Request $request)
    {
        $id_kota_kab = $request->data;
        $kec_kecamatan = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/districts/".$id_kota_kab.".json");
        $kecamatan = $kec_kecamatan->json();
        foreach ($kecamatan as $kec) {
            echo "<option value='".$kec["id"]."'>".$kec["name"]."</option>";
        }
    }

    public function kelurahan(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;
        $kel_kelurahan = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/villages/".$id_kecamatan.".json");
        $kelurahan = $kel_kelurahan->json();
        foreach ($kelurahan as $kel) {
            echo "<option value='".$kel["name"]."'>".$kel["name"]."</option>";
        }
    }
}
