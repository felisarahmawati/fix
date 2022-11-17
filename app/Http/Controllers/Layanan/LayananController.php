<?php

namespace App\Http\Controllers\Layanan;

use App\Models\Layanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class LayananController extends Controller
{
    public function index()
    {
        $data = [
            "layanan" => Layanan::get()
        ];

        return view('superadmin.layanan.layanan.tambah', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'slug' => '',
            'deskripsi' => ''
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("layanan");
        }

        Layanan::create([
            'image' => $data,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi
        ]);

        return back()->with('berhasil', 'Data baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = [
            "detail" => Layanan::where("id", $request->id)->first()
        ];

        return view("superadmin.layanan.layanan.detail", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = [
            "edit" => Layanan::where("id", $request->id)->first(),
        ];

        return view("superadmin.layanan.layanan.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'iamge' => 'mimes:jpg,jpeg,png',
            'judul' => '',
            'slug' => '',
            'deskripsi' => ''
        ]);

        if($request->file("image_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("sublayanan");
        } else {
            $data = $request->gambarLama;
        }

        Layanan::where("id", $request->id)->update([
            'image' => $data,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return back()->with('berhasil');
    }
}
