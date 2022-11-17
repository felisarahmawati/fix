<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengembalianUangVendorController extends Controller
{
    public function berlangsung()
    {
        return view('admin.vendor.transaksi_pengambilan_uang.berlangsung');
    }

    public function selesai()
    {
        return view('admin.vendor.transaksi_pengambilan_uang.selesai');
    }

}
