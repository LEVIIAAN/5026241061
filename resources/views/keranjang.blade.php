@extends('template')

@section('title', 'Keranjang Belanja')

@section('konten')

<a href="/keranjang/tambah" class="btn btn-primary mb-3">
    Beli Barang
</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->ID }}</td>
                <td>{{ $d->KodeBarang }}</td>
                <td>{{ $d->Jumlah }}</td>
                <td>Rp {{ number_format($d->Harga,0,',','.') }}</td>
                <td>Rp {{ number_format($d->Jumlah * $d->Harga,0,',','.') }}</td>
                <td>
                    <a href="/keranjang/tambah"
                        class="btn btn-success btn-sm">
                        Beli
                    </a>

                    <a href="/keranjang/hapus/{{ $d->ID }}"
                        class="btn btn-danger btn-sm">
                        Batal
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
```
