<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifikasiVendorController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $data = [
            "user" => User::where("id_role", 4)
                    ->where('name', 'LIKE', '%' . $search . '%')
                    ->get()
        ];
        return view('admin.verifikasi.vendor', $data);
    }

    public function aktifkan($id)
    {
        User::where("id", $id)->update([
            "status" => 1
        ]);

        return redirect("/admin/verifikasi/vendor");
    }
}
