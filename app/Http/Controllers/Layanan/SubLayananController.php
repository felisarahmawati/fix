<?php

namespace App\Http\Controllers\Layanan;

use App\Models\SubLayanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Master\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SubLayananController extends Controller
{
    public function index()
    {
        $data = [
            "sub_layanan" => SubLayanan::get(),
            "kategori" => Kategori::all()
        ];

        return view('superadmin.layanan.Sub_layanan.tambah', $data);

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'nama_vendor' => '',
            'kategori_id' => '',
            'harga' => '',
            'status' => '',
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("sublayanan");
        }

        SubLayanan::create([
            'image' => $data,
            'nama_vendor' => $request->nama_vendor,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'status' => $request->status,
        ]);

        return back()->with('berhasil', 'Slider baru telah ditambahkan');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => SubLayanan::where("id", $request->id)->first(),
            "kategori" => Kategori::all()
        ];

        return view("superadmin.layanan.Sub_layanan.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'nama_vendor' => '',
            'kategori_id' => '',
            'harga' => '',
            'status' => ''
        ]);

        if($request->file("image_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("sublayanan");
        } else {
            $data = $request->gambarLama;
        }

        SubLayanan::where("id", $request->id)->update([
            'image' => $data,
            'nama_vendor' => $request->nama_vendor,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'status' => $request->status,

        ]);

        return back();
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => SubLayanan::where("id", $request->id)->first()
        ];

        return view("superadmin.layanan.Sub_layanan.detail", $data);
    }

    public function destroy(SubLayanan $sublayanan)
    {
        $sublayanan->delete();
        return back()->with('berhasil');
    }
}
