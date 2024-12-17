<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (session()->has('admin')) {
            $userId = session()->get('admin');
            $user = User::find($userId);
            $data = array(
            'judul_halaman' => 'Dashboard Admin | CMS'
            );
            return view('admin.index', ['data' => $data, 'user' => $user]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }
    }
}
