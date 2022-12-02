<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function login()
    {
        return view("landing.autentikasi.v_login_vendor");
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
                }
                if ($user->status == 2) {
                    return redirect('/login');
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
            'id_role' => 4,
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
