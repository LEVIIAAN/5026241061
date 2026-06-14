@extends('template')

@section('title', 'Input Nilai Mahasiswa')

@section('konten')

<h3>Tambah Data Nilai</h3>

<form action="/nilaikuliah/store" method="POST">

    @csrf

    <div class="mb-3">
        <label class="form-label">NRP</label>
        <input type="text"
               name="NRP"
               class="form-control"
               placeholder="Masukkan NRP"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Nilai Angka</label>
        <input type="number"
               name="NilaiAngka"
               class="form-control"
               placeholder="Masukkan Nilai"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="number"
               name="SKS"
               class="form-control"
               placeholder="Masukkan SKS"
               required>
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    <a href="/nilaikuliah" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection
