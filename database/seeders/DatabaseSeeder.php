<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Kenji Goh',
        //    'email' => 'kenji@gmail.com',
        //]); -->

        // Panggil seeder lain
        $this->call([
            AsramaSeeder::class,
            KamarSeeder::class,
            SantriSeeder::class,
            PesantrenSeeder::class,
            UserSeeder::class,
        ]);
    }
}
