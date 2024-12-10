<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asrama; // Tambahkan ini untuk mengimpor model Asrama

class AsramaController extends Controller
{
    // Fungsi untuk menyimpan asrama baru
    public function store(Request $request)
    {
        // Validasi input nama_asrama
        $request->validate([
            'nama_asrama' => 'required|string|max:15',
        ]);

        // Menyimpan data asrama ke database
        asrama::create([
            'nama_asrama' => $request->nama_asrama,
        ]);

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('kamar')->with('success', 'Asrama berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $asrama = Asrama::find($id);

        if ($asrama) {
            $asrama->nama_asrama = $request->nama_asrama;
            $asrama->save();

        return redirect()->route('kamar')->with('success', 'Asrama berhasil diperbarui!');
    }

    return redirect()->route('kamar')->with('error', 'Asrama tidak ditemukan!');
    }
}
