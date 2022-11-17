<?php

namespace App\Http\Controllers\Master;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdatephotoSuperadminController extends Controller
{
    public function indexp()
    {
        $user = User::findOrFail(Auth::id());

        return view ('superadmin.profile.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name'       => 'required|string|min:2|max:100',
            'email'      => 'required|email|unique:users,email, ' . $id . ',id',
            'old_password' => 'nullable|string',
            'password' => 'nullable|required_with:old_password|string|confirmed|min:6',
            'no_telp' => ['string', 'min:11', 'max:12', 'required'],
            'tgl_lahir' => ['date', 'required'],
            'alamat' => ['string', 'min:3', 'max:191'],
            'kelurahan' => ['string', 'min:3', 'max:191'],
            'kecamatan' => ['string', 'min:3', 'max:191'],
            'kota_kab' => ['string', 'min:3', 'max:191'],
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_telp = $request->no_telp;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->alamat = $request->alamat;
        $user->kelurahan = $request->kelurahan;
        $user->kecamatan = $request->kecamatan;
        $user->kota_kab = $request->kota_kab;

        if($request->filled('old_password')) { //update password lama ke baru
            if (Hash::check($request->old_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
            }else {
                return back()
                    ->withErrors(['old_password' => __('Please enter the correct password')])
                    ->withInput();
            }
        }

        if(request()->hasFile('photo')) {
            if($user->photo && file_exists(storage_path('app/public/photos/' . $user->photo))){
                Storage::delete('app/public/photos/'.$user->photo);
            }

            $file = $request->file('photo');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $request->photo->move(storage_path('app/public/photos'), $fileName);
            //foto yang sudah diupload akan masuk ke folder storage/public/photos
            $user->photo = $fileName;
        }

        $user->save();

        return back()->with('status', 'Profile berhasil di updated!');
    }

    // public function edit()
    // {
    //     return view('superadmin.profile');
    // }
    public function updateprofile(Request $request)
    {
        $request->validate([
            "name" => ['string', 'min:3', 'max:191', 'required'],
            "email" => ['email', 'string', 'min:3', 'max:191','required'],
            "no_telp" => ['string', 'min:11', 'max:12', 'required'],
            "tgl_lahir" => ['date', 'required'],
            "alamat" => ['string', 'min:3', 'max:191'],
            "kelurahan" => ['string', 'min:3', 'max:191'],
            "kecamatan" => ['string', 'min:3', 'max:191'],
            "kota_kab" => ['string', 'min:3', 'max:191'],
        ]);
    }
}
