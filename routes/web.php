<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PesantrenController;
use App\Http\Controllers\AsramaController;



use Illuminate\Support\Facades\Route;

Route::post('/asrama/store', [AsramaController::class, 'store'])->name('asrama.store');

Route::put('/asrama/{id}', [AsramaController::class, 'update'])->name('asrama.update');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes untuk halaman terkait santri
    Route::get('/santri', [SantriController::class, 'index'])->name('santri.index');
    Route::get('/santri/{id}', [SantriController::class, 'show'])->name('santri.show');
    

    //Route Kamar
    Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');

    // Routes untuk halaman lainnya
    Route::get('/pesantren', [PesantrenController::class, 'index'])->name('pesantren');
    
    Route::view('/madrasah', 'madrasah')->name('madrasah');
    Route::view('/keuangan', 'keuangan')->name('keuangan');
    Route::view('/laporan', 'laporan')->name('laporan');
});

require __DIR__.'/auth.php';
