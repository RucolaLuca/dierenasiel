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
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id();
            $table->date("date_of_application");
            $table->string("status_of_the_application");
            $table->unsignedBigInteger("adopter_id")->nullable();
            $table->unsignedBigInteger("animal_id");
            $table->timestamps();
           
            $table->foreign("adopter_id")
            ->references("id")
            ->on("adopters");
            $table->foreign("animal_id")
            ->references("id")
            ->on("animals");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
