<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PesantrenController;
use App\Http\Controllers\AsramaController;
use App\Http\Controllers\cetakPDFController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PDFController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes untuk halaman terkait santri
    Route::get('/santri', [SantriController::class, 'index'])->name('santri.index');
    Route::post('/santri/store', [SantriController::class, 'store'])->name('santri.store');
    Route::post('/santri/updateKamar', [SantriController::class, 'updateKamar'])->name('santri.updateKamar');
    
    Route::get('/santri/{id}', [SantriController::class, 'show'])->name('santri.show');
    Route::post('/upload', [SantriController::class, 'updateFoto'])->name('santri.update');

    //UPLOAD PDF
    Route::get('/uploadpdf', [PDFController::class, 'uploadForm'])->name('upload.form');
    Route::post('/uploadpdf', [PDFController::class, 'uploadFile'])->name('upload.file');


    
    //Asrama
    Route::post('/asrama/store', [AsramaController::class, 'store'])->name('asrama.store');
    Route::put('/asrama/{id}', [AsramaController::class, 'update'])->name('asrama.update');

    //Route Kamar
    Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
    Route::post('/kamar/store', [KamarController::class, 'store'])->name('kamar.store');
    Route::put('/kamar/{id}', [KamarController::class, 'update'])->name('kamar.update');



    // Routes untuk halaman lainnya
    Route::get('/pesantren', [PesantrenController::class, 'index'])->name('pesantren');

    //Routes untuk endpoint ;
    Route::get('/get-rooms/{id_asrama}', [KamarController::class, 'getRooms'])->name('get.rooms');
    Route::get('/getInfoKamar/{id_kamar}', [KamarController::class, 'getInfoKamar']);


    
    Route::view('/madrasah', 'madrasah')->name('madrasah');
    Route::view('/keuangan', 'keuangan')->name('keuangan');
    Route::view('/report', 'report')->name('report');
    
    //laporan
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

    //kartu
    Route::get('/kartu', [KartuController::class, 'index'])->name('kartu');

    //Cetak PDF
    Route::get('/cetakPDF', [cetakPDFController::class, 'index'])->name('cetakPDF');

});

require __DIR__.'/auth.php';
