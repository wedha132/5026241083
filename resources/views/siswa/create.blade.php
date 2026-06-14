@extends('templatebs5')
@section('title', 'Tambah Data Siswa') {{-- EAS: Ganti judul halaman sesuai studi kasus --}}
@section('konten')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                {{-- EAS: Ganti teks header card sesuai kebutuhan --}}
                {{-- bg-success (hijau), bg-dark (hitam), atau bg-danger (merah). --}}
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Form Tambah Siswa</h5>
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

                    {{-- EAS: Ganti action route sesuai entitas baru yang ada di web.php --}}
                    <form action="{{ route('siswa.store') }}" method="POST" onsubmit="return validasiForm()">
                        @csrf

                        {{-- EAS: Ganti id, name, dan label berdasarkan kolom database baru
                        Atribut name="NRP" Sambungnya ke Controller (Bagian Validasi & Insert/Update)
                        Atribut id="NRP" Sambungnya ke JavaScript (SweetAlert) di file yang sama
                        Fungsi old('NRP') Sambungnya ke Controller (Jika validasi gagal)
                        yg aku ubah itu label for, yg mana itu yg ditampilkan ke user, terus 'name'
                        itu bakal nyambung ke controller bagian $request->validate([, sedangkan
                        id ni aku ga perlu bingung aku isi kayak gimana tapi amannya sama kayak name, terus value old('NRP') itu buat nampilin data yang udah diinput user sebelumnya kalo validasi gagal, jadi user ga perlu input ulang semua data, cukup perbaiki data yang salah aja --}}

                        {{-- EAS: Sesuaikan input form dengan kolom database baru (type, maxlength, placeholder)
                        --}}
                        <div class="mb-3">
                            <label for="NRP" class="form-label fw-bold">NRP</label>
                            <input type="text" class="form-control" name="NRP" id="NRP" maxlength="10" value="{{ old('NRP') }}" placeholder="Masukkan NRP">
                        </div>

                        <div class="mb-3">
                            <label for="Nama" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" name="Nama" id="Nama" maxlength="20" value="{{ old('Nama') }}" placeholder="Masukkan nama lengkap">
                        </div>

                        <div class="mb-3">
                            <label for="Kelas" class="form-label fw-bold">Kelas</label>
                            <input type="text" class="form-control" name="Kelas" id="Kelas" maxlength="5" value="{{ old('Kelas') }}" placeholder="Contoh: IF-A">
                        </div>

                        <div class="mb-3">
                            <label for="TanggalLahir" class="form-label fw-bold">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="TanggalLahir" id="TanggalLahir" value="{{ old('TanggalLahir') }}">
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            {{-- EAS: Ganti route kembali sesuai indeks entitas --}}
                            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Simpan Data
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


{{-- let nrp (Nama Variabel): Ini BEBAS. Kamu boleh menamainya apa saja.
Dinamai let x, let dataNrp,atau let inputNrp tidak akan membuat kode error.--}}
{{-- document.getElementById('NRP'): Ini untuk mengambil elemen input
form berdasarkan ID. Pastikan ID ini sesuai dengan atribut id pada input form yang ingin divalidasi. --}}
<script>

    function validasiForm() {
        {{-- EAS: Sesuaikan variabel dan dokumen ID dengan input form baru --}}
        let nrp = document.getElementById('NRP').value.trim();
        let nama = document.getElementById('Nama').value.trim();
        let kelas = document.getElementById('Kelas').value.trim();
        let tanggal = document.getElementById('TanggalLahir').value;

        {{-- EAS: Sesuaikan aturan validasi javascript (panjang karakter & pesan error) --}}
        if (nrp === '') {
            Swal.fire({ title: "Kesalahan Input!", text: "NRP wajib diisi", icon: "error" });
            return false;
        }
        if (nrp.length > 10) {
            Swal.fire({ title: "Kesalahan Input!", text: "NRP maksimal 10 karakter", icon: "error" });
            return false;
        }
        if (nama === '') {
            Swal.fire({ title: "Kesalahan Input!", text: "Nama wajib diisi", icon: "error" });
            return false;
        }
        if (nama.length > 20) {
            Swal.fire({ title: "Kesalahan Input!", text: "Nama maksimal 20 karakter", icon: "error" });
            return false;
        }
        if (kelas === '') {
            Swal.fire({ title: "Kesalahan Input!", text: "Kelas wajib diisi", icon: "error" });
            return false;
        }
        if (kelas.length > 5) {
            Swal.fire({ title: "Kesalahan Input!", text: "Kelas maksimal 5 karakter", icon: "error" });
            return false;
        }
        if (tanggal === '') {
            Swal.fire({ title: "Kesalahan Input!", text: "Tanggal lahir wajib diisi", icon: "error" });
            return false;
        }

        return true;
    }
</script>
@endsection
