<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    // ==========================================
    // 1. MENAMPILKAN HALAMAN INDEX
    // ==========================================
    public function index()
    {
        // Mengambil data dari table nilaikuliah berdasarkan id huruf kecil (PostgreSQL)
        $nilaikuliah = DB::table('nilaikuliah')->orderBy('id')->get();

        // PROSES LOGIKA KONVERSI NILAI ANGKA KE HURUF SESUAI KODE SOAL E5
        foreach ($nilaikuliah as $p) {
            if ($p->nilaiangka <= 40) {
                $p->nilai_huruf = 'D';
            } elseif ($p->nilaiangka >= 41 && $p->nilaiangka <= 60) {
                $p->nilai_huruf = 'C';
            } elseif ($p->nilaiangka >= 61 && $p->nilaiangka <= 80) {
                $p->nilai_huruf = 'B';
            } else {
                $p->nilai_huruf = 'A';
            }
        }

        // Arahkan ke folder 'nilaikuliah' lalu ke file 'index'
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    // ==========================================
    // 2. MENAMPILKAN VIEW FORM TAMBAH DATA
    // ==========================================
    public function tambah()
    {
        // Arahkan ke folder 'nilaikuliah' lalu ke file 'create'
        return view('nilaikuliah.create');
    }

    // ==========================================
    // 3. PROSES INSERT DATA BARU KE DATABASE
    // ==========================================
    public function store(Request $request)
    {
        // Perbaikan: Validasi NRP disesuaikan menjadi string karena tipe datanya CHAR(6)
        $request->validate([
            'NRP'        => 'required|string|max:6',
            'NilaiAngka' => 'required|integer',
            'SKS'        => 'required|integer',
        ]);

        // Sisi kiri array wajib menggunakan HURUF KECIL sejalan dengan skema PostgreSQL milikmu
        DB::table('nilaikuliah')->insert([
            'nrp'        => $request->NRP,
            'nilaiangka' => $request->NilaiAngka,
            'sks'        => $request->SKS,
        ]);

        // Alihkan menggunakan rute bernama (Named Route)
        return redirect()->route('nilaikuliah.index');
    }
}
