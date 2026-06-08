<!DOCTYPE html>
<html>

<head>
    <title>Keranjang Belanja</title>
</head>

<body>

    <h2>Data Keranjang Belanja</h2>

    <a href="/keranjang/tambah">
        Beli Barang
    </a>

    <br><br>

    <table border="1" cellpadding="10">

        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @foreach ($data as $d)
            <tr>
                <td>{{ $d->ID }}</td>

                <td>{{ $d->KodeBarang }}</td>

                <td>{{ $d->Jumlah }}</td>

                <td>
                    Rp {{ number_format($d->Harga, 0, ',', '.') }}
                </td>

                <td>
                    Rp {{ number_format($d->Jumlah * $d->Harga, 0, ',', '.') }}
                </td>

                <td>
                    <a href="/keranjang/tambah">
                        Beli
                    </a>
                    <a href="/keranjang/hapus/{{ $d->ID }}">
                        Batal
                    </a>
                </td>
            </tr>
        @endforeach

    </table>

</body>

</html>
