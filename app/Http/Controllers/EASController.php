<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    // ==========================================
    // 1. MENAMPILKAN HALAMAN INDEX
    // ==========================================
    public function index()
    {
        // Mengambil data dari table nilai_peserta berdasarkan id huruf kecil (PostgreSQL)
        $eas = DB::table('nilai_peserta')->orderBy('id')->get();

        // Arahkan ke folder 'nilai_peserta' lalu ke file 'index'
        return view('eas.index', ['eas' => $eas]);
    }

    // ==========================================
    // 2. MENAMPILKAN VIEW FORM TAMBAH DATA (BELI)
    // ==========================================
    public function create()
    {
        // Arahkan ke folder 'nilai_peserta' lalu ke file 'create'
        return view('eas.create');
    }

    // ==========================================
    // 3. PROSES INSERT DATA BARU KE DATABASE
    // ==========================================
    public function store(Request $request)
    {
        // Validasi opsional agar input data tidak kosong/bertipe teks
        $request->validate([
            'NoPeserta'     => 'required|string|max:5',
            'NilaiTeori'      => 'required|string',
            'NilaiPraktek' => 'required|string',
        ]);

        // Sisi kiri array wajib menggunakan HURUF KECIL sejalan dengan skema PostgreSQL milikmu
        DB::table('nilaipeserta')->insert([
            'nopeserta'     => $request->NoPeserta,
            'nilaiteori'      => $request->NilaiTeori,
            'nilaipraktek' => $request->NilaiPraktek,
        ]);

        // Alihkan menggunakan rute bernama (Named Route)
        return redirect()->route('eas.index');
    }

}
