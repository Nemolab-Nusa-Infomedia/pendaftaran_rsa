<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $faker = Factory::create();
        // for ($i=0; $i < 20 ; $i++) { 
        //     Patient::create([
        //         'nama_lengkap_pasien' => $faker->name()
        //     ]);
        // }

        User::factory()->create([
            'name' => 'Admin RSA',
            'email' => 'admin@rsa.web.id',
            'password' => Hash::make('merdeka1945#'),
        ]);
    }
}
