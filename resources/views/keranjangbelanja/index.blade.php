@extends('templatebs5')
@section('judul_halaman', 'Keranjang Belanja')
@section('konten')

    <br />

    <a href="{{ route('keranjangbelanja.create') }}" class="btn btn-primary mb-3">Beli Barang Baru</a>

    <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keranjangbelanja as $p)
                <tr>
                    {{-- Properti pemanggilan $p tetap menggunakan huruf kecil menyesuaikan database PostgreSQL --}}
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->kodebarang }}</td>
                    <td>{{ $p->jumlah }}</td>
                    <td>Rp {{ number_format($p->harga) }}</td>
                    <td>Rp {{ number_format($p->jumlah * $p->harga) }}</td>

                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            {{--
                              Mengubah tombol hapus dari tag link <a> menjadi elemen <form> POST + @method('DELETE')
                              agar tidak memicu error "MethodNotAllowedHttpException" pada sistem RESTful.
                            --}}
                            <form action="{{ route('keranjangbelanja.destroy', $p->id) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin membatalkan pembelian barang ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
