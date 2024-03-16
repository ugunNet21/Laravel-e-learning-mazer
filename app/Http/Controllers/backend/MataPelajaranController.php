<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mataPelajarans = MataPelajaran::all();
        return view('backend.pages.mapel.index', compact('mataPelajarans'));
    }

    public function create()
    {
        return view('backend.pages.mapel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        MataPelajaran::create($request->all());

        return redirect()->route('mapel.index')->with('success', 'Mata Pelajaran berhasil ditambahkan');
    }

    public function show(MataPelajaran $mapel)
    {
        return view('backend.pages.mapel.show', compact('mapel'));
    }

    public function edit(MataPelajaran $mapel)
    {
        return view('backend.pages.mapel.edit', compact('mapel'));
    }

    public function update(Request $request, MataPelajaran $mapel)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        $mapel->update($request->all());

        return redirect()->route('mapel.index')->with('success', 'Mata Pelajaran berhasil diperbarui');
    }

    public function destroy(MataPelajaran $mapel)
    {
        $mapel->delete();

        return redirect()->route('mapel.index')->with('success', 'Mata Pelajaran berhasil dihapus');
    }
}
