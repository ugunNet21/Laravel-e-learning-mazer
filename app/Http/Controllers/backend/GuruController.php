<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('backend.pages.guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('backend.pages.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        Guru::create($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan');
    }

    public function show(Guru $guru)
    {
        return view('backend.pages.guru.show', compact('guru'));
    }

    public function edit(Guru $guru)
    {
        return view('backend.pages.guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        $guru->update($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui');
    }

    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus');
    }
}
