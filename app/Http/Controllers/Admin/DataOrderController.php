<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataOrderController extends Controller
{
    public function order()
    {
        return view("admin.data.data_order.order");
    }
}
