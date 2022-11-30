<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KetentuanLayanan;

class KetentuanController extends Controller
{
    public function index()
    {
        $data = [
            "data_ketentuan" => KetentuanLayanan::all()
        ];
        return view('superadmin.master.ketentuan.index', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'subjudul' => '',
            'isi' => '',
        ]);

        KetentuanLayanan::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'isi' => $request->isi,
        ]);
        return redirect()->back()->with('success', 'Kebijakan Privasi telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $ket = [
            "edit" => KetentuanLayanan::where("id", $request->id)->first()
        ];

        return view('superadmin.master.ketentuan.edit', $ket);
    }

    public function update(Request $request)
    {
        KetentuanLayanan::where("id", $request->id)->update([
            "judul" =>  $request->judul,
            "subjudul" =>  $request->subjudul,
            "isi" => $request->isi,
        ]);

        return back()->with('success', 'Ketentuan Layanan berhasil diupdate');
    }

    public function show(Request $request)
    {
        $ket = [
            "detail" => KetentuanLayanan::where("id", $request->id)->first()
        ];

        return view('superadmin.master.ketentuan.detail', $ket);
    }

    public function destroy($id)
    {
        $kt = KetentuanLayanan::where("id", $id)->first();
        $kt->delete();

        return back()->with('success', 'Ketentuan Layanan berhasil dihapus!');
    }
}
