<?php

namespace App\Http\Controllers\Kelola;

use Illuminate\Http\Request;
use App\Models\KelolaKendaraan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KelolaKendaraanController extends Controller
{
    public function index()
    {
        $data = [
            "kel_kendaraan" => KelolaKendaraan::get()
        ];
        return view('vendor.vendor.Kelola-Kendaraan.atur_alamat', $data);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'link_lokasi' => ['string', 'min:3', 'max:255'],
            'provinsi' => ['string', 'min:3', 'max:191'],
            'kecamatan' => ['string', 'min:3', 'max:191'],
            'kota_kab' => ['string', 'min:3', 'max:191'],
            'catatan' => ['string', 'min:3', 'max:191'],
            'pjg' => ['string', 'min:3', 'max:191'],
            'lbr' => ['string', 'min:3', 'max:191'],
        ]);

        $data = KelolaKendaraan::find($id);

        $data->link_lokasi = $request->link_lokasi;
        $data->provinsi = $request->provinsi;
        $data->kecamatan = $request->kecamatan;
        $data->kota_kab = $request->kota_kab;
        $data->catatan = $request->catatan;
        $data->pjg = $request->pjg;
        $data->lbr = $request->lbr;

        if (request()->hasFile('image_kanan')) {
            if($data->image_kanan && file_exists(storage_path('app/public/Image_kanan/' . $data->photo))){
                Storage::delete('app/public/Image_kanan/'.$data->photo);
            }

            $file = $request->file('image_kanan');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->image_kanan->move(storage_path('app/public/Image_kanan'), $fileName);
            //foto yang sudah diupload akan masuk ke folder storage/public/kanan
            $data->image_kanan = $fileName;
        }

        if (request()->hasFile('image_kiri')) {
            if($data->image_kiri && file_exists(storage_path('app/public/Image_kiri/' . $data->photo))){
                Storage::delete('app/public/Image_kiri/'.$data->photo);
            }

            $file = $request->file('image_kiri');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->image_kiri->move(storage_path('app/public/Image_kiri'), $fileName);
            //foto yang sudah diupload akan masuk ke folder storage/public/kiri
            $data->image_kiri = $fileName;
        }

        if (request()->hasFile('image_depan')) {
            if($data->image_depan && file_exists(storage_path('app/public/Image_depan/' . $data->photo))){
                Storage::delete('app/public/Image_depan/'.$data->photo);
            }

            $file = $request->file('image_depan');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->image_depan->move(storage_path('app/public/Image_depan'), $fileName);
            //foto yang sudah diupload akan masuk ke folder storage/public/depan
            $data->image_depan = $fileName;
        }

        if (request()->hasFile('image_belakang')) {
            if($data->image_belakang && file_exists(storage_path('app/public/Image_belakang/' . $data->photo))){
                Storage::delete('app/public/Image_belakang/'.$data->photo);
            }

            $file = $request->file('image_belakang');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->image_belakang->move(storage_path('app/public/Image_belakang'), $fileName);
            //foto yang sudah diupload akan masuk ke folder storage/public/belakang
            $data->image_belakang = $fileName;
        }
    }

}
