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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("species_id");
            $table->foreign("species_id")
            ->references("id")
            ->on("species");
            $table->string("race");
            $table->string("age");
            $table->string("gender");
            $table->string("medical_history");
            $table->unsignedBigInteger("feedingschedule_id")->nullable();
            $table->foreign("feedingschedule_id")
            ->references("id")
            ->on("feeding_schedules");
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
