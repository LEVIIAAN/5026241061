<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;




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
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
