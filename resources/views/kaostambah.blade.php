@extends('template')

@section('title', 'Tambah Kaos')

@section('konten')

<h3 class="text-center mb-4">
    Tambah Data Kaos
</h3>

<form action="/kaosstore" method="POST">

    @csrf

    <div class="mb-3">
        <label>Merk Kaos</label>
        <input type="text"
               name="merkkaos"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Stock Kaos</label>
        <input type="number"
               name="stockkaos"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Tersedia</label>
        <input type="text"
               name="tersedia"
               maxlength="1"
               class="form-control"
               required>
    </div>

    <button type="submit"
            class="btn btn-primary">
        Simpan
    </button>

    <a href="/kaos"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection
