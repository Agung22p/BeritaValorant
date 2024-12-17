<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        if (session()->has('admin')) {
            $userId = session()->get('admin');
            $user = User::find($userId);

            $users = User::orderBy("nama", "ASC")->get();
            $data = array(
                'judul_halaman' => 'Data Pengguna',
            );
            return view("admin.user_index", ['data' => $data, 'users' => $users, 'user' => $user]);
        } else {
            return redirect()->route('auth')->withErrors('Please log in.');
        }
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'level' => 'required',
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);

        $response = ['message' => 'User baru Berhasil ditambahkan.'];
        return redirect()->route('admin.user')->with($response)->withErrors($validatedData);
    }



    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'username' => 'required',
        ]);



        $user = User::findOrFail($id);
        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
        ]);
        return redirect()->route('admin.user')->with('message','user has been edited successfully');
    }
}
