<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Data\SeederNamaKamar;
use App\Models\Kamar;

class KamarSeeder extends Seeder
{
    public function run()
    {
        // Ambil data nama kamar dari file seederNamaKamar.php
        $namaKamarList = include app_path('Data/seederNamaKamar.php');

        // Shuffle array agar tidak ada redudansi
        shuffle($namaKamarList);

        // Pastikan hanya 30 data yang digunakan
        $namaKamarList = array_slice($namaKamarList, 0, 30);

        $lantaiOptions = ['1', '2', '3'];

        // Masukkan data ke tabel kamar
        foreach ($namaKamarList as $namaKamar) {
            DB::table('kamar')->insert([
                'id_asrama'   => rand(1, 4), // Angka random antara 1 dan 4
                'nama_kamar'  => $namaKamar,
                'kapasitas'   => rand(20, 50), // Angka random 20-50
                'lantai'      => $lantaiOptions[array_rand($lantaiOptions)], // Random lantai 1-3
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
