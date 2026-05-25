@extends('master')

@section('title', 'Data Pegawai')
@section('konten')
    <center>

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Data Pegawai</h3>
        <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai"class="form=control">
            <input type="submit" value="CARI" class="btn btnk-secondary">
        </form>

        <br />
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>

            </tr>
            @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>

                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="/pegawai/tambah" class="btn btn-primary">Tambah Pegawai Baru</a>

    </center>

@endsection
