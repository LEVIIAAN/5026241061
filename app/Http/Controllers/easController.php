<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class easController extends Controller
{
    public function index()
    {
        $data = DB::table('nilai_peserta')->get();

        return view('eas', [
            'data' => $data
        ]);
    }

    public function tambah()
    {
        return view('eastambah');
    }

    public function store(Request $request)
    {
        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->NoPeserta,
            'nilaiteori' => $request->NilaiTeori,
            'nilaipraktek' => $request->NilaiPraktek,
        ]);

        return redirect('/eas');
    }

    // public function hapus($id)
    // {
    //     DB::table('keranjangbelanja')
    //         ->where('ID', $id)
    //         ->delete();

    //     return redirect('/keranjang');
    // }
}
