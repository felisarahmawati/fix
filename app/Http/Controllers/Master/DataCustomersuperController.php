<?php

namespace App\Http\Controllers\Master;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataCustomersuperController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $data = [
            "user" => User::where("id_role", 2)
                    ->where('name', 'LIKE', '%' . $search . '%')
                    ->paginate(5)
        ];

        return view('superadmin.akun.pengguna.users.customer', $data);
    }

    public function pdf()
    {
        $data = User::where("id_role", 2)->get();

        $pdf = PDF::loadView('superadmin.akun.pengguna.users.print_pdf_customer', ['user' => $data]);

        return $pdf->download("dCustomer.pdf");
    }
}
