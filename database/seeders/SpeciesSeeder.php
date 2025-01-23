<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $species = [
        [
            'id' => 1,
            'name' => 'Dog',
        ],
        [
            'id'=> 2,
            'name' => 'Cat',
        ],
        [
            'id'=> 3,
            'name' => 'Bird',
        ],
        [
            'id'=> 4,
            'name' => 'Turtle',
        ],
        [
            'id'=> 5,
            'name' => 'Snake',
        ]
        ];
        DB::table('species')->insert($species);
    }
}
