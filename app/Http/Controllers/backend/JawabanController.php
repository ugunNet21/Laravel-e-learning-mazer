<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use App\Models\Soal;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function create()
    {
        $soals = Soal::all();
        return view('backend.pages.jawaban.create', compact('soals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'soal_id' => 'required',
            'opsi_jawaban' => 'required',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        Jawaban::create($request->all());

        return redirect()->route('jawaban.index')
            ->with('success', 'Jawaban created successfully.');
    }

    public function index()
    {
        $jawabans = Jawaban::latest()->paginate(5);

        return view('backend.pages.jawaban.index', compact('jawabans'));
    }

    public function edit(Jawaban $jawaban)
    {
        $soals = Soal::all();
        return view('backend.pages.jawaban.edit', compact('jawaban','soals'));
    }

    public function update(Request $request, Jawaban $jawaban)
    {
        $request->validate([
            'soal_id' => 'required',
            'opsi_jawaban' => 'required',
            'jenjang' => 'required|in:SMP,SMA',
        ]);

        $jawaban->update($request->all());

        return redirect()->route('jawaban.index')
            ->with('success', 'Jawaban updated successfully');
    }

    public function show(Jawaban $jawaban)
    {
        return view('backend.pages.jawaban.show', compact('jawaban'));
    }

    public function destroy(Jawaban $jawaban)
    {
        $jawaban->delete();

        return redirect()->route('jawaban.index')
            ->with('success', 'Jawaban deleted successfully');
    }
}
