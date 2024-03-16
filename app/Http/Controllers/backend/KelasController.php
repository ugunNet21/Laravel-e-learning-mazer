<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas_admin = Kelas::all();
        return view('backend.pages.kelas.index', compact('kelas_admin'));
    }

    public function create()
    {
        return view('backend.pages.kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tingkat' => 'required|integer|min:1',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        Kelas::create($request->all());

        return redirect()->route('kelas_admin.index')->with('success', 'Kelas berhasil ditambahkan');
    }

    public function show(Kelas $kelas_admin)
    {
        return view('backend.pages.kelas.show', compact('kelas_admin'));
    }

    public function edit(Kelas $kelas_admin)
    {
        return view('backend.pages.kelas.edit', compact('kelas_admin'));
    }

    public function update(Request $request, Kelas $kelas_admin)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tingkat' => 'required|integer|min:1',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        $kelas_admin->update($request->all());

        return redirect()->route('kelas_admin.index')->with('success', 'Kelas berhasil diperbarui');
    }

    public function destroy(Kelas $kelas_admin)
    {
        $kelas_admin->delete();

        return redirect()->route('kelas_admin.index')->with('success', 'Kelas berhasil dihapus');
    }
}
