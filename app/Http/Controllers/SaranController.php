<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
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

            $saran = Saran::get();
            $data = array(
                'judul_halaman' => 'Data Saran',
            );
            return view("saran", ['data' => $data, 'sarans' => $saran, 'user' => $user]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }
    }

    public function delete($id_saran)
    {
        $saran = Saran::find($id_saran);
        $saran->delete();
        return redirect()->route('admin.saran')->with('message','Saran sudah berhasil di hapus!');
    }

    public function delete_all()
    {
        $sarans = Saran::getQuery()->delete();
        return redirect()->route('admin.saran')->with('message','Saran sudah berhasil di hapus!');
    }
}
