@extends('template')

@section('title', 'Pra EAS')

@section('konten')

<h3 class="text-center mb-4">Data Kaos</h3>

<form action="/kaoscari" method="GET" class="mb-3">
    <label class="form-label">
        Cari Data Kaos :
    </label>

    <input type="text"
           name="cari"
           class="form-control mb-2"
           placeholder="Cari merk kaos">

    <button type="submit"
            class="btn btn-secondary">
        Cari
    </button>
</form>

<a href="/kaostambah"
   class="btn btn-primary mb-3">
    + Tambah Kaos
</a>

<table class="table table-bordered table-striped">

    <tr>
        <th>Kode Kaos</th>
        <th>Merk Kaos</th>
        <th>Stock Kaos</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>

    @foreach($kaos as $k)

    <tr>
        <td>{{ $k->kodekaos }}</td>
        <td>{{ $k->merkkaos }}</td>
        <td>{{ $k->stockkaos }}</td>
        <td>{{ $k->tersedia }}</td>

        <td>
            <a href="/kaosedit/{{ $k->kodekaos }}"
               class="btn btn-warning btn-sm">
                Edit
            </a>

            <a href="/kaoshapus/{{ $k->kodekaos }}"
               class="btn btn-danger btn-sm">
                Hapus
            </a>
        </td>
    </tr>

    @endforeach

</table>

@endsection
