<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adoptions =[
            [
                'id' => 1,
                'date_of_application' => '2025-01-16',
                'status_of_the_application' => 'Processing',
                'adopter_id' => 1,
                'animal_id' => 1,
            ]
            ];
            DB::table('adoptions')->insert($adoptions);
    }
}
