@extends('templatebs5')
@section('judul_halaman', 'Kode Soal: nilai_peserta')
@section('konten')

    <br />
    <h2>Data Nilai Peserta</h2>
    <a href="{{ route('eas.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>No Peserta</th>
                <th>Nilai Teori</th>
                <th>Nilai Praktek</th>
                <th>Rata-Rata</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eas as $p)
                <tr>
                    {{-- Properti pemanggilan $p tetap menggunakan huruf kecil menyesuaikan database PostgreSQL --}}
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nopeserta }}</td>
                    <td>{{ $p->nilaiteori }}</td>
                    <td>{{ $p->nilaipraktek }}</td>
                    <td>{{ number_format(($p->nilaiteori + $p->nilaipraktek) / 2, 2, ',', '.') }}</td>
                    <td>
                        @if(($p->nilaiteori + $p->nilaipraktek) / 2 >= 75)
                            <span class="badge bg-success">Lulus</span>
                        @else
                            <span class="badge bg-danger">Gagal</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
