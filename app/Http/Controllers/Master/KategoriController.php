<?php

namespace App\Http\Controllers\Master;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Master\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    public function index()
    {
        $data = [
            "data_kategori" => Kategori::get()
        ];

        return view("superadmin.layanan.kategori.index", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori' => '',
            'slug' => '',
            'image' => 'mimes:jpg,jpeg,png'
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("kategori");
        }

        Kategori::create([
            'kategori' => $request->kategori,
            'slug' => Str::slug($request->kategori),
            'image' => $data
        ]);

        return back()->with('berhasil', 'Slug baru telah ditambahkan');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Kategori::where("id", $request->id)->first()
        ];

        return view("superadmin.layanan.kategori.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'kategori' => '',
            'slug' => '',
            'image' => 'mimes:jpg,jpeg,png'
        ]);

        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("kategori");
        }else {
            $data = $request->gambarLama;
        }

        Kategori::where("id", $request->id)->update([
            "kategori" => $request->kategori,
            "slug" => Str::slug($request->kategori),
            "image" => $data
        ]);

        return back();
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => Kategori::where("id",
            $request->id)->first()
        ];

        return view("superadmin.layanan.kategori.detail", $data);
    }

    public function destroy (Kategori $kategori)
    {
        $kategori->delete();
        return back()->with('berhasil');
    }
}
