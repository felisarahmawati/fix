<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifikasiPenggunaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $data = [
            "user" => User::where("id_role", 2)
                    ->where('name', 'LIKE', '%' . $search . '%')
                    ->paginate(5)
        ];
        return view('admin.verifikasi.pengguna', $data);
    }

    public function aktifkan($id)
    {
        User::where("id", $id)->update([
            "status" => 1
        ]);

        return back();
    }

    public function tolak($id)
    {
        User::where("id", $id)->update([
            "status" => 2
        ]);

        return back();
    }

}
