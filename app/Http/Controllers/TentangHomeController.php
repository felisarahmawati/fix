<?php

namespace App\Http\Controllers;

use App\Models\TentangHome;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class TentangHomeController extends Controller
{
    public function index()
    {
        $data = [
            "data_tentang" => TentangHome::get()
        ];

        return view("superadmin.master.tentanghome.index", $data);
    }

    public function store(Request $request)
    {
        if($request->file("image")) {
            $data = $request->file("image")->store("tentanghome");
        }

        TentangHome::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Data baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => TentangHome::where("id", $request->id)->first()
        ];

        return view("superadmin.master.tentanghome.edit", $data);
    }

    public function update(Request $request)
    {
        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("tentanghome");
        }else {
            $data = $request->gambarLama;
        }

        TentangHome::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);

        return back();
    }
    public function destroy(TentangHome $tentanghome)
    {
        //delete image
        Storage::delete('tentanghome'. $tentanghome->image);

        //delete post
        $tentanghome->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}
