<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        return view('superadmin.master.faq.index', compact('faq'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'pertanyaan' => '',
            'jawaban' => ''
        ]);

        faq::create([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
        ]);

        return redirect()->back()->with('success', 'Pusat Bantuan telat ditambahkan!');
    }

    public function edit(Request $request)
    {
        $faq = [
            "edit" => faq::where("id", $request->id)->first()
        ];

        return view('superadmin.master.faq.edit', $faq);
    }

    public function update(Request $request)
    {
        faq::where("id", $request->id)->update([
            "pertanyaan" =>  $request->pertanyaan,
            "jawaban" => $request->jawaban,
        ]);

        return back()->with('success', 'Pusat Bantuan berhasil diupdate');
    }

    public function show(Request $request)
    {
        $faq = [
            "detail" => faq::where("id", $request->id)->first()
        ];

        return view('superadmin.master.faq.detail', $faq);
    }

    public function destroy($id)
    {
        $bantuan = faq::where("id", $id)->first();
        $bantuan->delete();

        return back()->with('success', 'Kebijakan Privasi berhasil dihapus!');
    }

}
