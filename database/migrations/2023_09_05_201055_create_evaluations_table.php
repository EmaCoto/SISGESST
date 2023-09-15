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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('task_id');

            $table->string('danger');
            $table->string('effects');
            $table->string('source');
            $table->string('means');
            $table->string('individual');
            $table->unsignedBigInteger('deficiency_level_id');
            $table->string('linked', 10, 0);
            $table->string('contractor', 10, 0);
            $table->string('temporary', 10, 0);
            $table->string('time', 10, 0);
            $table->string('elimination');
            $table->string('substitution');
            $table->string('engineering_controls');
            $table->string('administrative_controls');
            $table->string('personal_protection');
            $table->string('compliance_legal');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();


            $table->foreign('task_id')->references('id')->on('tasks');
            $table->foreign('deficiency_level_id')->references('id')->on('deficiency_levels');
            $table->foreign('user_id')->references('id')->on('users');



        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};

