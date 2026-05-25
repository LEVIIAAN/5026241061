<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index()
    {
        //semgambi data dari table pgegawai
        //pegawai = DB:table('pegawai') ->get(); //jika tidak pakai paginate
        $pegawai = DB::table('pegawai')->paginate();

        return view('index', ['pegawai' => $pegawai]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        return view('index', ['pegawai' => $pegawai]);
    }

    // TAMBAHKAN DI SINI
    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = DB::table('pegawai')
            ->where('pegawai_id', $id)
            ->get();

        return view('edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        DB::table('pegawai')
            ->where('pegawai_id', $request->id)
            ->update([
                'pegawai_nama' => $request->nama,
                'pegawai_jabatan' => $request->jabatan,
                'pegawai_umur' => $request->umur,
                'pegawai_alamat' => $request->alamat
            ]);

        return redirect('/pegawai');
    }

    public function hapus($id)
    {
        DB::table('pegawai')
            ->where('pegawai_id', $id)
            ->delete();

        return redirect('/pegawai');
    }
}
