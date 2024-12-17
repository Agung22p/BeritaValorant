<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
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

            $galeris = Galeri::orderBy("tanggal", "ASC")->get();
            $data = array(
                'judul_halaman' => 'Data Caraousel',
            );
            return view('admin.galeri', ['data' => $data, 'user' => $user, 'galeris' => $galeris]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time().'.'.$request->foto->extension();
            $filePath = 'images/' . $fileName;

            $file->move(public_path('images'), $fileName);
        }

        $galeri = Galeri::create([
            'judul' => $request->judul,
            'foto' => $fileName,
            'tanggal' => date('Y-m-d'),
        ]);

        $response = ['message' => 'galeri baru Berhasil ditambahkan.'];
        return redirect()->route('admin.galeri')->with($response)->withErrors($validatedData);
    }

    public function delete($id_galeri)
    {

        $galeri = Galeri::where('foto', $id_galeri);

        $imagePath = public_path('images/' . $id_galeri);
        if (file_exists($imagePath)){
            unlink($imagePath);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri')->with('message','Galeri telah berhasil dihapus!');
    }
}
