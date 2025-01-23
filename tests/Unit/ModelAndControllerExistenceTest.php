<?php

namespace Tests\Unit;

use Tests\TestCase;

class ModelAndControllerExistenceTest extends TestCase
{
    public function test_animal_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Animal::class), 'Animal model does not exist.');
    }

    public function test_animal_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\AnimalController::class), 'Animal controller does not exist.');
    }

    public function test_category_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Category::class), 'Category model does not exist.');
    }

    public function test_category_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\CategoryController::class), 'Category controller does not exist.');
    }

    public function test_medical_treatment_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\MedicalTreatment::class), 'MedicalTreatment model does not exist.');
    }

    public function test_medical_treatment_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\MedicalTreatmentController::class), 'MedicalTreatment controller does not exist.');
    }

    public function test_feeding_schedule_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\FeedingSchedule::class), 'FeedingSchedule model does not exist.');
    }

    public function test_feeding_schedule_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\FeedingScheduleController::class), 'FeedingSchedule controller does not exist.');
    }

    public function test_adopter_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Adopter::class), 'Adopter model does not exist.');
    }

    public function test_adopter_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\AdopterController::class), 'Adopter controller does not exist.');
    }

    public function test_adoption_model_exists()
    {
        $this->assertTrue(class_exists(\App\Models\Adoption::class), 'Adoption model does not exist.');
    }

    public function test_adoption_controller_exists()
    {
        $this->assertTrue(class_exists(\App\Http\Controllers\AdoptionController::class), 'Adoption controller does not exist.');
    }
}
