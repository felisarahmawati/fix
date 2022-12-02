<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
    public function login()
    {
        return view("landing.autentikasi.v_login_vendor");
    }
}
