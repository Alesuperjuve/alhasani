<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pesantren; 

class PesantrenSeeder extends Seeder
{
     public function run()
    {
        DB::table('pesantren')->insert([
            'nama_pesantren' => 'Pesantren Al-Hasani',
            'alamat_pesantren' => 'Jl. Pesantren No 87',
            'kota' => 'Jakarta',
            'hp_pesantren_1' => '081234567890',
            'hp_pesantren_2' => '081298765432',
            'email' => 'info@pesantrenhasani.com',
            'instagram' => 'al_hasani',
            'web' => 'https://www.pesantrenhasani.com',
            'pengasuh' => 'Kyai Haji Muhammad Hasan',
            'lurah' => 'Ahmad Zulfikar',
            'logo' => 'logo.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
