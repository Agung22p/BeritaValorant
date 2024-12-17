<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Saran;
use App\Models\Galeri;
use App\Models\Konten;
use App\Models\Kategori;
use App\Models\Caraousel;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $config = Konfigurasi::first();

        $kategories = Kategori::orderBy("nama_kategori", "ASC")->get();

        $caraousel = Caraousel::get();

        $page = $request->query('page');
        $size = $request->query('size');
        if (!$page)
            $page = 1;
        if(!$size)
            $size = 5;

        $q_kategori = $request->query("kategori");

        if(request()->has('search')){
            $search = request()->get('search', '');
            $kontens = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
                            ->select('kategori.nama_kategori', 'konten.*')
                            ->where(function($query) use($q_kategori){
                            $query->whereIn('id_kategori',explode(',',$q_kategori))->orWhereRaw("'".$q_kategori."'=''");
                            })
                            ->where('judul','like', '%' . $search . '%')
                            ->paginate($size);
        } else {
            $kontens = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
                            ->select('kategori.nama_kategori', 'konten.*')
                            ->where(function($query) use($q_kategori){
                            $query->whereIn('id_kategori',explode(',',$q_kategori))->orWhereRaw("'".$q_kategori."'=''");
                            })
                            ->paginate($size);
        }

        $recent_kontens = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
                ->orderBy('created_at', "DESC")
                ->select('kategori.nama_kategori', 'konten.*')
                ->where(function($query) use($q_kategori){
                    $query->whereIn('id_kategori',explode(',',$q_kategori))->orWhereRaw("'".$q_kategori."'=''");
                    })
                ->limit(5)
                ->get();



        return view('home', ['config' => $config,'page' => $page,'q_kategori' => $q_kategori , 'size' => $size ,  'kategories' => $kategories, 'caraousels' => $caraousel, 'kontens' => $kontens, 'recent_kontens' => $recent_kontens]);

    }

    public function kategori($id)
    {
        $config = Konfigurasi::first();

        $kategories = Kategori::orderBy("nama_kategori", "ASC")->get();

        $caraousel = Caraousel::get();

        $kategori = Kategori::where('id', $id)->first();

        $kontens = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
                        ->select('kategori.nama_kategori', 'konten.*')
                        ->where('id_kategori', $id)
                        ->get();



        $judul = $kategori->nama_kategori . " | Xizzu";


        return view('kategori_konten', ['judul' => $judul ,'kategori' => $kategori, 'config' => $config, 'kategories' => $kategories, 'caraousels' => $caraousel, 'kontens' => $kontens]);

    }

    public function detail($slug, Request $request)
    {
        $config = Konfigurasi::first();

        $kategories = Kategori::orderBy("nama_kategori", "ASC")->get();

        $caraousel = Caraousel::get();

        $kontens = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
        ->select('kategori.nama_kategori', 'konten.*')
        ->where('slug', $slug)
        ->first();
        $judul = $kontens->judul . " | Xizzu";

        if ($q_kategori = $request->query("kategori")){
            $recent_kontens = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
                            ->orderBy('created_at', "DESC")
                            ->select('kategori.nama_kategori', 'konten.*')
                            ->where(function($query) use($q_kategori){
                                $query->whereIn('id_kategori',explode(',',$q_kategori))->orWhereRaw("'".$q_kategori."'=''");
                                })
                            ->limit(5)
                            ->get();
        } else {
            $recent_kontens = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
                            ->orderBy('created_at', "DESC")
                            ->select('kategori.nama_kategori', 'konten.*')
                            ->limit(5)
                            ->get();
        }

        return view('detail', ['judul' => $judul, 'config' => $config,'q_kategori' => $q_kategori, 'kategories' => $kategories, 'kontens' => $kontens, 'recent_kontens' => $recent_kontens]);

    }

    public function galeri(Request $request)
    {
        $config = Konfigurasi::first();

        $kategories = Kategori::orderBy("nama_kategori", "ASC")->get();

        $galeris = Galeri::orderBy('tanggal', "DESC")->get();

        if ($q_kategori = $request->query("kategori")){
            $recent_kontens = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
                            ->orderBy('created_at', "DESC")
                            ->select('kategori.nama_kategori', 'konten.*')
                            ->where(function($query) use($q_kategori){
                                $query->whereIn('id_kategori',explode(',',$q_kategori))->orWhereRaw("'".$q_kategori."'=''");
                                })
                            ->limit(5)
                            ->get();
        } else {
            $recent_kontens = Konten::join('kategori', 'konten.id_kategori', '=', 'kategori.id')
                            ->orderBy('created_at', "DESC")
                            ->select('kategori.nama_kategori', 'konten.*')
                            ->limit(5)
                            ->get();
        }

        $judul = "Galeri | Xizzu";

        return view('galeri', ['judul' => $judul, 'galeris' => $galeris , 'config' => $config,'q_kategori' => $q_kategori, 'kategories' => $kategories, 'recent_kontens' => $recent_kontens]);

    }

    public function simpan_saran(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'isi_saran' => 'required',
        ]);

        $saran = Saran::create([
            'isi_saran' => $request->isi_saran,
            'tanggal' => date('Y-m-d'),
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        $response = ['message' => 'galeri baru Berhasil ditambahkan.'];
        return redirect()->route('home')->with($response)->withErrors($validatedData);
    }

}
