<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KamarSeeder extends Seeder
{
    public function run()
    {
        // Insert data kamar ke tabel kamar
        for ($i = 1; $i <= 15; $i++) {
            DB::table('kamar')->insert([
                'id_kamar' => $i,
                'id_asrama' => $i,
                'kapasitas' => 5,
                'nama_kamar' => 'Kamar ' . $i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
