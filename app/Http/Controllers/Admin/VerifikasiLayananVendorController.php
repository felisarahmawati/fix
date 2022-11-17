<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifikasiLayananVendorController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::where("id_role", 4)->get()
        ];
        return view('admin.vendor.verifikasi_layanan' , $data);
    }

    public function verifikasi_layanan()
    {
        $datalyn = [
            "data_lyn" => User::where("id_role", 4)->get()
        ];
        return view("superadmin.verifikasi.verifikasi_layanan", $datalyn);
    }

}
