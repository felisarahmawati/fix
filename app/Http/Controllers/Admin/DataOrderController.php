<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataOrderController extends Controller
{
    public function kendaraan()
    {
        return view("admin.data.data_order.kendaraan");
    }
    public function bangunan()
    {
        return view("admin.data.data_order.bangunan");
    }
    public function barang()
    {
        return view("admin.data.data_order.barang");
    }
    public function pickup()
    {
        return view("admin.data.data_order.pickup");
    }
}
