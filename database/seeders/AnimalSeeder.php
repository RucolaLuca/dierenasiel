<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $animals = [
            [
                'id' => 1,
                'name' => 'Max',
                'species_id' => 2,
                'race' => 'British Shorthair',
                'age' => '2',
                'gender' => 'Male',
                'medical_history' => 'Diabetes',
                'feedingschedule_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Miyuki',
                'species_id' => 2,
                'race' => 'Siamese',
                'age' => '3',
                'gender' => 'Female',
                'medical_history' => 'Broken Front Left Leg',
                'feedingschedule_id' => 8, 
            ],
            [
                'id' => 3,
                'name' => 'Buddy',
                'species_id' => 4,
                'race' => 'Red-Eared Slider',
                'age' => '24',
                'gender' => 'Male',
                'medical_history' => 'None',
                'feedingschedule_id' => 5,
            ],
            [
                'id' => 4,
                'name' => 'Spike',
                'species_id' => 5,
                'race' => 'Ball Python',
                'age' => '5',
                'gender' => 'Male',
                'medical_history' => 'Mites',
                'feedingschedule_id' => 3,
            ],
            [
                'id' => 5,
                'name' => 'Ari',
                'species_id' => 3,
                'race' => 'Hummingbird',
                'age' => '1',
                'gender' => 'Female',
                'medical_history' => 'Broken Wing',
                'feedingschedule_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Luna',
                'species_id' => 1,
                'race' => 'Golden Retriever',
                'age' => '2',
                'gender' => 'Female',
                'medical_history' => 'Sleep Apnea',
                'feedingschedule_id' => 2,
            ],
            [
                'id' => 7,
                'name' => 'Gizmo',
                'species_id' => 3,
                'race' => 'Ara Parrot',
                'age' => '4',
                'gender' => 'Male',
                'medical_history' => 'None',
                'feedingschedule_id' => 7,
            ]
        ];
            DB::table('animals')->insert($animals);
    }
}
