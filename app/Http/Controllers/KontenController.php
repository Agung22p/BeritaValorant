<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Konten;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KontenController extends Controller
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
            $konten = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
                        ->select('kategori.nama_kategori', 'konten.*')
                        ->get();
            // $konten = Konten::orderBy("judul", "ASC")->get();
            $data = array(
                'judul_halaman' => 'Data Konten',
            );
            return view("konten", ['data' => $data, 'kontens' => $konten, 'kategories' => $kategori,  'user' => $user]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }
    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'judul' => 'required|unique:konten,judul',
            'keterangan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            'kategori' => 'required'
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time().'.'.$request->foto->extension();
            $filePath = 'images/' . $fileName;

            $file->move(public_path('images'), $fileName);
        }

        $slug =  Str::slug($request->judul, '-');

        if (session()->has('admin')){
            $userId = session()->get('admin');
        } elseif (session()->has('kontributor')){
            $userId = session()->get('kontributor');
        }
        $user = User::find($userId);

        $konten = Konten::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'foto' => $fileName,
            'id_kategori' => $request->kategori,
            'tanggal' => date('Y-m-d'),
            'username' => $user->username,
            'slug' => $slug
        ]);
            $response = ['message' => 'Konten Berhasil di tambah!'];
            return redirect()->route('konten')->with($response);
    }


    public function update(Request $request, Konten $konten)
    {
        $konten = Konten::find($request->id);

        $fileName = $konten->foto;

        $validatedData = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'kategori' => 'required'
        ]);

        if ($request->hasFile('foto')) {

            $path = public_path('images/');

            //menghapus foto lama
            if ($konten->foto != '' && $konten->foto != NULL){
                $foto_lama = $path.$konten->foto;
                unlink($foto_lama);
            }

            //upload foto baru
            $file = $request->file('foto');
            $fileName = time().'.'.$request->foto->extension();
            $filePath = 'images/' . $fileName;


            $file->move(public_path('images'), $fileName);

        }

        $slug =  Str::slug($request->judul, '-');


        $konten = $konten->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'foto' => $fileName,
            'id_kategori' => $request->kategori,
            'slug' => $slug
        ]);
            $response = ['message' => 'Konten Berhasil di edit!'];
            return redirect()->route('konten')->with($response);
    }


    public function delete($id_konten)
    {

        $konten = Konten::where('foto', $id_konten);

        $imagePath = public_path('images/' . $id_konten);
        if (file_exists($imagePath)){
            unlink($imagePath);
        }

        $konten->delete();

        return redirect()->route('konten')->with('message','Konten telah berhasil dihapus!');
    }
}
