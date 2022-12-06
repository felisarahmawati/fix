<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RiwayatOrderController extends Controller
{
    public function index()
    {
        return view('admin.data.riwayat_order');
    }
}
