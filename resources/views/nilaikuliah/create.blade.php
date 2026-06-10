@extends('templatebs5')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')

    <a href="{{ route('nilaikuliah.index') }}" class="btn btn-secondary mt-3 mb-4">Kembali</a>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Form Tambah Data Nilai Kuliah
        </div>

        <div class="card-body">
            <form action="{{ route('nilaikuliah.store') }}" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        {{-- PERBAIKAN: Mengubah type menjadi text agar angka nol di awal NRP tidak hilang --}}
                        <input type="text" name="NRP" id="NRP" class="form-control" maxlength="6" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        {{-- PERBAIKAN: Menyamakan penulisan id dengan name (tanpa spasi) --}}
                        <input type="number" name="NilaiAngka" id="NilaiAngka" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="number" name="SKS" id="SKS" class="form-control" required>
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
