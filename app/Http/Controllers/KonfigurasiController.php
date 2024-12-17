<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class KonfigurasiController extends Controller
{
    public function index() {
        if (session()->has('admin')) {
            $userId = session()->get('admin');
            $user = User::find($userId);

            $config = Konfigurasi::first();

            $data = array(
                'judul_halaman' => 'Data Konfigurasi',
            );
            return view("admin.konfigurasi", ['data' => $data, 'configs' => $config, 'user' => $user]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }
    }

    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'username' => 'required',
        // ]);

        $konfigurasi = Konfigurasi::findOrFail(1);
        $konfigurasi->update([
            'judul_website' => $request->judul_website,
            'profil_website' => $request->profil_website,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_wa' => $request->no_wa,
        ]);
        return redirect()->route('admin.config')->with('message','konfig has been edited successfully');
    }
}
