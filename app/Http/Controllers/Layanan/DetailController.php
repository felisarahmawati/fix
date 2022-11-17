<?php

namespace App\Http\Controllers\Layanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master\Kategori;
use App\Models\Detail;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "detail" => Detail::get(),
            "kategori" => Kategori::all()
        ];

        return view('superadmin.layanan.Det_layanan.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'nama_vendor' => '',
            'kategori_id' => '',
            'harga' => '',
            'alamat' => '',
            'deskripsi' => '',
            'status' => '',
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("detlayanan");
        }

        Detail::create([
            'image' => $data,
            'nama_vendor' => $request->nama_vendor,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ]);

        return back()->with('berhasil', 'Data baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
    {
        $data = [
            "detail" => Detail::where("id", $request->id)->first()
        ];

        return view("superadmin.layanan.Det_layanan.detail", $data);
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
            "edit" => Detail::where("id", $request->id)->first(),
            "kategori" => Kategori::all()
        ];

        return view("superadmin.layanan.Det_layanan.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'nama_vendor' => '',
            'kategori_id' => '',
            'harga' => '',
            'alamat' => '',
            'deskripsi' => '',
            'status' => '',
        ]);

        if($request->file("image_new")) {
            if($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("detail");
        } else {
            $data = $request->gambarLama;
        }

        Detail::where("id", $request->id)->update([
            'image' => $data,
            'nama_vendor' => $request->nama_vendor,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,

        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detlayanan)
    {
        $detlayanan->delete();
        return back()->with('berhasil');
    }
}
