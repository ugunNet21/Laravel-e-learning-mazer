<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ELearning;
use App\Models\Guru;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class ELearningController extends Controller
{
    public function index()
    {
        $eLearnings = ELearning::all();
        return view('backend.pages.e_learning.index', compact('eLearnings'));
    }

    public function create()
    {
        $gurus = Guru::all();
        $mataPelajarans = MataPelajaran::all();
        return view('backend.pages.e_learning.create', compact('gurus', 'mataPelajarans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|exists:guru,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tautan' => 'required|url',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        ELearning::create($request->all());

        return redirect()->route('e_learning.index')->with('success', 'ELearning berhasil ditambahkan');
    }

    public function show(ELearning $eLearning)
    {
        return view('backend.pages.e_learning.show', compact('eLearning'));
    }

    public function edit(ELearning $eLearning)
    {
        $gurus = Guru::all();
        $mataPelajarans = MataPelajaran::all();
        return view('backend.pages.e_learning.edit', compact('eLearning', 'gurus', 'mataPelajarans'));
    }

    public function update(Request $request, ELearning $eLearning)
    {
        $request->validate([
            'guru_id' => 'required|exists:guru,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tautan' => 'required|url',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        $eLearning->update($request->all());

        return redirect()->route('e_learning.index')->with('success', 'ELearning berhasil diperbarui');
    }

    public function destroy(ELearning $eLearning)
    {
        $eLearning->delete();

        return redirect()->route('e_learning.index')->with('success', 'ELearning berhasil dihapus');
    }
}
