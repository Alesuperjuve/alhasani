<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Models\Santri;

class SantriSeeder extends Seeder
{
    public function run()
    {
        // Import data array dari App/Data
        $namaSantri = include app_path('Data/seederNamaSantri.php');
        $namaKota = include app_path('Data/seederNamaKota.php');
        $namaPria = include app_path('Data/seederNamaPria.php');
        $namaWanita = include app_path('Data/seederNamaWanita.php');
        $namaWalisan = include app_path('Data/seederNamaWalisan.php');
        $kerja = include app_path('Data/seederKerja.php');
        $hobi = include app_path('Data/seederNamaHobi.php');
        $foto = include app_path('Data/seederFoto.php');
        $ktp = include app_path('Data/seederKTP.php');
        $kk = include app_path('Data/seederKK.php');
        $ijazah = include app_path('Data/seederIjazah.php');
        $namaSekolah = include app_path('Data/seederNamaSekolah.php');

        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 500; $i++) {
            DB::table('santri')->insert([
                'nama_santri'           => $namaSantri[array_rand($namaSantri)],
                'id_kamar'              => rand(1, 10),
                'nik'                   => $faker->numerify('################'),
                'nisn'                  => $faker->numerify('################'),
                'tempat_lahir'          => $namaKota[array_rand($namaKota)],
                'tanggal_lahir'         => $faker->date(),
                'jenis_kelamin'         => $faker->randomElement(['L', 'P']),
                'foto'                  => $foto[array_rand($foto)],
                'ktp'                   => $ktp[array_rand($ktp)],
                'kk'                    => $kk[array_rand($kk)],
                'ijazah'                => $ijazah[array_rand($ijazah)],
                'alamat'                => $faker->address,
                'kota'                  => $namaKota[array_rand($namaKota)],
                'status'                => $faker->randomElement(['R', 'SR','S']),
                'pendidikan'            => $faker->randomElement(['1', '2', '3', '99']),
                'kelas'                 => $faker->randomElement(['7', '8', '9', '10', '11', '12', '00']),
                'tanggal_masuk_pondok'  => $faker->date(),
                'tanggal_keluar_pondok' => null,
                'tanggal_masuk_mts'     => null,
                'tanggal_masuk_ma'      => null,
                'tanggal_keluar_mts'    => null,
                'tanggal_keluar_ma'     => null,
                'hp_santri'             => $faker->phoneNumber,
                'hobi'                  => $hobi[array_rand($hobi)],
                'email'                 => $faker->unique()->safeEmail,
                'sekolah_asal'          => $namaSekolah[array_rand($namaSekolah)],
                'alamat_sekolah_asal'   => $namaKota[array_rand($namaKota)],
                'nama_ayah'             => $namaPria[array_rand($namaPria)],
                'hidup_ayah'            => $faker->randomElement(['1', '0']),
                'kerja_ayah'            => $kerja[array_rand($kerja)],
                'hp_ayah'               => $faker->phoneNumber,
                'nama_ibu'              => $namaWanita[array_rand($namaWanita)],
                'hidup_ibu'             => $faker->randomElement(['1', '0']),
                'kerja_ibu'             => $kerja[array_rand($kerja)],
                'hp_ibu'                => $faker->phoneNumber,
                'nama_wali'             => $namaWalisan[array_rand($namaWalisan)],
                'status_wali'           => $faker->randomElement(['1', '2', '3', '4','5','6','7']),
                'hp_wali'               => $faker->phoneNumber,
                'created_at'            => now(),
                'updated_at'            => now(),
            ]);
        }
    }
}
