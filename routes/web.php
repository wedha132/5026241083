<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);
