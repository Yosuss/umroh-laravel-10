<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [            
                'nama'        => "Ibu Jasmalinda",
                'desk'         => "sumatera barat",
                'kesan'   => "alhamdulillah lancar & aman, nyaman dan karena tanpa transit jadi tidak capek",
                ],
                [            
                'nama'        => "Ibu elis sumiarti",
                'desk'         => "jama'ah Sinai",
                'kesan'   => " masyaAllah sangat baik sekali karena tidak ada transit terlebih dahulu jadi tidak terlalu menguras tenaga. Travel Sinai is the best",
                ],
                [            
                'nama'        => "Bapa sudirman syam",
                'desk'         => "jama'ah Sinai",
                'kesan'   => "perjalanan bersama sinai nyaman karena tidak ada transit jadi tidak ada rasa letih, apalagi untuk orang tua seperti saya",
                ],
            ];
        DB::table('kesan')->insert($data);
    }
}