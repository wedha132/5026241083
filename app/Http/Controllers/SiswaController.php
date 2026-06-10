<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SiswaController extends Controller
{
    public function index()
    {
        // Mengubah 'NRP' menjadi 'nrp'
        $siswa = DB::table('siswa')->orderBy('nrp')->get();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        // Validasi disesuaikan dengan kolom huruf kecil di database
        $request->validate([
            'NRP' => 'required|string|max:10|unique:siswa,nrp',
            'Nama' => 'required|string|max:20',
            'Kelas' => 'required|string|max:5',
            'TanggalLahir' => 'required|date',
        ]);

        // Mapping input form ke kolom database huruf kecil
        DB::table('siswa')->insert([
            'nrp' => $request->NRP,
            'nama' => $request->Nama,
            'kelas' => $request->Kelas,
            'tanggal_lahir' => $request->TanggalLahir,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit($nrp)
    {
        // Mengubah 'NRP' di klausa where menjadi 'nrp'
        $siswa = DB::table('siswa')->where('nrp', $nrp)->first();

        if (!$siswa) {
            abort(404);
        }

        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $nrp)
    {
        $request->validate([
            'NRP' => [
                'required',
                'string',
                'max:10',
                Rule::unique('siswa', 'nrp')->ignore($nrp, 'nrp'), // Kolom DB diubah ke 'nrp'
            ],
            'Nama' => 'required|string|max:20',
            'Kelas' => 'required|string|max:5',
            'TanggalLahir' => 'required|date',
        ]);

        // Update database dengan kolom huruf kecil
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
        // Mengubah 'NRP' menjadi 'nrp'
        DB::table('siswa')->where('nrp', $nrp)->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
