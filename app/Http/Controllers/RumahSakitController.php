<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index()
    {
        $rumahSakits = RumahSakit::all();
        return view('rumah_sakit.index', compact('rumahSakits'));
    }

    public function create()
    {
        return view('rumah_sakit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_rumah_sakit' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'nullable|email',
            'telepon' => 'nullable|string|max:20',
        ]);

        RumahSakit::create($request->all());

        return redirect()->route('rumah-sakit.index')->with('success', 'Data Rumah Sakit berhasil ditambahkan');
    }

    public function edit(RumahSakit $rumahSakit)
    {
        return view('rumah_sakit.edit', compact('rumahSakit'));
    }

    public function update(Request $request, RumahSakit $rumahSakit)
    {
        $request->validate([
            'nama_rumah_sakit' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'nullable|email',
            'telepon' => 'nullable|string|max:20',
        ]);

        $rumahSakit->update($request->all());

        return redirect()->route('rumah-sakit.index')->with('success', 'Data Rumah Sakit berhasil diperbarui');
    }

    public function destroy(RumahSakit $rumahSakit)
    {
        $rumahSakit->delete();
        return response()->json(['success' => true]);
    }
}
