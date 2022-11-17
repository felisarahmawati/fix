<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifikasiPenggunaController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::where("id_role", 2)->get()
        ];
        return view('admin.verifikasi.pengguna', $data);
    }

    public function aktifkan($id)
    {
        User::where("id", $id)->update([
            "status" => 1
        ]);

        return redirect("/admin/verifikasi/pengguna");
    }

}
