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
            $table->timestamps();

            $table->foreign('task_id')
                    ->references('id')
                    ->on('tasks')
                    ->onDelete('CASCADE');
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

