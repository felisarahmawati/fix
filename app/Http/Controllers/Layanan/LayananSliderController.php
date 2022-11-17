<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use App\Models\LayananSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class LayananSliderController extends Controller
{
    public function index()
    {
        $data = [
            "layanan_slider" => LayananSlider::get()
        ];

        return view('superadmin.layanan.layanan_slider.tambah', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'slug' => '',
            'status' => '',
            'deskripsi' => ''
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("layananslider");
        }

        LayananSlider::create([
            'image' => $data,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
        ]);

        return back()->with('berhasil', 'Slider baru telah ditambahkan');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => LayananSlider::where("id", $request->id)->first()
        ];

        return view("superadmin.layanan.layanan_slider.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'slug' => '',
            'status' => '',
            'deskripsi' => ''
        ]);

        if($request->file("image_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("layananslider");
        } else {
            $data = $request->gambarLama;
        }

        LayananSlider::where("id", $request->id)->update([
            'image' => $data,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
        ]);

        return back();
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => LayananSlider::where("id", $request->id)->first()
        ];

        return view("superadmin.layanan.layanan_slider.detail", $data);
    }

    public function destroy(LayananSlider $layanan_slider)
    {
        Storage::delete('layanan_slider'. $layanan_slider->image);

        $layanan_slider->delete();
        return back()->with('berhasil');
    }
}
