<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Konten;
use App\Models\Kategori;
use App\Http\Requests\StoreKontenRequest;
use App\Http\Requests\UpdateKontenRequest;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
            $konten = ' ';
            $data = array(
                'judul_halaman' => 'Data Konten',
            );
            return view("konten", ['data' => $data, 'kontens' => $konten, 'kategories' => $kategori,  'user' => $user]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->foto->extension();
        $uploadedImage = $request->foto->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;


        $validatedData = $request->validate([
            'judul' => 'required|unique:konten,judul',
            'keterangan' => 'required',
            'foto' => 'requiredimage|mimes:jpeg,png,jpg|max:2048',
            'id_kategori' => 'required'
        ]);

        $konten = Konten::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'foto' => $imagePath,
            'id_kategori' => $request->kategori
        ]);
            $response = ['message' => 'Konten Berhasil di tambah!'];
            return redirect()->route('konten')->with($response)->withErrors($validatedData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKontenRequest $request, Konten $konten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Konten $konten)
    {
        //
    }
}
