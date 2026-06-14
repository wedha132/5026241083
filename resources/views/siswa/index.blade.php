@extends('templatebs5')
@section('title', 'Daftar Siswa') {{-- EAS: Ganti sesuai nama entitas data --}}
@section('konten')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Data Siswa</h2> {{-- EAS: Ganti Judul halaman --}}
        {{-- EAS: Ganti route ke form tambah data baru --}}
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Siswa
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-dark">
                <tr class="text-center align-middle">
                    {{-- EAS: Ganti th kepala tabel sesuai kolom database baru --}}
                    <th style="width: 15%;">NRP</th>
                    <th style="width: 35%;">Nama</th>
                    <th style="width: 15%;">Kelas</th>
                    <th style="width: 15%;">Tanggal Lahir</th>
                    <th style="width: 20%;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- EAS: Ganti variabel penampung ($siswa) dan properti didalamnya ($row->kolom)
                $siswa: Variabel ini menyambung ke Controller (fungsi index). Nama $siswa ini
                harus sama dengan nama variabel yang kamu panggil di dalam fungsi compact('siswa')
                di Controller.--}}
                @forelse($siswa as $row)
                    <tr>
                        <td class="fw-bold">{{ $row->nrp }}</td> {{-- Kolom lowercase untuk PostgreSQL --}}
                        <td>{{ $row->nama }}</td>
                        <td><span class="badge bg-secondary">{{ $row->kelas }}</span></td>
                        <td>{{ \Carbon\Carbon::parse($row->tanggal_lahir)->format('d-m-Y') }}</td>
                        <td class="text-center">
                            {{-- EAS: Sesuaikan parameter route data ($row->nrp) --}}
                            <a href="{{ route('siswa.edit', $row->nrp) }}" class="btn btn-sm btn-warning me-1">
                                Edit
                            </a>

                            <form action="{{ route('siswa.destroy', $row->nrp) }}" method="POST" style="display:inline;"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        {{-- EAS: Sesuaikan jumlah colspan dengan jumlah kolom th --}}
                        <td colspan="5" class="text-center text-muted py-4">Belum ada data siswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
