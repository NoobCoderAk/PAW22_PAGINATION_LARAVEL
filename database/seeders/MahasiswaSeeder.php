<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModeEvents;
use App\Models\Mahasiswa;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table mahasiswa
        /*Mahasiswa::create([
            'nama' => 'Joni',
            'nim' => '20200140018',
            'alamat' => 'Jl. Panglateh'
        ]);*/

        // Menggunakan Faker pada Laravel
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20 ; $i++){
            //inssert data ke table mahasiswa menggunakan Faker
            Mahasiswa::create([
                'nama' => $faker->name,
                'nim' => $faker->buildingNumber,
                'alamat' => $faker->address
            ]);
        }
    }
}