<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BedakController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('belajar', function () {
    return view('belajar');
});

Route::get('contoh', function () {
    return view('contoh');
});

Route::get('intro', function () {
    return view('intro');
});

Route::get('news', function () {
    return view('news');
});

Route::get('news1', function () {
    return view('news1');
});

Route::get('pert4', function () {
    return view('pertemuan4');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('template', function () {
    return view('template');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//pegawai
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route DB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/bedak', [BedakController::class, 'index'])->name('bedak.index');
Route::get('/bedak/create', [BedakController::class, 'create'])->name('bedak.create');
Route::post('/bedak', [BedakController::class, 'store'])->name('bedak.store');
Route::get('/bedak/{kodebedak}/edit', [BedakController::class, 'edit'])->name('bedak.edit');
Route::put('/bedak/{kodebedak}', [BedakController::class, 'update'])->name('bedak.update');
Route::delete('/bedak/{kodebedak}', [BedakController::class, 'destroy'])->name('bedak.destroy');

// Route CRUD Latihan EAS Keranjang Belanja D4
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/keranjangbelanja/create', [KeranjangBelanjaController::class, 'tambah'])->name('keranjangbelanja.create');
Route::post('/keranjangbelanja', [KeranjangBelanjaController::class, 'store'])->name('keranjangbelanja.store');
Route::delete('/keranjangbelanja/{id}', [KeranjangBelanjaController::class, 'hapus'])->name('keranjangbelanja.destroy');

// Route CRUD Latihan EAS Nilai KUliah E5
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaiKuliahController::class, 'tambah'])->name('nilaikuliah.create');
Route::post('/nilaikuliah', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');
