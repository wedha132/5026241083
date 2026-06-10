@extends('templatebs5')
@section('judul_halaman', 'Nilai Kuliah')
@section('konten')

    <br />

    <a href="{{ route('nilaikuliah.create') }}" class="btn btn-primary mb-3">Tambah Nilai Kuliah</a>

    <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilaikuliah as $p)
                <tr>
                    {{-- Properti pemanggilan $p tetap menggunakan huruf kecil menyesuaikan database PostgreSQL --}}
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nrp }}</td>
                    <td>{{ $p->nilaiangka }}</td>
                    <td>{{ $p->sks }}</td>
                    {{-- Menampilkan field buatan hasil konversi di controller --}}
                    <td><strong class="text-danger">{{ $p->nilai_huruf }}</strong></td>
                    {{-- Bobot dihitung otomatis dan diformat dengan pemisah ribuan --}}
                    <td>{{ number_format($p->nilaiangka * $p->sks, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
