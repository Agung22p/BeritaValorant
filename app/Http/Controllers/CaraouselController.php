<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Caraousel;
use Illuminate\Http\Request;

class CaraouselController extends Controller
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

            $caraousel = Caraousel::orderBy("created_at", "ASC")->get();
            $data = array(
                'judul_halaman' => 'Data Caraousel',
            );
            return view("caraousel", ['data' => $data, 'caraousels' => $caraousel, 'user' => $user]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,webp',
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time().'.'.$request->foto->extension();
            $filePath = 'images/' . $fileName;

            $file->move(public_path('images'), $fileName);
        }

        $kategori = Caraousel::create([
            'judul' => $request->judul,
            'foto' => $fileName
        ]);

        $response = ['message' => 'Caraousel baru Berhasil ditambahkan.'];
        return redirect()->route('caraousel')->with($response)->withErrors($validatedData);
    }

    public function delete($id_caraousel)
    {

        $caraousel = Caraousel::where('foto', $id_caraousel);

        $imagePath = public_path('images/' . $id_caraousel);
        if (file_exists($imagePath)){
            unlink($imagePath);
        }

        $caraousel->delete();

        return redirect()->route('caraousel')->with('message','Caraousel telah berhasil dihapus!');
    }
}
