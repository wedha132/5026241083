<?php

namespace App\Http\Controllers;
//package

use Illuminate\Http\Request;
//import

class DosenController extends Controller
{
    //
    public function index(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
}

    public function biodata(){
        $nama = "Gusti Ayu Wedha Putri Surya";
        $umur = 35 ;
        $pelajaran = ["Algoritma & Pemograman", "Kalkulus", "Pemograman Web"];
        return view('biodata', ['nama' => $nama,'umur' => $umur, 'matkul' => $pelajaran]);
    }
}
