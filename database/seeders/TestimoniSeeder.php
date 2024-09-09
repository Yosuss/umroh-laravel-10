<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('testimoni')->insert([
                'profile_img' => $faker->imageUrl(100, 100, 'people', true, 'Faker'), // URL gambar random
                'nama'        => $faker->name,
                'job'         => $faker->jobTitle,
                'testimoni'   => $faker->sentence(10), // Kalimat random sepanjang 10 kata
            ]);
        }
    }
}