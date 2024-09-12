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
        // $faker = Faker::create();

        // foreach (range(1, 54) as $index) {
        //     DB::table('testimoni')->insert([
        //         'profile_img' => $faker->imageUrl(100, 100, 'people', true, 'Faker'), // URL gambar random
        //         'nama'        => $faker->name,
        //         'job'         => $faker->jobTitle,
        //         'testimoni'   => $faker->sentence(10), // Kalimat random sepanjang 10 kata
        //     ]);
        // }

        $data = [
            [            
            'profile_img' => '',
            'nama'        => "Ibu Jasmalinda",
            'desk'         => "sumatera barat",
            'testimoni'   => "alhamdulillah lancar & aman, nyaman dan karena tanpa transit jadi tidak capek",
            ],
            [            
            'profile_img' => '',
            'nama'        => "Ibu elis sumiarti",
            'desk'         => "jama'ah Sinai",
            'testimoni'   => " masyaAllah sangat baik sekali karena tidak ada transit terlebih dahulu jadi tidak terlalu menguras tenaga. Travel Sinai is the best",
            ],
            [            
            'profile_img' => '',
            'nama'        => "Bapa sudirman syam",
            'desk'         => "jama'ah Sinai",
            'testimoni'   => "perjalanan bersama sinai nyaman karena tidak ada transit jadi tidak ada rasa letih, apalagi untuk orang tua seperti saya",
            ],
        ];
        DB::table('testimoni')->insert($data);
    }
}