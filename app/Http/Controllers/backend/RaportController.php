<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Raport;
use App\Models\Siswa;
use Illuminate\Http\Request;

class RaportController extends Controller
{
    public function index(Request $request)
    {
        $raports = Raport::query();

        // Filter berdasarkan jenjang
        if ($request->has('jenjang')) {
            $raports->where('jenjang', $request->jenjang);
        }

        // Filter berdasarkan tahun ajaran
        if ($request->has('tahun_ajaran')) {
            $raports->where('tahun_ajaran', $request->tahun_ajaran);
        }

        // Filter berdasarkan semester
        if ($request->has('semester')) {
            $raports->where('semester', $request->semester);
        }

        $raports = $raports->paginate(10);

        return view('backend.pages.raports.index', compact('raports'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        return view('backend.pages.raports.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'semester' => 'required',
            'tahun_ajaran' => 'required',
            'rata_rata_nilai' => 'required|numeric',
            'keterangan' => 'required',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        Raport::create($request->all());

        return redirect()->route('raports.index')
            ->with('success', 'Raport created successfully.');
    }

    public function show(Raport $raport)
    {
        return view('backend.pages.raports.show', compact('raport'));
    }

    public function edit(Raport $raport)
    {
        $siswas = Siswa::all();
        return view('backend.pages.raports.edit', compact('raport', 'siswas'));
    }

    public function update(Request $request, Raport $raport)
    {
        $request->validate([
            'siswa_id' => 'required',
            'semester' => 'required',
            'tahun_ajaran' => 'required',
            'rata_rata_nilai' => 'required|numeric',
            'keterangan' => 'required',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        $raport->update($request->all());

        return redirect()->route('raports.index')
            ->with('success', 'Raport updated successfully');
    }

    public function destroy(Raport $raport)
    {
        $raport->delete();

        return redirect()->route('raports.index')
            ->with('success', 'Raport deleted successfully');
    }
}
