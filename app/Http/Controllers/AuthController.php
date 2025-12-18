<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Username atau password salah');
        }

        session(['user' => $user]);

        return match ($user->role) {
            'admin' => redirect('/admin'),
            'guru'  => redirect('/guru'),
            'siswa' => redirect('/siswa'),
        };
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
