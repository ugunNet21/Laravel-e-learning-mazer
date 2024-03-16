<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Jenjang;
use Illuminate\Http\Request;

class JenjangController extends Controller
{
    public function index()
    {
        $jenjangs = Jenjang::all();
        return view('backend.pages.jenjang.index', compact('jenjangs'));
    }

    public function create()
    {
        return view('backend.pages.jenjang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        Jenjang::create($request->all());

        return redirect()->route('jenjang.index')
            ->with('success', 'Jenjang created successfully.');
    }

    public function edit(Jenjang $jenjang)
    {
        return view('backend.pages.jenjang.edit', compact('jenjang'));
    }

    public function update(Request $request, Jenjang $jenjang)
    {
        $request->validate([
            'nama' => 'required',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        $jenjang->update($request->all());

        return redirect()->route('jenjang.index')
            ->with('success', 'Jenjang updated successfully');
    }

    public function show(Jenjang $jenjang)
    {
        return view('backend.pages.jenjang.show', compact('jenjang'));
    }

    public function destroy(Jenjang $jenjang)
    {
        $jenjang->delete();

        return redirect()->route('jenjang.index')
            ->with('success', 'Jenjang deleted successfully');
    }
}
