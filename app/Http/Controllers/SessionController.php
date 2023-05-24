<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 

class SessionController extends Controller
{
    public function index()
    {
        return view("sesi.index"); 
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('dashboard')->with('success', 'Berhasil Login'); 
        } else {
            return redirect('sesi')->withErrors('Username dan password salah');
        }
    }

    public function register()
    {
        return view('/sesi/register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data); 

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('dashboard')->with('success', 'Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username dan password salah');
        }
    }
}
