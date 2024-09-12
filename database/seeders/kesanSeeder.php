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
            'desk'         => "Jama'ah Sinai Umroh",
            'kesan'       => "Aman Nyaman ",
            ],
        ];
        DB::table('kesan')->insert($data);
    }
}