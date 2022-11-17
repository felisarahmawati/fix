<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\Akun\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $data = [
            "data_role" => Role::get()
        ];

        return view("superadmin.akun.role.index", $data);
    }

    public function store(Request $request)
    {
        $count = Role::where("nama", $request->nama)->count();

        if ($count > 0) {
            return back();
        } else {
            Role::create($request->all());

            return back();
        }
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Role::where("id", $request->id)->first()
        ];

        return view("superadmin.akun.role.edit", $data);
    }

    public function update(Request $request)
    {
        Role::where("id", $request->id)->update([
            "nama" => $request->nama
        ]);

        return back();
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('berhasil');
    }
}
