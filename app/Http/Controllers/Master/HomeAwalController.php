<?php

namespace App\Http\Controllers\Master;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\HomeAwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeAwalController extends Controller
{
    public function index()
    {
        $data = [
            "data_home" => HomeAwal::get()
        ];

        return view("superadmin.master.homeawal.index", $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'content1' => '',
            'content2' => '',
            'content3' => ''
        ]);

        if($request->file("image")) {
            $data = $request->file("image")->store("homeawal");
        }

        HomeAwal::create([
            'image' => $data,
            'content1' => $request->content1,
            'content2' => $request->content2,
            'content3' => $request->content3
        ]);

        return back()->with('berhasil', 'Home baru telah ditambahkan');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => HomeAwal::where("id", $request->id)->first()
        ];

        return view("superadmin.master.homeawal.edit", $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'content1' => '',
            'content2' => '',
            'content3' => ''
        ]);

        if($request->file("image_new")) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }

            $data = $request->file("image_new")->store("homeawal");
        }else {
            $data = $request->gambarLama;
        }

        HomeAwal::where("id", $request->id)->update([
            'image' => $data,
            'content1' => $request->content1,
            'content2' => $request->content2,
            'content3' => $request->content3
        ]);

        return back();
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => HomeAwal::where("id", $request->id)->first()
        ];

        return view("superadmin.master.homeawal.detail", $data);
    }

    public function destroy ( HomeAwal $homeawal)
    {
        $homeawal->delete();
        return back()->with('berhasil');
    }
}
