<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard_ad()
    {
        $data = [
            // "user" => User::where("id_role", 4)->get(),
            "user" => User::where("id_role", 4)->get()
        ];
        $data["counting_user_pengguna"] = User::where("id_role", 2)->where("status", 1)->count();
        return view("admin.admin.dashboard_admin", $data);
    }

    public function data_customer()
    {
        return view("admin.pengguna.user.customer");
    }
    public function data_vendor()
    {
        return view("admin.pengguna.user.vendor");
    }
    public function transaksi()
    {
        return view("admin.transaksi.transaksi");
    }

}
