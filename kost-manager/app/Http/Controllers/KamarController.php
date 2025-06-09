<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamar.index', compact('kamars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_kamar' => 'required|unique:kamars',
            'harga' => 'required|numeric',
            'status' => 'required',
            'keterangan' => 'nullable|string',
        ]);

        Kamar::create($request->all());

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
        return view('kamar.show', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamar $kamar)
    {
        return view('kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kamar $kamar)
    {
        $request->validate([
            'nomor_kamar' => 'required|unique:kamars,nomor_kamar,'.$kamar->id,
            'harga' => 'required|numeric',
            'status' => 'required',
            'keterangan' => 'nullable|string',
        ]);

        $kamar->update($request->all());

        return redirect()->route('kamar.index')->with('success', 'Data kamar berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil dihapus.');
    }
}
