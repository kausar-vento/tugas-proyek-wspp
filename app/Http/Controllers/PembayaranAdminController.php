<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranAdminController extends Controller
{
    public function index()
    {
        return view('admin.laporan.home_laporan', [
            'data_pembayaran' => Pembayaran::all()
        ]);
    }

    public function indexPetugas()
    {
        return view('petugas.laporan.home_laporan', [
            'data_pembayaran' => Pembayaran::all()
        ]);
    }
}
