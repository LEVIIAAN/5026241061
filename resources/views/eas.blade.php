@extends('template')

@section('title', 'EAS Nilai Peserta')

@section('konten')

    <h3>Kode Soal nilai_peserta</h3>

    <a href="/eas/tambah" class="btn btn-primary mb-3">
        Tambah Data
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>No Peserta</th>
                <th>Nilai Teori</th>
                <th>Nilai Praktek</th>
                <th>Rata-rata</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->ID }}</td>
                    <td>{{ $d->nopeserta }}</td>
                    <td>{{ $d->nilaiteori }}</td>
                    <td>{{ $d->nilaipraktek }}</td>
                    <td>{{ ($d->nilaipraktek + $d->nilaiteori) / 2 }}</td>
                    <td>
                        @if (($d->nilaipraktek + $d->nilaiteori) / 2 < 75)
                            Gagal
                        @else
                            Lulus
                        @endif
                    </td>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
