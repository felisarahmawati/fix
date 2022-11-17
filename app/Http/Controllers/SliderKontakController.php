<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderKontak;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class SliderKontakController extends Controller
{
    public function index()
    {
        $data = [
            "data_sliderkontak" => Sliderkontak::get()
        ];

        return view("superadmin.master.sliderkontak.index", $data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'image' => 'mimes:jpg,jpeg,png'
        // ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("sliderkontak");
        }

        Sliderkontak::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);
        return back()->with('berhasil', 'Layanan baru telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $data = [
            "data" => Sliderkontak::where("id", $request->id)->first()
        ];

        return view("superadmin.master.sliderkontak.edit", $data);
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

            $data = $request->file("image_new")->store("sliderkontak");
        } else {
            $data = $request->gambarLama;
        }

        Sliderkontak::where("id", $request->id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $data
        ]);

        return back();
    }
    public function destroy(Sliderkontak $sliderkontak)
    {
        //delete image
        Storage::delete('sliderkontak'. $sliderkontak->image);

        //delete post
        $sliderkontak->delete();

        //redirect to index
        return back()->with('Berhasil dihapus!');
    }

}
