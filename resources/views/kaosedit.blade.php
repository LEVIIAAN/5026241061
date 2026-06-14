@extends('template')

@section('title', 'Edit Kaos')

@section('konten')

<h3 class="text-center mb-4">
    Edit Data Kaos
</h3>

<form action="/kaosupdate" method="POST">

    @csrf

    <input type="hidden"
           name="kodekaos"
           value="{{ $kaos->kodekaos }}">

    <div class="mb-3">
        <label>Merk Kaos</label>

        <input type="text"
               name="merkkaos"
               class="form-control"
               value="{{ $kaos->merkkaos }}"
               required>
    </div>

    <div class="mb-3">
        <label>Stock Kaos</label>

        <input type="number"
               name="stockkaos"
               class="form-control"
               value="{{ $kaos->stockkaos }}"
               required>
    </div>

    <div class="mb-3">
        <label>Tersedia</label>

        <input type="text"
               name="tersedia"
               maxlength="1"
               class="form-control"
               value="{{ $kaos->tersedia }}"
               required>
    </div>

    <button type="submit"
            class="btn btn-primary">
        Update
    </button>

    <a href="/kaos"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection
