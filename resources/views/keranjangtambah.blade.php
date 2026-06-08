 <!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembelian</title>
</head>
<body>

<h2>Form Pembelian Barang</h2>

<form action="/keranjang/store" method="POST">

    @csrf

    <p>
        Kode Barang
        <br>
        <input type="number" name="kodebarang">
    </p>

    <p>
        Jumlah Pembelian
        <br>
        <input type="number" name="jumlah">
    </p>

    <p>
        Harga Per Item
        <br>
        <input type="number" name="harga">
    </p>

    <button type="submit">
        Simpan
    </button>

</form>

<br>

<a href="/keranjang">
    Kembali
</a>

</body>
</html>
