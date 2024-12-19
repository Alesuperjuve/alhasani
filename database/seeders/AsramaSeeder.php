<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Data\SeederNamaAsrama;
use App\Models\Asrama;

class AsramaSeeder extends Seeder
{
    public function run()
    {
         // Ambil array nama asrama dari SeederNamaAsrama
        $namaAsramaArray = include app_path('Data/seederNamaAsrama.php');
        // Shuffle array agar data random
        shuffle($namaAsramaArray);

        // Ambil hanya 4 nama unik
        $namaAsramaTerpilih = array_slice($namaAsramaArray, 0, 4);

        // Insert data ke dalam tabel asrama
        foreach ($namaAsramaTerpilih as $index => $nama) {
            DB::table('asrama')->insert([
                'id_asrama'   => $index + 1, // angka urut dimulai dari 1
                'nama_asrama' => $nama,
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
