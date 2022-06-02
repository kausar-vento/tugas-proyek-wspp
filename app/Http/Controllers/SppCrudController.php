<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;
use DB;

class SppCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.spp.home_spp', [
            'data_spp' => Spp::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.spp.create_spp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'tahun_ajaran' => 'required|max:5',
            'bulan' => 'required',
            'batas_pembayaran' => 'required',
            'jumlah_pembayaran' => 'required'
        ]);

        SPP::create($validasiData);
        
        return redirect()->route('admin-spp.index')->with('success', 'Penambahan Data Spp Berhasil Dilakukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function show(Spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('spps')->where('id', $id)->first();;
        return view('admin.spp.edit_spp', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasiData = $request->validate([
            'tahun_ajaran' => 'max:5',
            'bulan' => '',
            'batas_pembayaran' => '',
            'jumlah_pembayaran' => ''
        ]);

        Spp::find($id)->update($request->all());

        return redirect()->route('admin-spp.index')->with('success', 'Edit Data Spp Berhasil Dilakukan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Spp::find($id)->delete();

        return redirect()->route('admin-spp.index')->with('success', 'Data Spp Berhasil Dihapus');
    }
}
