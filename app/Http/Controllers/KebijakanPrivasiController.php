<?php

namespace App\Http\Controllers;

use App\Models\KebijakanPrivasi;
use Illuminate\Http\Request;

class KebijakanPrivasiController extends Controller
{
    public function index()
    {
        $keb = KebijakanPrivasi::all(); //mengambil seluruh data melalui model tambahalamat
        return view('superadmin.master.kebijakanprivasi.index', compact('keb'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => '',
            'isi' => '',
        ]);

        KebijakanPrivasi::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        return redirect()->back()->with('success', 'Kebijakan Privasi telah ditambahkan!');
    }

    public function edit(Request $request)
    {
        $keb = [
            "edit" => KebijakanPrivasi::where("id", $request->id)->first()
        ];

        return view('superadmin.master.kebijakanprivasi.edit', $keb);
    }

    public function update(Request $request)
    {
        KebijakanPrivasi::where("id", $request->id)->update([
            "judul" =>  $request->judul,
            "isi" => $request->isi,
        ]);

        return back()->with('success', 'Kebijakan Privasi berhasil diupdate');
    }

    public function show(Request $request)
    {
        $keb = [
            "detail" => KebijakanPrivasi::where("id", $request->id)->first()
        ];

        return view('superadmin.master.kebijakanprivasi.detail', $keb);
    }

    public function destroy($id)
    {
        $kp = KebijakanPrivasi::where("id", $id)->first();
        $kp->delete();

        return back()->with('success', 'Kebijakan Privasi berhasil dihapus!');
    }
}
