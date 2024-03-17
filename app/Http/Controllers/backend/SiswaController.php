<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create()
    {
        return view('backend.pages.siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')
            ->with('success', 'Siswa created successfully.');
    }

    public function index()
    {
        $siswas = Siswa::latest()->paginate(5);

        return view('backend.pages.siswa.index', compact('siswas'));
    }

    public function edit(Siswa $siswa)
    {
        return view('backend.pages.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')
            ->with('success', 'Siswa updated successfully');
    }

    public function show(Siswa $siswa)
    {
        return view('backend.pages.siswa.show', compact('siswa'));
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswa.index')
            ->with('success', 'Siswa deleted successfully');
    }
}
