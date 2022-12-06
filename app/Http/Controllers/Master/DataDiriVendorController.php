<?php

namespace App\Http\Controllers\Master;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\Jasa\JasaLayanan;
use App\Models\Master\Vendor\VendorJasa;
use Illuminate\Support\Facades\Auth;

class DataDiriVendorController extends Controller
{
    public function indexp()
    {
        $data["jasa_layanan"] = JasaLayanan::get();

        return view('vendor.login.datadiri', $data);
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
        request()->validate([
            'nama_vendor'  => 'required|string|min:2|max:100',
            'nama_lengkap'  => 'required|string|min:2|max:100',
            'alamat' => ['string', 'min:3', 'max:191'],
            'tgl_lahir' => ['date', 'required'],
            'tmpt_lahir' => ['string', 'min:3', 'max:191'],
            'no_ktp' => ['string', 'min:3', 'max:191'],
            'lokasi' => ['string', 'min:3', 'max:255'],
            'image_ktp' => ['string', 'min:3', 'max:255'],
        ]);

        $user = User::find($id);

        $user->nama_vendor = $request->nama_vendor;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->alamat = $request->alamat;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->tmpt_lahir = $request->tmpt_lahir;
        $user->no_ktp = $request->no_ktp;
        $user->lokasi = $request->lokasi;
        $user->image_ktp = $request->image_ktp;

        $user->save();

        return back()->with('status', 'Data Diri berhasil di updated!');
    }

    public function post(Request $request)
    {
        foreach ($request->id_jasa as $id)
        {
            echo !$id;

        }

        // return back();
    }

    public function non_aktifkan(Request $request)
    {
        VendorJasa::where("user_id", Auth::user()->id)->where("jasa_layanan_id", $request->jasa_layanan_id)->update([
            "status" => 0
        ]);

        return back();
    }

    public function aktifkan(Request $request)
    {
        VendorJasa::where("user_id", Auth::user()->id)->where("jasa_layanan_id", $request->jasa_layanan_id)->update([
            "status" => 1
        ]);

        return back();
    }

    public function tambah_layanan(Request $request)
    {
        VendorJasa::create([
            "user_id" => Auth::user()->id,
            "jasa_layanan_id" => $request->jasa_layanan_id,
            "status" => 1
        ]);

        return back();
    }

}
