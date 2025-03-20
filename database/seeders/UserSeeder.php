<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Memuat data dari file seeder
        $namaUser   = include app_path('Data/seederPembalap.php');
        $emailku    = include app_path('Data/seederEmail.php');
        $kotaku     = include app_path('Data/seederNamaKota.php');

        //Insert data yang pasti 
        DB::table('users')->insert([
                'name'      => 'Quonita Hasan',
                'email'     => 'qonet@gmail.com',
                'password'  => Hash::make('12345678'),
                'nik'       => $faker->numerify('################'),
                'kota'      => $kotaku[array_rand($kotaku)],
                'pos'       => '0',
                'level'     => '0',
            ]);

        // Looping untuk insert data
        for ($i = 0; $i < 9; $i++) {
            if (empty($namaUser) || empty($emailku)) {
                // Berhenti jika array sudah habis
                break;
            }

            // Pilih elemen secara acak dan hapus dari array
            $nameKey = array_rand($namaUser);
            $emailKey = array_rand($emailku);

            $name = $namaUser[$nameKey];
            $email = $emailku[$emailKey];

            // Hapus elemen yang telah digunakan
            unset($namaUser[$nameKey]);
            unset($emailku[$emailKey]);

            // Insert data ke tabel users
            DB::table('users')->insert([
                'name'      => $name,
                'email'     => $email,
                'password'  => Hash::make('12345678'),
                'nik'       => $faker->numerify('################'),
                'kota'      => $kotaku[array_rand($kotaku)],
                'pos'       => $faker->randomElement(['0', '1', '2', '3', '4', '5', '6', '7', '99']),
                'level'     => $faker->randomElement(['0', '1', '2', '3', '4']),
            ]);
        }
    }
}





