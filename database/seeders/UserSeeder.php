<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // 1. Akun Admin / Pengujian Utama
        User::create([
            'name'              => 'Nashla Affini',
            'email'             => 'nashla@student.telkomuniversity.ac.id',
            'email_verified_at' => now(),
            'password'          => Hash::make('password123'),
        ]);

        // 2. Membuat 5 Akun Dummy Menggunakan Faker
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name'              => $faker->name(),
                'email'             => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password'          => Hash::make('password123'),
            ]);
        }
    }
}