<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use DB;

class PetugasCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.petugas.home_petugas', [
            'data_petugas' => Petugas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.petugas.create_petugas');
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
            'nipd' => 'required|min:3',
            'nama_petugas' => 'required|min:5',
            'password' => 'required|min:5'
        ]);
        $validasiData['password'] = bcrypt($validasiData['password']);

        Petugas::create($validasiData);
        return redirect()->route('admin-petugas.index')->with('success', 'Penambahan Data Petugas Berhasil Dilakukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('petugas')->where('id', $id)->first();;
        return view('admin.petugas.edit_petugas', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasiData = $request->validate([
            'nipd' => 'min:3',
            'nama_petugas' => 'min:5'
        ]);
        Petugas::find($id)->update($request->all());

       return redirect()->route('admin-petugas.index')->with('success', 'Edit Data Petugas Berhasil Dilakukan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Petugas::find($id)->delete();

        return redirect()->route('admin-petugas.index')->with('success', 'Data Petugas Berhasil Dihapus');
    }
}
