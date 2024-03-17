<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MataPelajaran;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai::latest()->paginate(10);
        return view('backend.pages.nilai.index', compact('nilais'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $mataPelajarans = MataPelajaran::all();
        return view('backend.pages.nilai.create', compact('siswas', 'mataPelajarans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'mata_pelajaran_id' => 'required',
            'nilai_ulangan_harian' => 'nullable|numeric',
            'nilai_ujian_tengah_semester' => 'nullable|numeric',
            'nilai_ujian_akhir_semester' => 'nullable|numeric',
            'sumber_nilai' => 'required|in:e-learning,manual',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        Nilai::create($request->all());

        return redirect()->route('nilai.index')
            ->with('success', 'Nilai created successfully.');
    }

    public function show(Nilai $nilai)
    {
        return view('backend.pages.nilai.show', compact('nilai'));
    }

    public function edit(Nilai $nilai)
    {
        $siswas = Siswa::all();
        $mataPelajarans = MataPelajaran::all();
        return view('backend.pages.nilai.edit', compact('nilai', 'siswas', 'mataPelajarans'));
    }

    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'siswa_id' => 'required',
            'mata_pelajaran_id' => 'required',
            'nilai_ulangan_harian' => 'nullable|numeric',
            'nilai_ujian_tengah_semester' => 'nullable|numeric',
            'nilai_ujian_akhir_semester' => 'nullable|numeric',
            'sumber_nilai' => 'required|in:e-learning,manual',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        $nilai->update($request->all());

        return redirect()->route('nilai.index')
            ->with('success', 'Nilai updated successfully');
    }

    public function destroy(Nilai $nilai)
    {
        $nilai->delete();

        return redirect()->route('nilai.index')
            ->with('success', 'Nilai deleted successfully');
    }
}
