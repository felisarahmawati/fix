<?php

namespace App\Http\Controllers\Master;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\Jasa\JasaLayanan;
use App\Models\Master\Vendor\VendorJasa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DataDiriVendorController extends Controller
{
    public function indexp()
    {
        $user = User::findOrFail(Auth::id());

        $data["jasa_layanan"] = JasaLayanan::get();

        return view('vendor.login.datadiri',$data ,compact('user'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'nama_vendor'  => 'required|string|min:2|max:100',
            'nama_lengkap'  => 'required|string|min:2|max:100',
            'alamat' => ['string', 'min:3', 'max:191'],
            'tgl_lahir' => ['date', 'required'],
            'tmpt_lahir' => ['string', 'min:3', 'max:191'],
            'no_ktp' => ['string', 'min:3', 'max:191'],
            'lokasi' => ['string', 'min:3', 'max:255'],
        ]);

        $user = User::find($id);

        $user->nama_vendor = $request->nama_vendor;
        $user->nama_lengkap = $request->nama_lengkap;
        $user->alamat = $request->alamat;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->tmpt_lahir = $request->tmpt_lahir;
        $user->no_ktp = $request->no_ktp;
        $user->lokasi = $request->lokasi;

        if (request()->hasFile('image_ktp')) {
            if($user->image_ktp && file_exists(storage_path('app/public/ktp/' . $user->photo))){
                Storage::delete('app/public/ktp/'.$user->photo);
            }

            $file = $request->file('image_ktp');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->image_ktp->move(storage_path('app/public/ktp'), $fileName);
            //foto yang sudah diupload akan masuk ke folder storage/public/ktp
            $user->image_ktp = $fileName;
        }

        if (request()->hasFile('image_kk')) {
            if($user->image_kk && file_exists(storage_path('app/public/kk/' . $user->photo))){
                Storage::delete('app/public/kk/'.$user->photo);
            }

            $file = $request->file('image_kk');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->image_kk->move(storage_path('app/public/kk'), $fileName);
            //foto yang sudah diupload akan masuk ke folder storage/public/kk
            $user->image_kk = $fileName;
        }

        if (request()->hasFile('image_skck')) {
            if($user->image_skck && file_exists(storage_path('app/public/skck/' . $user->photo))){
                Storage::delete('app/public/skck/'.$user->photo);
            }

            $file = $request->file('image_skck');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->image_skck->move(storage_path('app/public/skck'), $fileName);
            //foto yang sudah diupload akan masuk ke folder storage/public/skck
            $user->image_skck = $fileName;
        }

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

}
