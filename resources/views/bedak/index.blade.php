@extends('templatebs5')
@section('title', 'Data Bedak')
@section('konten')

    <br>
    <h2>Data Bedak</h2>

    @if (session('success'))
        <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('bedak.create') }}" class="btn btn-primary mb-3">Tambah Bedak</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Bedak</th>
                <th>Merk Bedak</th>
                <th>Stock Bedak</th>
                <th>Tersedia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bedak as $row)
                <tr>
                    <td>{{ $row->kodebedak }}</td>
                    <td>{{ $row->merkbedak }}</td>
                    <td>{{ $row->stockbedak }}</td>
                    <td>
                        @if($row->tersedia == 'Y')
                            <span class="badge bg-success">Tersedia</span>
                        @else
                            <span class="badge bg-danger">Tidak Tersedia</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('bedak.edit', $row->kodebedak) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('bedak.destroy', $row->kodebedak) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data bedak.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
