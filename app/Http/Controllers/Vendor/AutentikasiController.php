<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
    public function login()
    {
        return view("landing.autentikasi.v_login_vendor");
    }

    public function register()
    {
        return view("landing.autentikasi.v_register_vendor");
    }

    public function post_vendor(Request $request)
    {
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "no_telp" => $request->no_telp,
            "password" => bcrypt($request->password),
            'id_role' => 2,
        ]);

        session()->put("id", $user["id"]);
        session()->put("nama", $user["name"]);

        return redirect("/register/complete-data-personal");
    }

    public function complete_data_personal(Request $request)
    {
        if ((empty(session()->get("id"))) && (empty(session()->get("nama")))) {
            return redirect("/login");
        } else {
            return view("landing.autentikasi.v_complete_data_personal");
        }
    }

    public function post_complete_data_personal(Request $request)
    {
        User::where("id", $request->id_user)->update([
            "no_ktp" => $request->no_ktp,
            "tmpt_lahir" => $request->tmpt_lahir,
            "tgl_lahir" => $request->tgl_lahir,
            "alamat" => $request->alamat,
            "lokasi" => $request->lokasi,
            "image_ktp" => $request->image_ktp
        ]);

        session()->forget("id");
        session()->forget("nama");

        return redirect("/login/vendor")->with(["message" => '<script>swal("Verifikasi telah dikirim!", "Kami akan memproses dalam kurang waktu 1x24 jam!", "success");</script>' ]);
    }
}
