<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasLoginController extends Controller
{
    public function homePetugas()
    {
        return view('petugas.authPetugas.home_petugas');
    }

    public function loginPetugas()
    {
        return view('petugas.authPetugas.login_petugas');
    }

    public function prosesLoginPetugas(Request $request)
    {
        $validasi = $request->validate([
            'nipd' => 'required',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('webpetugas')->attempt($validasi)) {
            $request->session()->regenerate();
            return redirect()->route('petugas.home_petugas');
        }   
        return back()->with('gagalLogin', 'Anda Gagal Melakukan Login ');
    }

    public function logoutPetugas(Request $request)
    {
        Auth::guard('webpetugas')->logout();
        return redirect()->route('petugas.home_petugas');
    }
}
