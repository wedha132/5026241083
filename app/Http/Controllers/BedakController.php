<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BedakController extends Controller
{
    public function index()
    {
        $bedak = DB::table('bedak')->orderBy('kodebedak')->get();
        return view('bedak.index', compact('bedak'));
    }

    public function create()
    {
        return view('bedak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merkbedak' => 'required|string|max:30',
            'stockbedak' => 'required|integer',
        ]);

        DB::table('bedak')->insert([
            'merkbedak' => $request->merkbedak,
            'stockbedak' => $request->stockbedak,
            // Jika toggle switch dicentang nilainya 'Y', jika mati otomatis 'N'
            'tersedia' => $request->has('tersedia') ? 'Y' : 'N',
        ]);

        return redirect()->route('bedak.index')->with('success', 'Data bedak berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $bedak = DB::table('bedak')->where('kodebedak', $id)->first();

        if (!$bedak) {
            abort(404);
        }

        return view('bedak.edit', compact('bedak'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merkbedak' => 'required|string|max:30',
            'stockbedak' => 'required|integer',
        ]);

        DB::table('bedak')
            ->where('kodebedak', $id)
            ->update([
                'merkbedak' => $request->merkbedak,
                'stockbedak' => $request->stockbedak,
                'tersedia' => $request->has('tersedia') ? 'Y' : 'N',
            ]);

        return redirect()->route('bedak.index')->with('success', 'Data bedak berhasil diubah.');
    }

    public function destroy($id)
    {
        DB::table('bedak')->where('kodebedak', $id)->delete();
        return redirect()->route('bedak.index')->with('success', 'Data bedak berhasil dihapus.');
    }
}
