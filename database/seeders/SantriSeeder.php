<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;

class SantriSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Daftar nama-nama kota di Indonesia
        $indonesianCities = [
            'Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Medan', 'Semarang', 'Palembang',
            'Makassar', 'Bogor', 'Malang', 'Padang', 'Denpasar', 'Pontianak', 'Samarinda',
            'Balikpapan', 'Manado', 'Pekanbaru', 'Banjarmasin', 'Jambi', 'Ambon', 'Jayapura',
            'Banda Aceh', 'Mataram', 'Kupang', 'Palangkaraya', 'Ternate', 'Tidore', 'Sorong',
            'Kendari', 'Gorontalo', 'Bengkulu', 'Serang', 'Cilegon'
        ];

        // Nama laki-laki dan perempuan yang disediakan
        $maleNames = [
            'Arif Hakiem', 'Muhammad Rifat', 'Muhammad Nahdi', 'Azka Syabana', 'Hafidz Ahmad', 'Muhammad Anis Afiqi','Ahmad Haris Qornain', 'Muhammad Haris', 'Ahmad Abdul Wahid Siddik', 'Ayman Abdul Wahid Siddik', 'Qois Hasan', 'Qowam', 'Agung Pramono', 'Mulya Adam', 'Muhammad Hanif', 'Jauhari', 'Jauda', 'Ahmad Qouraish', 'Muhammad Syifa','Kazim Muttaqin', 'Muhammad Syauqie', 'Rikhwan Mufidi', 'Rifan Sidqi', 'Muhammad Fabi', 'Asyaf'
        ];

        $femaleNames = [
            'Farah Faida', 'Hamidah Hamama', 'Noora', 'Wulinda Musyarofah', 'Ifah Bayi', 'Nana', 'Istiqamatud Diniyya', 'Saidah Difla Iklila', 'Amanda Amni Malihah', 'Farah Fatimatuz Zahra', 'Jannati', 'Raouda Moufida', 'Zuhriyah Khadijah', 'Sulha Hunafa', 'Zeralda', 'Rikhwa Arija'
        ];

        // Nama pecatur dunia
        $chessPlayers = [
            'Magnus Carlsen', 'Fabiano Caruana', 'Hikaru Nakamura', 'Alireza Firouzja', 'Ian Nepomniachtchi',
            'Levon Aronian', 'Anatoly Karpov', 'Judit Polgár', 'Hou Yifan', 'Alexandra Kosteniuk'
        ];

        $namaDepan = [
            'Ahmad', 'Muhammad', 'Rudi', 'Agus', 'Soekarno', 
            'Joko', 'Budi', 'Imam', 'Lukman', 'Slamet', 
            'Habib', 'Fahmi', 'Zaid', 'Ali', 'Irfan', 
            'Rizky', 'Syahrul', 'Rahman', 'Hasan', 'Usman',
            // Nama legenda bulutangkis Indonesia
            'Taufik', 'Hendra', 'Susi', 'Rudy', 'Liliyana',
            'Alan', 'Hariyanto', 'Rexy', 'Ardy', 'Icuk'
        ];

        $namaBelakang = [
            'Simatupang', 'Siregar', 'Hidayat', 'Saputra', 'Pratama', 
            'Pangestu', 'Putra', 'Faisal', 'Firmansyah', 'Kusuma', 
            'Ramadhan', 'Nur', 'Zulkifli', 'Kurniawan', 'Maulana', 
            'Hakim', 'Wijaya', 'Sasmita', 'Santoso', 'Syahrial',
            // Nama legenda sepak bola Indonesia
            'Ramang', 'Kurniawan', 'Bima', 'Ronny', 'Widodo',
            'Bambang', 'Ponaryo', 'Anjas', 'Mansyur', 'Roby'
        ];

        // Gabungkan semua nama ke dalam satu array dan isi kekurangannya secara acak
        $allNames = array_merge($namaDepan, $namaBelakang, $chessPlayers);

        // Tambahkan nama acak untuk mencapai total 100 data
        for ($i = count($allNames); $i < 100; $i++) {
            $allNames[] = $faker->firstName . ' ' . $faker->lastName;
        }

        // Insert data
        foreach ($allNames as $index => $name) {
            $gender = in_array($name, $femaleNames) ? 'P' : 'L';

            DB::table('santri')->insert([
                'nama_santri' => $name,
                'id_kamar' => $faker->numberBetween(1, 10),
                'nik' => $faker->unique()->numerify('####################'),
                'nis' => $faker->unique()->numerify('####################'),
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->dateTimeBetween('-20 years', '-10 years')->format('Y-m-d'),
                'jenis_kelamin' => $gender,
                'foto' => null,
                'ktp' => null,
                'alamat' => $faker->address,
                'kota' => $faker->randomElement($indonesianCities),
                'pendidikan' => $faker->randomElement(['MTS', 'MA', 'TAKHASSUS', 'LAINNYA']),
                'kelas' => $faker->randomElement(['7', '8', '9', '10', '11', '12', '00']),
                'tanggal_masuk_pondok' => $faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
                'tanggal_keluar_pondok' => $faker->optional()->dateTimeBetween('-5 years', 'now')?->format('Y-m-d'),
                'tanggal_masuk_mts' => $faker->optional()->dateTimeBetween('-10 years', '-5 years')?->format('Y-m-d'),
                'tanggal_masuk_ma' => $faker->optional()->dateTimeBetween('-10 years', '-5 years')?->format('Y-m-d'),
                'tanggal_lulus_mts' => $faker->optional()->dateTimeBetween('-10 years', '-5 years')?->format('Y-m-d'),
                'tanggal_lulus_ma' => $faker->optional()->dateTimeBetween('-10 years', '-5 years')?->format('Y-m-d'),
                'hp_santri' => $faker->phoneNumber,
                'hobi' => $faker->randomElement(['Membaca', 'Bersepeda', 'Memancing', 'Memasak', 'Catur']),
                'email' => $faker->unique()->safeEmail,
                'sekolah_asal' => $faker->company,
                'alamat_sekolah_asal' => $faker->address,
                'nama_ayah' => $faker->firstNameMale,
                'hidup_ayah' => $faker->randomElement(['Hidup', 'Meninggal']),
                'kerja_ayah' => substr($faker->jobTitle, 0, 20),
                'hp_ayah' => $faker->phoneNumber,
                'nama_ibu' => $faker->firstNameFemale,
                'hidup_ibu' => $faker->randomElement(['Hidup', 'Meninggal']),
                'kerja_ibu' => substr($faker->jobTitle, 0, 20),
                'hp_ibu' => $faker->phoneNumber,
                'nama_wali' => $faker->optional()->firstName,
                'status_wali' => $faker->optional()->randomElement(['Paman', 'Bibi', 'Kakek', 'Nenek']),
                'hp_wali' => $faker->optional()->phoneNumber,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
