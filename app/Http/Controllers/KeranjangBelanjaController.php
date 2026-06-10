<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // ==========================================
    // 1. MENAMPILKAN HALAMAN INDEX
    // ==========================================
    public function index()
    {
        // Mengambil data dari table keranjangbelanja berdasarkan id huruf kecil (PostgreSQL)
        $keranjangbelanja = DB::table('keranjangbelanja')->orderBy('id')->get();

        // Arahkan ke folder 'keranjangbelanja' lalu ke file 'index'
        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // ==========================================
    // 2. MENAMPILKAN VIEW FORM TAMBAH DATA (BELI)
    // ==========================================
    public function tambah()
    {
        // Arahkan ke folder 'keranjangbelanja' lalu ke file 'create'
        return view('keranjangbelanja.create');
    }

    // ==========================================
    // 3. PROSES INSERT DATA BARU KE DATABASE
    // ==========================================
    public function store(Request $request)
    {
        // Validasi opsional agar input data tidak kosong/bertipe teks
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah'     => 'required|integer',
            'Harga'      => 'required|integer',
        ]);

        // Sisi kiri array wajib menggunakan HURUF KECIL sejalan dengan skema PostgreSQL milikmu
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->KodeBarang,
            'jumlah'     => $request->Jumlah,
            'harga'      => $request->Harga,
        ]);

        // Alihkan menggunakan rute bernama (Named Route)
        return redirect()->route('keranjangbelanja.index');
    }

    // ==========================================
    // 4. PROSES HAPUS DATA (BATAL PESANAN)
    // ==========================================
    public function hapus($id)
    {
        // Gunakan kolom 'id' huruf kecil untuk mencocokkan record PostgreSQL kamu
        DB::table('keranjangbelanja')->where('id', $id)->delete();

        // Alihkan menggunakan rute bernama (Named Route) [cite: 14]
        return redirect()->route('keranjangbelanja.index');
    }
}
