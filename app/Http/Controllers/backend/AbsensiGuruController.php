<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AbsensiGuru;
use App\Models\Guru;
use Illuminate\Http\Request;

class AbsensiGuruController extends Controller
{
    public function index()
    {
        $absensiGurus = AbsensiGuru::latest()->paginate(10);
        return view('backend.pages.absensi-guru.index', compact('absensiGurus'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('backend.pages.absensi-guru.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required',
            'tanggal' => 'required|date',
            'kehadiran' => 'required|in:hadir,tidak_hadir,izin',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        AbsensiGuru::create($request->all());

        return redirect()->route('absensi-guru.index')
            ->with('success', 'Absensi guru berhasil ditambahkan.');
    }

    public function show(AbsensiGuru $absensiGuru)
    {
        return view('backend.pages.absensi-guru.show', compact('absensiGuru'));
    }

    public function edit(AbsensiGuru $absensiGuru)
    {
        $gurus = Guru::all();
        return view('backend.pages.absensi-guru.edit', compact('absensiGuru', 'gurus'));
    }

    public function update(Request $request, AbsensiGuru $absensiGuru)
    {
        $request->validate([
            'guru_id' => 'required',
            'tanggal' => 'required|date',
            'kehadiran' => 'required|in:hadir,tidak_hadir,izin',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        $absensiGuru->update($request->all());

        return redirect()->route('absensi-guru.index')
            ->with('success', 'Absensi guru berhasil diperbarui.');
    }

    public function destroy(AbsensiGuru $absensiGuru)
    {
        $absensiGuru->delete();

        return redirect()->route('absensi-guru.index')
            ->with('success', 'Absensi guru berhasil dihapus.');
    }
}
