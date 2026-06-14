@extends('templatebs5')
@section('title', 'Edit Data Siswa') {{-- EAS: Ganti judul halaman sesuai studi kasus --}}
@section('konten')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                {{-- EAS: Ganti teks header card --}}
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">Form Edit Siswa</h5>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger py-2">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- EAS: Ganti route update & primary key database ($siswa->nrp)
                    Ini menyambung ke routes/web.php
                    Edit: Mengubah data yang sudah ada, jadi wajib menyertakan
                    parameter primary key ($siswa->nrp) sesuai dengan database
                    agar Laravel tahu data siswa
                    mana yang mau ditimpa di database PostgreSQL. --}}
                    <form action="{{ route('siswa.update', $siswa->nrp) }}" method="POST" onsubmit="return validasiForm()">
                        @csrf
                        @method('PUT')

                        {{-- EAS: Ganti name, id, dan property database (huruf kecil dari PostgreSQL) --}}
                        <div class="mb-3">
                            <label for="NRP" class="form-label fw-bold">NRP</label>
                            <input type="text" class="form-control" name="NRP" id="NRP" maxlength="10" value="{{ old('NRP', $siswa->nrp) }}">
                        </div>

                        <div class="mb-3">
                            <label for="Nama" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" name="Nama" id="Nama" maxlength="20" value="{{ old('Nama', $siswa->nama) }}">
                        </div>

                        <div class="mb-3">
                            <label for="Kelas" class="form-label fw-bold">Kelas</label>
                            <input type="text" class="form-control" name="Kelas" id="Kelas" maxlength="5" value="{{ old('Kelas', $siswa->kelas) }}">
                        </div>

                        <div class="mb-3">
                            <label for="TanggalLahir" class="form-label fw-bold">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="TanggalLahir" id="TanggalLahir" value="{{ old('TanggalLahir', $siswa->tanggal_lahir) }}">
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-warning">Update Data</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    {{-- EAS: Validasi ini sama persis dengan create, sesuaikan fieldnya jika entitas diganti --}}
    function validasiForm() {
        let nrp = document.getElementById('NRP').value.trim();
        let nama = document.getElementById('Nama').value.trim();
        let kelas = document.getElementById('Kelas').value.trim();
        let tanggal = document.getElementById('TanggalLahir').value;

        if (nrp === '') { Swal.fire({ title: "Kesalahan!", text: "NRP wajib diisi", icon: "error" }); return false; }
        if (nrp.length > 10) { Swal.fire({ title: "Kesalahan!", text: "NRP maksimal 10 karakter", icon: "error" }); return false; }
        if (nama === '') { Swal.fire({ title: "Kesalahan!", text: "Nama wajib diisi", icon: "error" }); return false; }
        if (nama.length > 20) { Swal.fire({ title: "Kesalahan!", text: "Nama maksimal 20 karakter", icon: "error" }); return false; }
        if (kelas === '') { Swal.fire({ title: "Kesalahan!", text: "Kelas wajib diisi", icon: "error" }); return false; }
        if (kelas.length > 5) { Swal.fire({ title: "Kesalahan!", text: "Kelas maksimal 5 karakter", icon: "error" }); return false; }
        if (tanggal === '') { Swal.fire({ title: "Kesalahan!", text: "Tanggal lahir wajib diisi", icon: "error" }); return false; }

        return true;
    }
</script>
@endsection
