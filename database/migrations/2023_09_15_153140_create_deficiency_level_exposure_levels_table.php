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
        Schema::create('deficiency_level_exposure_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deficiency_level_id');
            $table->unsignedBigInteger('exposure_level_id');
            $table->string('value', 255)->nullable();
            $table->string('color', 45)->nullable();
            $table->timestamps();

            $table->foreign('deficiency_level_id')->references('id')->on('deficiency_levels');
            $table->foreign('exposure_level_id')->references('id')->on('exposure_levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deficiency_level_exposure_levels');
    }
};
