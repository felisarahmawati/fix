<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPaymentController extends Controller
{
    public function index()
    {
        return view("admin.data.data_payment");
    }
}
