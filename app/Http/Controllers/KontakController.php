<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class KontakController extends Controller
{
    public function index()
    {
        $data = [
            "data_kontak" => Kontak::get()
        ];

        return view("superadmin.master.kontak.index", $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'alamat' => '',
        //     'email' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("kontak");
        }

        Kontak::create([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telp' => $request->telp,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Data baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => Kontak::where("id", $request->id)->first()
        ];

        return view("superadmin.master.kontak.edit", $data);
    }

    public function update(Request $request)
    {
        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("kontak");
        } else {
            $data = $request->gambarLama;
        }

        Kontak::where("id", $request->id)->update([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telp' => $request->telp,
            'image' => $data
        ]);

        return back();
    }
    public function destroy(Kontak $kontak)
    {
        //delete image
        Storage::delete('Kontak'. $kontak->image);

        //delete post
        $kontak->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}

