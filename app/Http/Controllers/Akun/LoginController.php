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
        return view("auth.buat_akun");
    }

    public function post_register(Request $request)
    {
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "no_telp" => $request->no_telp,
            "password" => bcrypt($request->password)
        ]);

        session()->put("id", $user["id"]);
        session()->put("nama", $user["name"]);

        return redirect("/complete-data-personal");
    }

    public function post_complete_data_personal(Request $request)
    {
        User::where("id", $request->id_user)->update([
            "no_ktp" => $request->no_ktp,
            "tmpt_lahir" => $request->tmpt_lahir,
            "tgl_lahir" => $request->tgl_lahir,
            "alamat" => $request->alamat,
            "lokasi" => $request->lokasi
        ]);

        session()->forget("id");
        session()->forget("nama");

        return redirect("/login");
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

    public function complete_data_personal(Request $request)
    {
        if ((empty(session()->get("id"))) && (empty(session()->get("nama")))) {
            return redirect("/login");
        } else {
            return view("auth.complete_data_personal");
        }

    }
}
