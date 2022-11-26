<?php

namespace App\Http\Controllers\Master;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataFinanceController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $data = [
            "user" => User::where("id_role", 3)
                        ->where('name', 'LIKE', '%' . $search . '%')
                        ->paginate(5)
        ];

        return view('superadmin.akun.pengguna.users.finance', $data);
    }

    public function pdf()
    {
        $data = User::where("id_role", 3)->get();

        $pdf = PDF::loadView('superadmin.akun.pengguna.users.print_pdf_finance', ['user' => $data]);

        return $pdf->download("dFinance.pdf");
    }
}
