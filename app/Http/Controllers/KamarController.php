<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asrama;
use App\Models\Kamar;
use App\Models\ViewKamarSantri;

class KamarController extends Controller
{
    public function index()
{
    $asramas = Asrama::with(['kamar.santri']) // Mengambil Kamar beserta Santri
        ->orderBy('id_asrama', 'asc')
        ->get()
        ->map(function ($asrama) {
            $asrama->kamar = $asrama->kamar->map(function ($kamar) {
                $kamar->terisi = $kamar->santri->count(); // Hitung jumlah Santri per Kamar

                // Ambil informasi detail Santri (id_santri, nik, nama_santri, kota)
                $kamar->detail_santri = $kamar->santri->map(function ($santri) {
                    return [
                        'id_santri'     => $santri->id_santri,
                        'nik'           => $santri->nik,
                        'nama_santri'   => $santri->nama_santri,
                        'kota'          => $santri->kota,
                    ];
                });

                return $kamar;
            });
            return $asrama;
        });

    return view('kamar', compact('asramas'));
}


     public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_kamar' => 'required|string|max:20',
            'lantai'     => 'required|integer|min:1',
            'kapasitas'  => 'required|integer|min:1',
            'id_asrama'  => 'required|exists:asrama,id_asrama',
        ]);

        // Simpan data ke database
        Kamar::create([
            'nama_kamar' => $validated['nama_kamar'],
            'lantai'     => $validated['lantai'],
            'kapasitas'  => $validated['kapasitas'],
            'id_asrama'  => $validated['id_asrama'],
        ]);

        // Redirect kembali ke halaman Kamar dengan pesan sukses
        return redirect()->route('kamar')->with('success', 'Kamar berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
            $validated = $request->validate([
                'nama_kamar' => 'required|string|max:20',
                'lantai'     => 'required|integer|min:1',
                'kapasitas'  => 'required|integer|min:1',
                'id_asrama'  => 'required|exists:asrama,id_asrama',
            ]);

            $kamar = Kamar::findOrFail($id);
            $kamar->update($validated);

            return redirect()->route('kamar')->with('success', 'Kamar berhasil diperbarui!');
    }

    //Mengambil data kamar untuk keperluan santri pindah kamar
    

    public function getRooms($id_asrama)
    {
        // Ambil kamar berdasarkan asrama yang dipilih
        $rooms = Kamar::where('id_asrama', $id_asrama)->get();

        // Return data dalam format JSON
        return response()->json($rooms);
    }

    public function getInfoKamar($id_kamar)
    {
        // Ambil nama_kamar dan nama_asrama berdasarkan id_kamar
        $infoKamar = Kamar::with('asrama:id_asrama, nama_asrama')
            ->select('id_kamar', 'nama_kamar', 'id_asrama')
            ->where('id_kamar', $id_kamar)
            ->first()->values()->toArray();
        

        // Pastikan data ditemukan
        if (!$infoKamar) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        // Format hasil data yang akan dikirim
        $hasilinfoKamar = [
            'nama_kamar' => $infoKamar->nama_kamar,
            'nama_asrama' => $infoKamar->asrama->nama_asrama ?? null
        ];

        return response()->json($hasilinfoKamar);
    }


}
