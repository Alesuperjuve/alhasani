<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
use App\Models\PDFData;

class PDFController extends Controller
{
    public function uploadForm()
    {
        return view('uploadpdf');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'pdf_file' => 'required|mimes:pdf|max:2048', // Maksimal 2MB
        ]);

        $file = $request->file('pdf_file');
        $filePath = $file->store('pdfs'); // Simpan di storage/app/pdfs
        $fileName = $file->getClientOriginalName();

        // Baca isi PDF
        $parser = new Parser();
        $pdf = $parser->parseFile(storage_path('app/' . $filePath));
        $text = $pdf->getText();

        // Simpan ke database
        PDFData::create([
            'file_name' => $fileName,
            'content' => $text,
        ]);

        return back()->with('success', 'PDF berhasil diunggah dan diproses.');
    }
}

