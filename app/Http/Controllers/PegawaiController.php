<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$pegawais = Pegawai::all();
    	return view('pegawai/index')->with('pegawais', $pegawais);
    }

    public function tambah()
    {
    	return view('pegawai/tambah');
    }

    public function menambahkan(Request $request)
    {
    	Pegawai::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat,
    		'jabatan' => $request->jabatan,
    		'gaji_bulan1' => $request->gajibulan1,
    		'gaji_bulan2' => $request->gajibulan2,
    		'gaji_bulan3' => $request->gajibulan3
    	]);
    	return redirect('/pegawai');
    }

    public function edit($id)
    {
    	$pegawai = Pegawai::find($id);
    	return view('pegawai/edit')->with('pegawai', $pegawai);
    }

    public function update(Request $request, $id)
    {
    	$pegawai = Pegawai::find($id);
    	$pegawai->nama = $request->nama;
    	$pegawai->alamat = $request->alamat;
    	$pegawai->jabatan = $request->jabatan;
    	$pegawai->gaji_bulan1 = $request->gajibulan1;
    	$pegawai->gaji_bulan2 = $request->gajibulan2;
    	$pegawai->gaji_bulan3 = $request->gajibulan3;
    	$pegawai->save();
    	return redirect('/pegawai');
    }

    public function hapus($id)
    {
    	$pegawai = Pegawai::find($id);
    	$pegawai->delete();
    	return redirect('/pegawai');
    }
}
