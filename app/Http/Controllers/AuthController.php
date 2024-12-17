<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index(){
        $data = array(
            'judul_halaman' => 'Login'
        );
        return view('login', ['data' => $data]);
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('username', $request->username)->first();

            if ($user && password_verify($request->password, $user->password)) {
                $user->update([
                    'recent_login' => Carbon::now()->toDateTimeString(),
                ]);
                if ($user->level === 'kontributor') {
                    session(['kontributor' => $user->id]);
                    return redirect()->route('dashboard');
                } elseif ($user->level === 'admin') {
                    session(['admin' => $user->id]);
                    return redirect()->route('admin.index');
                }
            } else {
                return back()->withErrors('Someting Wrong!');
            }
    }

    public function logout(Request $request)
    {
        session()->flush();

        return redirect()->route('auth');
    }
}
