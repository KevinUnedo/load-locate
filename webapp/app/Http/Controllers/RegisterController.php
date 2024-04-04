<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }
    public function register(Request $request)
    {
        // Validasi request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|string',
            'username' => 'required|string|unique:users',
            'password' => 'required|string',
        ]);

        // Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        // Redirect ke halaman beranda setelah registrasi berhasil
        return redirect('/home')->with('success', 'Registrasi berhasil. Selamat datang, ' . $user->name . '!');
    }
}
