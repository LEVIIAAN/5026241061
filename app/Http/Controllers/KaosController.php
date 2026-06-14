<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaosController extends Controller
{
    public function index()
    {
        $kaos = DB::table('kaos')->get();

        return view('kaos', [
            'kaos' => $kaos
        ]);
    }

    public function tambah()
    {
        return view('kaostambah');
    }

    public function store(Request $request)
    {
        DB::table('kaos')->insert([
            'merkkaos' => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/kaos');
    }

    public function edit($id)
    {
        $kaos = DB::table('kaos')
            ->where('kodekaos', $id)
            ->first();

        return view('kaosedit', [
            'kaos' => $kaos
        ]);
    }

    public function update(Request $request)
    {
        DB::table('kaos')
            ->where('kodekaos', $request->kodekaos)
            ->update([
                'merkkaos' => $request->merkkaos,
                'stockkaos' => $request->stockkaos,
                'tersedia' => $request->tersedia
            ]);

        return redirect('/kaos');
    }

    public function hapus($id)
    {
        DB::table('kaos')
            ->where('kodekaos', $id)
            ->delete();

        return redirect('/kaos');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $kaos = DB::table('kaos')
            ->where('merkkaos', 'like', "%".$cari."%")
            ->get();

        return view('kaos', [
            'kaos' => $kaos
        ]);
    }
}
