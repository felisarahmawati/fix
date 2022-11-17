<?php

namespace App\Http\Controllers\Master;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataAdminController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::where("id_role", 5)->paginate(5)
        ];

        return view('superadmin.akun.pengguna.users.admin', $data);
    }

    public function pdf()
    {
        $data = User::where("id_role", 5)->get();

        $pdf = PDF::loadView('superadmin.akun.pengguna.users.print_pdf_admin', ['user' => $data]);

        return $pdf->download("dAdmin.pdf");
    }
}
