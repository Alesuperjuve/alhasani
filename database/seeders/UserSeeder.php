<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Zinedine Zidane',
            'username' => 'Juventini',
            'password' => Hash::make('Turin1998'),
            'role' => 'Superadmin',
        ]);

        User::create([
            'name' => 'Kasparov Nezmetdinov',
            'username' => 'Nezmetdinov',
            'password' => Hash::make('Gambitraja2000'),
            'role' => 'User Biasa',
        ]);
    }
}





