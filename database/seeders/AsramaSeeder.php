<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AsramaSeeder extends Seeder
{
    public function run()
    {
        // Contoh data asrama dengan nama-nama buah
        $asramaData = [
            ['id_asrama' => 1, 'nama_asrama' => 'Jeruk', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 2, 'nama_asrama' => 'Mangga', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 3, 'nama_asrama' => 'Apel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 4, 'nama_asrama' => 'Pisang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 5, 'nama_asrama' => 'Semangka', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 6, 'nama_asrama' => 'Strawberry', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 7, 'nama_asrama' => 'Nanas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 8, 'nama_asrama' => 'Kelengkeng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 9, 'nama_asrama' => 'Anggur', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 10, 'nama_asrama' => 'Durian', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 11, 'nama_asrama' => 'Kiwi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 12, 'nama_asrama' => 'Rambutan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 13, 'nama_asrama' => 'Mangga', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 14, 'nama_asrama' => 'Cerry', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id_asrama' => 15, 'nama_asrama' => 'Lemon', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        // Insert data asrama ke tabel asrama
        DB::table('asrama')->insert($asramaData);
    }
}
