<?php

namespace App\Http\Controllers\Akun;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use App\Models\Akun\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::paginate(5),
            "role" => Role::all()
        ];
        return view('superadmin.akun.pengguna.index', $data);
    }

    public function store(Request $request)
    {
        if($request->password != $request->password) {
            return back();
        } else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                "no_telp" => $request->no_telp,
                'password' => bcrypt($request->password),
                'id_role' => 3,
                "status"=> 1
            ]);
            return redirect("/superadmin/akun/pengguna");
        }
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'name' => 'required|string|min:2|max:100',
        //     'email' => 'required|email|unique:users,email, ' . $id . ',id',
        //     'alamat' => 'string', 'min:3', 'max:191',
        //     'no_telp' => 'string', 'min:11', 'max:12', 'required',
        //     'password' => 'nullable|required_with:old_password|string|confirmed|min:6',
        // ]);

        // $data = Role::find($id);
        if($request->password != $request->password) {
            return back();
        } else {
            User::where("id", $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'alamat' => $request->alamat,
                "no_telp" => $request->no_telp,
                'password' => bcrypt($request->password),
            ]);
            return redirect("/superadmin/akun/pengguna");
        }
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('berhasil');
    }
}
