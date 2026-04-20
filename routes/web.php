<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "Halo, Selamat datang di tutorial Laravel";
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/pert5', function () {
    return view('pertemuan5');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']); // penting
