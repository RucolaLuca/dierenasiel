<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;

class MigrationExistanceTest extends TestCase
{
    public function test_animals_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('animals'), 'Animals table does not exist.');
    }

    public function test_categories_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('categories'), 'Categories table does not exist.');
    }

    public function test_medical_treatments_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('medical_treatments'), 'Medical_treatments table does not exist.');
    }

    public function test_feeding_schedules_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('feeding_schedules'), 'Feeding_schedules table does not exist.');
    }

    public function test_adopters_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('adopters'), 'Adopters table does not exist.');
    }

    public function test_adoptions_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('adoptions'), 'Adoptions table does not exist.');
    }

    public function test_animal_medical_treatment_migration_exists()
    {
        $this->assertTrue(Schema::hasTable('animal_medical_treatment'), 'Animal_medical_treatment pivot table does not exist.');
    }
}
