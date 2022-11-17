<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemesananPickupController extends Controller
{
    public function index()
    {
        return view('admin.vendor.pemesanan_pickup');
    }
}
