<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

// EAS: Jika nama controller diganti, pastikan nama class dan file disamakan (misal: PegawaiController)
class SiswaController extends Controller
{
    public function index()
    {
        /// Mengambil data dari tabel 'siswa' di PostgreSQL, diurutkan berdasarkan kolom 'nrp'
        $siswa = DB::table('siswa')->orderBy('nrp')->get();
        // Melempar data ke file view 'siswa/index.blade.php'
        return view('siswa.index', compact('siswa')); ///Ini gunanya untuk membungkus variabel $siswa agar bisa dibaca di file index.blade.php
    }

    public function create()
    {
        return view('siswa.create'); // EAS: Ganti target path file view
    }

    public function store(Request $request)
    {
        // EAS: Sesuaikan key Request (huruf besar dari form)
        // dan rule unik database ('unique:nama_tabel,nama_kolom')
        // Teks 'NRP', 'Nama', 'Kelas' (sisi kiri panah) wajib mengikuti
        // atribut name="..." yang kamu tulis di form HTML create.blade.php.
        $request->validate([
            'NRP' => 'required|string|max:10|unique:siswa,nrp',
            'Nama' => 'required|string|max:20',
            'Kelas' => 'required|string|max:5',
            'TanggalLahir' => 'required|date',
        ]);

        // EAS: Ganti nama tabel database. Pastikan key array kiri (huruf kecil sesuai kolom dbeaver)
        // dan kanan ($request->...) sesuai property name atribut input HTML form.
        // Ini adalah cara mengambil data dari form HTML. Jadi huruf besar/kecilnya
        // mengikuti atribut name="..." di form.
        DB::table('siswa')->insert([
            'nrp' => $request->NRP,
            'nama' => $request->Nama,
            'kelas' => $request->Kelas,
            'tanggal_lahir' => $request->TanggalLahir,
        ]);

        // EAS: Ganti target redirect route sukses
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit($nrp)
    {
        // EAS: Ganti nama tabel, parameter primer kolom, dan target path view edit
        // $nrp: Ini adalah variabel penangkap ID/Primary Key yang dikirim dari URL web.php
        // Kata 'nrp' pertama di dalam kurung adalah nama kolom identitas utama di database
        // PostgreSQL kamu (wajib huruf kecil).
        $siswa = DB::table('siswa')->where('nrp', $nrp)->first();

        if (!$siswa) {
            abort(404);
        }

        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $nrp)
    {
        // EAS: Sesuaikan aturan validasi update.
        // Bagian Rule::unique('nama_tabel', 'nama_kolom')->ignore($id_lama, 'nama_kolom_id')
        $request->validate([
            'NRP' => [
                'required',
                'string',
                'max:10',
                Rule::unique('siswa', 'nrp')->ignore($nrp, 'nrp'),
            ],
            'Nama' => 'required|string|max:20',
            'Kelas' => 'required|string|max:5',
            'TanggalLahir' => 'required|date',
        ]);

        // EAS: Sesuaikan target update tabel database PostgreSQL kamu
        DB::table('siswa')
            ->where('nrp', $nrp)
            ->update([
                'nrp' => $request->NRP,
                'nama' => $request->Nama,
                'kelas' => $request->Kelas,
                'tanggal_lahir' => $request->TanggalLahir,
            ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diubah.');
    }

    public function destroy($nrp)
    {
        // EAS: Ganti nama tabel dan kolom pencarian id data yang akan dihapus
        DB::table('siswa')->where('nrp', $nrp)->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
