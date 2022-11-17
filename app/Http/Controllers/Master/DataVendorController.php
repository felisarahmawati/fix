<?php

namespace App\Http\Controllers\Master;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\FuncCall;

class DataVendorController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::where("id_role", 4)->get()
        ];

        return view('superadmin.akun.pengguna.users.vendor', $data);
    }

    public function pdf()
    {
            $data = User::where("id_role", 4)->get();

            $pdf = PDF::loadView('superadmin.akun.pengguna.users.print_pdf_vendor', ['user' => $data]);

            return $pdf->download("dvendor.pdf");
    }

   public function download($id)
   {
        $data = User::where("id", $id)->where("id_role", 4)->first();

        // return view("superadmin.vendor.pdf_vendor", ["user" => $data]);

        $pdf = PDF::loadView('superadmin.akun.pengguna.users.pdf_vendor', ['user' => $data]);

        // $pdf->getDomPDF()->setHttpContext(
        //     stream_context_create([
        //         'ssl' => [
        //             'allow_self_signed'=> TRUE,
        //             'verify_peer' => FALSE,
        //             'verify_peer_name' => FALSE,
        //         ]
        //     ])
        // );

        return $pdf->download("Data-vendor.pdf");
   }
}
