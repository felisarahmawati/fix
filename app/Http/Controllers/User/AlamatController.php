<?php

namespace App\Http\Controllers\User;

use App\Models\TambahAlamat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AlamatController extends Controller
{
    public function alamat()
    {
        $data["alamat"] = TambahAlamat::where("users_id", Auth::user()->id)->get();
        return view("user.profil.alamat", $data);
    }

    public function index()
    {
        $data["alamat"] = TambahAlamat::all();
        return view("user.profil.tambah_alamat", $data);
    }

    public function store(Request $request)
    {
        TambahAlamat::insert([
            'users_id' => Auth::user()->id,
            'nama_lengkap' => $request->nama_lengkap,
            'kota_kabupaten' => $request->kota_kabupaten,
            'kecamatan' => $request->kecamatan,
            'provinsi' => $request->provinsi,
            'no_telp' => $request->no_telp,
            'detail_alamat' => $request->detail_alamat,
            'catatan' => $request->catatan
        ]);

        return redirect("/user/profil/alamat")->with('success', 'Alamat Baru Berhasil ditambahkan!');
    }

    public function show($id)
    {
        return view('user.profil.edit_alamat', [
            'alamat' => TambahAlamat::where("users_id", Auth::user()->id)->get()
        ]);
    }

    public function edit($id)
    {
        $data = TambahAlamat::where($id)->first();
        return view('user.profil.edit_alamat', compact('data'));
    }

    public function update(Request $request, $data)
    {
    //    $data = TambahAlamat::find($id);
    //    $data->nama_lengkap = $request->nama_lengkap;
    //    $data->kota_kabupaten = $request->kota_kabupaten;
    //    $data->kecamatan = $request->kecamatan;
    //    $data->provinsi = $request->provinsi;
    //    $data->no_telp = $request->no_telp;
    //    $data->detail_alamat = $request->detail_alamat;
    //    $data->catatan = $request->catatan;
    //    $data->save();

    $request->validate([
        'nama_lengkap' => 'required',
        'kota_kabupaten' => 'required',
        'kecamatan' => 'required',
        'provinsi' => 'required',
        'no_telp' => 'required',
        'detail_alamat' => 'required',
        'catatan' => 'required',
    ]);

    $data->update($request->all());

    return redirect('user.profil.alamat')->with('success', 'Alamat Berhasil di Update');
    }
}
