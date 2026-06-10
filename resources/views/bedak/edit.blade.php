@extends('templatebs5')
@section('title', 'Edit Bedak')
@section('konten')

    <br>
    <h2>Edit Bedak</h2>

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
            Form Edit Data Bedak
        </div>

        <div class="card-body">
            <form action="{{ route('bedak.update', $bedak->kodebedak) }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Kode Bedak (Disabled)</label>
                    <input type="text" value="{{ $bedak->kodebedak }}" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Merk Bedak</label>
                    <input type="text" name="merkbedak" id="merkbedak" class="form-control" value="{{ old('merkbedak', $bedak->merkbedak) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok Bedak</label>
                    <input type="number" name="stockbedak" id="stockbedak" class="form-control" value="{{ old('stockbedak', $bedak->stockbedak) }}">
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="tersedia" name="tersedia"
                        {{ old('tersedia', $bedak->tersedia) == 'Y' ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia" id="statusLabel">
                        {{ old('tersedia', $bedak->tersedia) == 'Y' ? 'Tersedia' : 'Tidak Tersedia' }}
                    </label>
                </div>

                <br>
                <input type="submit" value="Update Data" class="btn btn-primary">
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
