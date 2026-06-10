@extends('templatebs5')
@section('title', 'Tambah Bedak')
@section('konten')

    <br>
    <h2>Tambah Bedak</h2>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <br>

    <a href="{{ route('bedak.index') }}" class="btn btn-secondary mb-4">
        Kembali
    </a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Bedak
        </div>

        <div class="card-body">
            <form action="{{ route('bedak.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Merk Bedak</label>
                    <input type="text" name="merkbedak" id="merkbedak" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok Bedak</label>
                    <input type="number" name="stockbedak" id="stockbedak" class="form-control">
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="tersedia" name="tersedia" checked>
                    <label class="form-check-label" for="tersedia" id="statusLabel">
                        Tersedia
                    </label>
                </div>

                <br>
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </form>
        </div>
    </div>

    <script>
        const toggle = document.getElementById('tersedia');
        const label = document.getElementById('statusLabel');

        toggle.addEventListener('change', function() {
            if (this.checked) {
                label.textContent = 'Tersedia';
            } else {
                label.textContent = 'Tidak Tersedia';
            }
        });

        function validasiForm() {
            let merk = document.getElementById('merkbedak').value.trim();
            let stok = document.getElementById('stockbedak').value;

            if (merk === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Merk Bedak wajib diisi", icon: "error" });
                return false;
            }
            if (merk.length > 30) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Merk Bedak maksimal 30 karakter", icon: "error" });
                return false;
            }
            if (stok === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Stok Bedak wajib diisi", icon: "error" });
                return false;
            }
            if (stok < 0) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Stok Bedak tidak boleh negatif", icon: "error" });
                return false;
            }
            return true;
        }
    </script>
@endsection
