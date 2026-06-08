<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $data = DB::table('keranjangbelanja')->get();

        return view('keranjang', [
            'data' => $data
        ]);
    }

    public function tambah()
    {
        return view('keranjangtambah');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);

        return redirect('/keranjang');
    }

    public function hapus($id)
    {
        DB::table('keranjangbelanja')
            ->where('ID', $id)
            ->delete();

        return redirect('/keranjang');
    }
}
