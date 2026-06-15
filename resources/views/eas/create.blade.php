@extends('templatebs5')
@section('judul_halaman', 'Kode Soal: nilai_peserta')
@section('konten')

    <a href="{{ route('eas.index') }}" class="btn btn-secondary mt-3 mb-4">Kembali</a>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Form Tambah Data Nilai Peserta
        </div>

        <div class="card-body">
            <form action="{{ route('eas.store') }}" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="No Peserta" class="col-sm-2 col-form-label">No Peserta</label>
                    <div class="col-sm-10">
                        <input type="text" name="NoPeserta" id="NoPeserta" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Nilai Teori" class="col-sm-2 col-form-label">Nilai Teori</label>
                    <div class="col-sm-10">
                        <input type="text" name="NilaiTeori" id="NilaiTeori" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Nilai Praktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                    <div class="col-sm-10">
                        <input type="text" name="NilaiPraktek" id="NilaiPraktek" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-success">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
