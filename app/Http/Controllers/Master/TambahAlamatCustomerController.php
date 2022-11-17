<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\TambahAlamat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class TambahAlamatCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/regencies/32.json");

        $kota_kab = $response->json();

        foreach ($kota_kab as $d) {
            if ($d["id"] == $request->id_kota_kab) {
                $nama_kab = $d["name"];
                $id = $d["id"];
            }
        }

        TambahAlamat::insert([
            'users_id' => Auth::user()->id,
            'nama_lengkap' => $request->nama_lengkap,
            'kota_kabupaten' => $request->kota_kabupaten,
            'kecamatan' => $request->kecamatan,
            'id_provinsi' => $request->id_provinsi,
            'no_telp' => $request->no_telp,
            'detail_alamat' => $request->detail_alamat,
            'catatan' => $request->catatan
        ]);

        return redirect("/user/profil/alamat")->with('success', 'Alamat Baru Berhasil ditambahkan!');
    }

    public function kecamatan(Request $request)
    {
        $id_kota_kab = $request->data;

        $res_kecamatan = Http::get("https://emsifa.github.io/api-wilayah-indonesia/api/districts/".$id_kota_kab.".json");

        $kecamatan = $res_kecamatan->json();

        foreach ($kecamatan as $kec) {
            echo "<option value='".$kec["id"]."'>".$kec["name"]."</option>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
