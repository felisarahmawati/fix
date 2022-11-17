<?php

namespace App\Http\Controllers;

use App\Models\SliderHome;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SliderHomeController extends Controller
{
    public function index()
    {
        $data = [
            "data_sliderhome" => SliderHome::get()
        ];

        return view("superadmin.master.sliderhome.index", $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("sliderhome");
        }

        SliderHome::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => SliderHome::where("id", $request->id)->first()
        ];

        return view("superadmin.master.sliderhome.edit", $data);
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

            $data = $request->file("image_new")->store("sliderhome");
        }else {
            $data = $request->gambarLama;
        }

        Sliderhome::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);

        return back();
    }
    public function destroy(SliderHome $sliderhome)
    {
        //delete image
        Storage::delete('sliderhome'. $sliderhome->image);

        //delete post
        $sliderhome->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }
}
