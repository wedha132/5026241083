@extends('templatebs5')
@section('judul_halaman', 'Data Keranjang Belanja')
@section('konten')

    <a href="{{ route('keranjangbelanja.index') }}" class="btn btn-secondary mt-3 mb-4">Kembali</a>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Form Tambah Data Keranjang Belanja
        </div>

        <div class="card-body">
            <form action="{{ route('keranjangbelanja.store') }}" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="number" name="KodeBarang" id="KodeBarang" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="number" name="Jumlah" id="Jumlah" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Harga" class="col-sm-2 col-form-label">Harga per Item</label>
                    <div class="col-sm-10">
                        <input type="number" name="Harga" id="Harga" class="form-control" required>
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
