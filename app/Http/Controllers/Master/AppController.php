<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\CompanyPic;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function dashboard()
    {
        return view("superadmin.dashboard");
    }

    public function profile()
    {
        return view("superadmin.profile.profile");
    }

    public function home()
    {
        return view("superadmin.home.home");
    }

    public function setting()
    {
        return view("superadmin.setting");
    }

    public function vendor()
    {
        return view("superadmin.vendor.data_vendor");
    }

    public function trans()
    {
        return view("superadmin.vendor.data_trans");
    }

    public function data_pick_up()
    {
        return view("superadmin.vendor.data_pick_up");
    }

    public function order()
    {
        return view("superadmin.order");
    }

    public function bangunan()
    {
        return view("superadmin.bangunan");
    }

    public function barang()
    {
        return view("superadmin.barang");
    }

    public function pickup()
    {
        return view("superadmin.pickup");
    }

    public function payment()
    {
        return view("superadmin.payment");
    }

    public function pengaturan_user()
    {
        return view("superadmin.pengaturan_user");
    }

    public function transaksi()
    {
        return view("superadmin.transaksi.transaksi");
    }

    public function order_barang()
    {
        return view("superadmin.data.data_order.barang");
    }

    public function order_pickup()
    {
        return view("superadmin.data.data_order.pickup");
    }

    public function order_kendaraan()
    {
        return view("superadmin.data.data_order.kendaraan");
    }
    public function order_bangunan()
    {
        return view("superadmin.data.data_order.bangunan");
    }

    public function data_payment()
    {
        return view("superadmin.data.data_payment");
    }

    public function penarikan()
    {
        return view("superadmin.penarikan.penarikan");
    }

    public function history()
    {
        return view("superadmin.penarikan.history");
    }
    public function penarikan_vendor()
    {
        return view("superadmin.penarikan.vendor");
    }



}
