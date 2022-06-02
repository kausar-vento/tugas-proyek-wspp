<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaLoginController extends Controller
{
    public function homeSiswa()
    {
        return view('murid.authMurid.home_murid');
    }

    public function loginSiswa()
    {
        return view('murid.authMurid.login_murid');
    }

    public function prosesLoginSiswa(Request $request)
    {
        $validasi = $request->validate([
            'nim' => 'required|min:10',
            'password' => 'required|min:5'
        ]);

        if (Auth::guard('websiswa')->attempt($validasi)) {
            $request->session()->regenerate();
            return redirect()->route('siswa.home_murid');
        }   
        return back()->with('gagalLogin', 'Anda Gagal Melakukan Login ');
    }

    public function logoutSiswa(Request $request)
    {
        Auth::guard('websiswa')->logout();
        return redirect()->route('siswa.home_murid');
    }
}
