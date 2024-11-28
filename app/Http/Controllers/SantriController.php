<?php

namespace App\Http\Controllers;

use App\Models\Santri; // Pastikan model Santri sudah ada
use App\Helpers\FruitHelper;
use Illuminate\Http\Request;


class SantriController extends Controller
{
    public function index(Request $request)
    {
        // Dapatkan input pencarian jika ada
        $search = $request->input('search');

        // Ambil data dari tabel santri dengan pencarian, relasi, dan pagination
        $santri = Santri::with(['kamar.asrama'])
            ->when($search, function ($query, $search) {
                return $query->where('nama_santri', 'like', "%{$search}%")
                             ->orWhere('alamat', 'like', "%{$search}%")
                             ->orWhere('kota', 'like', "%{$search}%");
            })
            ->orderBy('nama_santri', 'asc')
            ->paginate(20); // Batasi 20 data per halaman

        // Kirim data ke view
        return view('santri', compact('santri', 'search'));
        
    }

    public function show($id)
    {
        $santri = Santri::with(['kamar.asrama'])->findOrFail($id);
        return response()->json($santri);
    }
}
