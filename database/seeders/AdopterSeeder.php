<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdopterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adopters = [
            [
                'id'=> 1,
                'first_name' => 'John',
                'prefix' => '',
                'last_name' => 'Doe',
            ]
            ];
            DB::table('adopters')->insert($adopters);
    }
}
