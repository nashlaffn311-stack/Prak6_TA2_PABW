<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriAngkutan;
use App\Models\Rute;
use Faker\Factory as Faker;

class TransLiveSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $kategoris = [
            ['jenis_angkutan' => 'Bus Trans Sumedang', 'deskripsi' => 'Layanan bus koridor utama.'],
            ['jenis_angkutan' => 'Angkot Reguler', 'deskripsi' => 'Angkutan kota rute pemukiman.'],
            ['jenis_angkutan' => 'Shuttle Intercity', 'deskripsi' => 'Armada mini bus cepat.']
        ];

        foreach ($kategoris as $kat) {
            $kategoriModel = KategoriAngkutan::create($kat);

            for ($i = 0; $i < 4; $i++) {
                Rute::create([
                    'kode' => 'TL-' . $faker->unique()->numberBetween(10, 99),
                    'kategori_angkutan_id' => $kategoriModel->id,
                    'asal' => $faker->randomElement(['Terminal Ciakar', 'Baleendah', 'Majalaya', 'Terminal Leuwipanjang']),
                    'tujuan' => $faker->randomElement(['Jatinangor', 'Sumedang Kota', 'Bandung Kota', 'Cileunyi']),
                    'jam' => sprintf('%02d:00 WIB', $faker->numberBetween(6, 18)),
                    'tarif' => $faker->numberBetween(5000, 25000),
                    'status' => $faker->randomElement(['Tersedia', 'Penuh', 'Tidak Beroperasi']),
                ]);
            }
        }
    }
}