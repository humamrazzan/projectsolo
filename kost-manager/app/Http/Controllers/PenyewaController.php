<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa;
use App\Models\Kamar;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyewas = Penyewa::with('kamar')->get();
        return view('penyewa.index', compact('penyewas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kamars = Kamar::where('status', 'kosong')->get();
        return view('penyewa.create', compact('kamars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'status_perkawinan' => 'nullable|in:kawin,belum kawin',
            'pekerjaan' => 'nullable|string|max:255',
            'no_hp' => 'required|string',
            'tanggal_sewa' => 'required|date',
            'status' => 'required|in:aktif,selesai',
            'kamar_id' => 'required|exists:kamars,id',
        ]);

        $penyewa = Penyewa::create($request->all());

        $kamar = Kamar::find($request->kamar_id);
        if ($kamar) {
            $kamar->status = 'terisi';
            $kamar->save();
        }

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penyewa $penyewa)
    {
        return view('penyewa.show', compact('penyewa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penyewa $penyewa)
    {
        $kamars = Kamar::all();
        return view('penyewa.edit', compact('penyewa', 'kamars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penyewa $penyewa)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'status_perkawinan' => 'nullable|in:kawin,belum kawin',
            'pekerjaan' => 'nullable|string|max:255',
            'no_hp' => 'required|string',
            'tanggal_sewa' => 'required|date',
            'status' => 'required|in:aktif,selesai',
            'kamar_id' => 'required|exists:kamars,id',
        ]);

        $kamarLamaId = $penyewa->kamar_id;

        $penyewa->update($request->all());

        if ($kamarLamaId != $request->kamar_id) {
            // Set kamar lama menjadi kosong
            $kamarLama = Kamar::find($kamarLamaId);
            if ($kamarLama) {
                $kamarLama->status = 'kosong';
                $kamarLama->save();
            }

            // Set kamar baru menjadi terisi
            $kamarBaru = Kamar::find($request->kamar_id);
            if ($kamarBaru) {
                $kamarBaru->status = 'terisi';
                $kamarBaru->save();
            }
        }

        return redirect()->route('penyewa.index')->with('success', 'Data penyewa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penyewa $penyewa)
    {
        $kamar = $penyewa->kamar;

        $penyewa->delete();

        if ($kamar) {
            $kamar->status = 'kosong';
            $kamar->save();
        }

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil dihapus.');
    }
}
