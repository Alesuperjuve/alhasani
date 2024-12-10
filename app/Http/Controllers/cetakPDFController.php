<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Data\daftarCetakPDF; // Import daftarCetakPDF


class cetakPDFController extends Controller
{
   public function index()
    {
        // Ambil data dari daftarCetakPDF
        $listPDF = daftarCetakPDF::getAll();

        // Kirim variabel listPDF ke view
        return view('cetakPDF', compact('listPDF'));

    }
}
