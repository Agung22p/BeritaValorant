<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        if (session()->has('admin') || session()->has('kontributor')) {
            if (session()->has('admin')){
                $userId = session()->get('admin');
            } elseif (session()->has('kontributor')){
                $userId = session()->get('kontributor');
            }
            $user = User::find($userId);
            
            $kategori = Kategori::orderBy("nama_kategori", "ASC")->get();
            $data = array(
                'judul_halaman' => 'Data Kategori',
            );
            return view("kategori", ['data' => $data, 'kategories' => $kategori, 'user' => $user]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kategori' => 'required',
        ]);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        $response = ['message' => 'kategori baru Berhasil ditambahkan.'];
        return redirect()->route('kategori')->with($response)->withErrors($validatedData);
    }

    public function delete($id_kategori)
    {
        $kategori = Kategori::find($id_kategori);
        $kategori->delete();
        return redirect()->route('kategori')->with('message','Kategori telah berhasil dihapus!');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);



        $kategori = Kategori::findOrFail($id);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect()->route('kategori')->with('message','kategori has been edited successfully');
    }
}
