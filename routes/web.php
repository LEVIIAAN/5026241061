<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\KaosController;
use App\Http\Controllers\SiswaController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "Halo, Selamat datang di tutorial Laravel";
});

Route::get('/pert5', function () {
    return view('pertemuan5');
});

Route::get('/kontak', function () {
    return view('kontak');
});


Route::get('/formulir', [PegawaiController::class, 'formulir']);

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']); // penting
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//CRUD Pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

//CRUD Keranjang Tambah
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjang/hapus/{id}', [KeranjangBelanjaController::class, 'hapus']);

//CRUD Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store']);

//KodeKaos
Route::get('/kaos', [KaosController::class, 'index']);
Route::get('/kaostambah', [KaosController::class, 'tambah']);
Route::post('/kaosstore', [KaosController::class, 'store']);
Route::get('/kaosedit/{id}', [KaosController::class, 'edit']);
Route::post('/kaosupdate', [KaosController::class, 'update']);
Route::get('/kaoshapus/{id}', [KaosController::class, 'hapus']);
Route::get('/kaoscari', [KaosController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
