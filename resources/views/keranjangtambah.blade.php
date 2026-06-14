@extends('template')

@section('title', 'Tambah Pembelian')

@section('konten')

<a href="/keranjang" class="btn btn-secondary mb-3">
    Kembali
</a>

<div class="card">
    <div class="card-header">
        Form Pembelian Barang
    </div>

    <div class="card-body">

        <form action="/keranjang/store" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">
                    Kode Barang
                </label>

                <input type="number"
                       name="kodebarang"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Jumlah Pembelian
                </label>

                <input type="number"
                       name="jumlah"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Harga Per Item
                </label>

                <input type="number"
                       name="harga"
                       class="form-control"
                       required>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

        </form>

    </div>
</div>

@endsection
