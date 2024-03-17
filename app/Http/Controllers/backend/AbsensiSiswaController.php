<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AbsensiSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsensiSiswaController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter');

        $absensiSiswa = AbsensiSiswa::when($filter, function ($query) use ($filter) {
            $query->where('jenjang', $filter);
        })->paginate(10);

        return view('backend.pages.absensi_siswa.index', compact('absensiSiswa', 'filter'));
    }
    public function show($id)
    {
        $absensi_siswa = AbsensiSiswa::findOrFail($id);
        return view('backend.pages.absensi_siswa.show', compact('absensi_siswa'));
    }
    public function create()
    {
        $siswas = Siswa::all();
        return view('backend.pages.absensi_siswa.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'tanggal' => 'required|date',
            'kehadiran' => 'required|in:hadir,tidak_hadir,izin',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        AbsensiSiswa::create($request->all());

        return redirect()->route('absensi_siswa.index')
            ->with('success', 'Absensi siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $absensi_siswa = AbsensiSiswa::findOrFail($id);
        $siswas = Siswa::all();
        return view('backend.pages.absensi_siswa.edit', compact('absensi_siswa','siswas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'kehadiran' => 'required',
        ]);

        $absensi_siswa = AbsensiSiswa::findOrFail($id);
        $absensi_siswa->update($request->all());

        return redirect()->route('absensi_siswa.index')
            ->with('success', 'Absensi siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $absensiSiswa = AbsensiSiswa::findOrFail($id);
        $absensiSiswa->delete();

        return redirect()->route('absensi_siswa.index')
            ->with('success', 'Absensi siswa berhasil dihapus');
    }
}
