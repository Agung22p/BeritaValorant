<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (session()->has('kontributor')) {
            $userId = session()->get('kontributor');
            $user = User::find($userId);
            $data = array(
                'judul_halaman' => 'Dashboard | CMS'
            );
            return view('dashboard', ['data' => $data, 'user' => $user]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }



    }
}
