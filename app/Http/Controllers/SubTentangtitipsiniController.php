<?php

namespace App\Http\Controllers;

use App\Models\SubTentangtitipsini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubTentangtitipsiniController extends Controller
{
    public function index()
    {
        $data = [
            "data_tentang" => SubTentangtitipsini::get()
        ];

        return view("superadmin.master.tentangtitipsini.index", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'baris1' => '',
            'baris2' => '',
            'baris3' => '',
            'baris4' => '',
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("tentangtitipsini");
        }

        SubTentangtitipsini::create([
            'image' => $data,
            'judul' => $request->judul,
            'baris1' => $request->baris1,
            'baris2' => $request->baris2,
            'baris3' => $request->baris3,
            'baris4' => $request->baris4
        ]);

        return back()->with('berhasil', 'Data baru telah ditambahkan');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => SubTentangtitipsini::where("id", $request->id)->first()
        ];

        return view("superadmin.master.tentangtitipsini.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'baris1' => '',
            'baris2' => '',
            'baris3' => '',
            'baris4' => ''
        ]);

        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("tentangtitipsini");
        }else {
            $data = $request->gambarLama;
        }

        SubTentangtitipsini::where("id", $request->id)->update([
            'image' => $data,
            'judul' => $request->judul,
            'baris1' => $request->baris1,
            'baris2' => $request->baris2,
            'baris3' => $request->baris3,
            'baris4' => $request->baris4
        ]);

        return back();
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => SubTentangtitipsini::where("id", $request->id)->fisrt()
        ];

        return view("superadmin.master.tentangtitipsini.detail", $data);
    }

    public function destroy( SubTentangtitipsini $tentangtitipsini)
    {
        $tentangtitipsini->delete();
        return back()->with('berhasil');
    }
}
