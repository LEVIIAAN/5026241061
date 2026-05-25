<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($nama)
    {
        return "Halo, nama pegawai: " . $nama;
    }

    public function formulir()
    {
    return view('formulir');
    }

    public function proses(Request $request)
    {
    $nama = $request->input('nama');
    $umur = $request->input('umur');
    $alamat = $request->input('alamat');

    return "Nama: $nama, Umur: $umur, Alamat: $alamat";
    }
}
