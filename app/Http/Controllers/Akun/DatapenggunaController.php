<?php

namespace App\Http\Controllers\Akun;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatapenggunaController extends Controller
{
    public function vendor()
    {
        return view("superadmin.akun.pengguna.users.vendor");
    }
    public function customer()
    {
        return view("superadmin.akun.pengguna.users.customer");
    }
    public function admin()
    {
        return view("superadmin.akun.pengguna.users.admin");
    }
    public function finance()
    {
        return view("superadmin.akun.pengguna.users.finance");
    }

    public function verifikasi_vendor()
    {
        $data = [
            "vrfks_vendor" => User::where("id_role", 4)->get()
        ];
        return view("superadmin.verifikasi.data_vendor", $data);
    }

    public function pdf_vendor()
    {
        return view("superadmin.akun.pengguna.users.pdf_vendor");
    }
}
