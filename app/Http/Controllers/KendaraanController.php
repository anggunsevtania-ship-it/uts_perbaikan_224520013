<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
       // Mengambil data dari database (Instruksi No. 4)
    $kendaraans = \App\Models\Kendaraan::all(); 
    
    // Memanggil file view yang ada di resources/views/kendaraan/index.blade.php
    return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plat_nomor' => 'required',
            'nama_pemilik' => 'required',
            'merk_kendaraan' => 'required',
            'keluhan' => 'required'
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Data berhasil ditambahkan');
    }

   

   

    public function destroy($id)
    {
        Kendaraan::findOrFail($id)->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Data berhasil dihapus');
    }
}