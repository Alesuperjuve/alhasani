<?php

namespace App\Http\Controllers;

use App\Models\Asrama;

class KamarController extends Controller
{
    public function index()
    {
        $asramas = Asrama::with('kamar')
        ->orderBy('nama_asrama', 'asc')
        ->get(); // Mengambil Asrama beserta Kamar
        
        return view('kamar', compact('asramas'));
    }
}
