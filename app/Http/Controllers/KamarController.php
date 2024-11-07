<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan query pencarian dari request
        $search = $request->input('search', '');

        // Mengambil data kamar beserta kolom nama_asrama menggunakan join
        $kamarList = Kamar::select('kamar.*', 'asrama.nama_asrama')
                    ->join('asrama', 'asrama.id_asrama', '=', 'kamar.id_asrama')
                    ->when($search, function ($query, $search) {
                        return $query->where('kamar.nama_kamar', 'like', '%' . $search . '%');
                    })
                    ->paginate(5); // Gunakan pagination

        return view('kamar', compact('kamarList', 'search'));
    }
}

