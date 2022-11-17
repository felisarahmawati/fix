<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataLayananVendorController extends Controller
{
    public function kendaraan()
    {
        return view("admin.vendor.data_vendor.kendaraan");
    }
    public function barang()
    {
        return view("admin.vendor.data_vendor.barang");
    }
    public function bangunan()
    {
        return view("admin.vendor.data_vendor.bangunan");
    }
    public function pickup()
    {
        return view("admin.vendor.data_vendor.pickup");
    }
}
