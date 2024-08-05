<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // $faker = Faker::create();
        // $numberOfUsers = 50; // Misalnya, kita ingin membuat 100 user

        // for ($i = 0; $i < $numberOfUsers; $i++) {
        //     Patient::create([
        //         'nama_lengkap_pasien' => $faker->name,
        //     ]);
        // }

        User::factory()->create([
            'name' => 'Admin RSA',
            'email' => 'admin@rumahsinggahamanah.id',
            'password' => Hash::make('admin1234'),
        ]);
    }
}
