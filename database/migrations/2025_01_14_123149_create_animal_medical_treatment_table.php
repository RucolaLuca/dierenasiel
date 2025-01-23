<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animal_medical_treatment', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger("animal_id");
            $table->unsignedBigInteger("medical_treatment_id");
            $table->timestamps();
            
            
            $table->foreign("animal_id")
            ->references("id")
            ->on("animals");
            $table->foreign("medical_treatment_id")
            ->references("id")
            ->on("medical_treatments");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_medical_treatment');
    }
};
