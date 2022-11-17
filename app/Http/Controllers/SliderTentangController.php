<?php

namespace App\Http\Controllers;

use App\Models\SliderTentang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class SliderTentangController extends Controller
{
    public function index()
    {
        $data = [
            "data_slidertentang" => slidertentang::get()
        ];

        return view("superadmin.master.slidertentang.index", $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("slidertentang");
        }

        Slidertentang::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "data" => Slidertentang::where("id", $request->id)->first()
        ];

        return view("superadmin.master.slidertentang.edit", $data);
    }

    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("slidertentang");
        } else {
            $data = $request->gambarLama;
        }

        Slidertentang::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);

        return back();
    }


    public function destroy(Slidertentang $slidertentang)
    {
        //delete image
        Storage::delete('slidertentang'. $slidertentang->image);

        //delete post
        $slidertentang->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}
