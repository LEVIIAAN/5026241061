@extends('template')

@section('title', 'Tambah Nilai EAS')

@section('konten')

    <h3>Kode Soal nilai_peserta</h3>


<a href="/eas" class="btn btn-secondary mb-3">
    Kembali
</a>

<div class="card">
    <div class="card-header">
        Masukkan Nilai EAS
    </div>

    <div class="card-body">

        <form action="/eas/store" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">
                    No Peserta
                </label>

                <input type="textfield"
                       name="NoPeserta"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Nilai Teori
                </label>

                <input type="textfield"
                       name="NilaiTeori"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                        Nilai Praktek
                </label>

                <input type="textfield"
                       name="NilaiPraktek"
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
