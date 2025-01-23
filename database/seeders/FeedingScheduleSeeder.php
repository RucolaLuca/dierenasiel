<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedingScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feedingschedules = [
            [
                'id' => 1,
                'name' => 'Low Carb',
                'description' => 'A diet low in carbohydrates, suitable for animals that need to manage their weight.',
                'nutrients' => 'Protein, Fat, Fiber, Carbohydrates',
            ],
            [
                'id' => 2,
                'name' => 'High Carb',
                'description' => 'A high carbohydrate diet designed for active animals that require more energy.',
                'nutrients' => 'Protein, Fat, Fiber, Carbohydrates',
            ],
            [
                'id' => 3,
                'name' => 'High Protein',
                'description' => 'A high protein diet to support muscle growth and repair.',
                'nutrients' => 'Protein, Fat, Fiber, Carbohydrates',
            ],
            [
                'id' => 4,
                'name' => 'Low Fat',
                'description' => 'A low fat diet for animals that need to manage their fat intake.',
                'nutrients' => 'Protein, Carbohydrates, Fiber',
            ],
            [
                'id' => 5,
                'name' => 'Balanced Diet',
                'description' => 'A balanced diet that includes all essential nutrients for overall health.',
                'nutrients' => 'Protein, Fat, Fiber, Carbohydrates, Vitamins, Minerals',
            ],
            [
                'id' => 6,
                'name' => 'Puppy Diet',
                'description' => 'A special diet formulated for puppies to support their growth and development.',
                'nutrients' => 'Protein, Fat, Fiber, Carbohydrates, Vitamins, Minerals',
            ],
            [
                'id' => 7,
                'name' => 'Senior Diet',
                'description' => 'A diet designed for senior animals to support their aging needs.',
                'nutrients' => 'Protein, Fat, Fiber, Carbohydrates, Vitamins, Minerals',
            ],
            [
                'id' => 8,
                'name' => 'Weight Gain',
                'description' => 'A diet for animals that need to gain weight, rich in calories and nutrients.',
                'nutrients' => 'Protein, Fat, Carbohydrates, Fiber',
            ],
            [
                'id' => 9,
                'name' => 'Weight Loss',
                'description' => 'A diet for animals that need to lose weight, low in calories but high in essential nutrients.',
                'nutrients' => 'Protein, Fiber, Carbohydrates, Low Fat',
            ],
            [
                'id' => 10,
                'name' => 'Maintenance Diet',
                'description' => 'A diet for maintaining current weight and overall health.',
                'nutrients' => 'Protein, Fat, Fiber, Carbohydrates, Vitamins, Minerals',
            ]
        ];
        DB::table('feeding_schedules')->insert($feedingschedules);
    }
}
