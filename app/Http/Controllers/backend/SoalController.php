<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\MataPelajaran;
use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function create()
    {
        $gurus = Guru::all();
        $mataPelajarans = MataPelajaran::all();
        return view('backend.pages.soal.create', compact('gurus', 'mataPelajarans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required',
            'mata_pelajaran_id' => 'required',
            'jenis_soal' => 'required|in:essay,pilihan_ganda',
            'pertanyaan' => 'required',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        Soal::create($request->all());

        return redirect()->route('soal.index')
            ->with('success', 'Soal created successfully.');
    }

    public function index()
    {
        $soals = Soal::latest()->paginate(5);

        return view('backend.pages.soal.index', compact('soals'));
    }
    public function show(Soal $soal)
    {
        return view('backend.pages.soal.show', compact('soal'));
    }

    public function edit(Soal $soal)
    {
        $gurus = Guru::all();
        $mataPelajarans = MataPelajaran::all();
        return view('backend.pages.soal.edit', compact('soal', 'gurus', 'mataPelajarans'));
    }

    public function update(Request $request, Soal $soal)
    {
        $request->validate([
            'guru_id' => 'required',
            'mata_pelajaran_id' => 'required',
            'jenis_soal' => 'required|in:essay,pilihan_ganda',
            'pertanyaan' => 'required',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        $soal->update($request->all());

        return redirect()->route('soal.index')
            ->with('success', 'Soal updated successfully');
    }

    public function destroy(Soal $soal)
    {
        $soal->delete();

        return redirect()->route('soal.index')
            ->with('success', 'Soal deleted successfully');
    }
}
