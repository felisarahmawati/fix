<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;

class VerifikasiDataVendorController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::where("id_role", 4)->get()
        ];
        return view('admin.verifikasi.data_vendor', $data);
    }
}
