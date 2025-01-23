<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medicaltreatment = [
            [
                'id' => 1,
                'date' => '15-01-2025',
                'type' => 'Antibiotics',
                'description' => 'Substance to kill bacteria'
            ]
        ];
        DB::table('medical_treatments')->insert($medicaltreatment);
    }
}
